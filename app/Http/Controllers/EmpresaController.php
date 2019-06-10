<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Empresa;
use Amranidev\Ajaxis\Ajaxis;
use URL;

/**
 * Class EmpresaController.
 *
 * @author  The scaffold-interface created at 2019-06-10 08:01:39pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Index - empresa';
        $empresas = Empresa::paginate(6);
        return view('empresa.index',compact('empresas','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create - empresa';
        
        return view('empresa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $empresa = new Empresa();

        
        $empresa->codigo = $request->codigo;

        
        $empresa->Nome = $request->Nome;

        
        
        $empresa->save();

        $pusher = App::make('pusher');

        //default pusher notification.
        //by default channel=test-channel,event=test-event
        //Here is a pusher notification example when you create a new resource in storage.
        //you can modify anything you want or use it wherever.
        $pusher->trigger('test-channel',
                         'test-event',
                        ['message' => 'A new empresa has been created !!']);

        return redirect('empresa');
    }

    /**
     * Display the specified resource.
     *
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function show($id,Request $request)
    {
        $title = 'Show - empresa';

        if($request->ajax())
        {
            return URL::to('empresa/'.$id);
        }

        $empresa = Empresa::findOrfail($id);
        return view('empresa.show',compact('title','empresa'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $title = 'Edit - empresa';
        if($request->ajax())
        {
            return URL::to('empresa/'. $id . '/edit');
        }

        
        $empresa = Empresa::findOrfail($id);
        return view('empresa.edit',compact('title','empresa'  ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function update($id,Request $request)
    {
        $empresa = Empresa::findOrfail($id);
    	
        $empresa->codigo = $request->codigo;
        
        $empresa->Nome = $request->Nome;
        
        
        $empresa->save();

        return redirect('empresa');
    }

    /**
     * Delete confirmation message by Ajaxis.
     *
     * @link      https://github.com/amranidev/ajaxis
     * @param    \Illuminate\Http\Request  $request
     * @return  String
     */
    public function DeleteMsg($id,Request $request)
    {
        $msg = Ajaxis::MtDeleting('Warning!!','Would you like to remove This?','/empresa/'. $id . '/delete');

        if($request->ajax())
        {
            return $msg;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param    int $id
     * @return  \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     	$empresa = Empresa::findOrfail($id);
     	$empresa->delete();
        return URL::to('empresa');
    }
}
