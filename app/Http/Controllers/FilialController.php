<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Filial;
use Amranidev\Ajaxis\Ajaxis;
use URL;

use App\Empresa;


/**
 * Class FilialController.
 *
 * @author  The scaffold-interface created at 2019-06-10 08:03:35pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class FilialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Index - filial';
        $filials = Filial::paginate(6);
        return view('filial.index',compact('filials','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create - filial';
        
        $empresas = Empresa::all()->pluck('codigo','id');
        
        return view('filial.create',compact('title','empresas'  ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $filial = new Filial();

        
        $filial->codigo = $request->codigo;

        
        $filial->razao_social = $request->razao_social;

        
        $filial->nome_fantasia = $request->nome_fantasia;

        
        
        $filial->empresa_id = $request->empresa_id;

        
        $filial->save();

        $pusher = App::make('pusher');

        //default pusher notification.
        //by default channel=test-channel,event=test-event
        //Here is a pusher notification example when you create a new resource in storage.
        //you can modify anything you want or use it wherever.
        $pusher->trigger('test-channel',
                         'test-event',
                        ['message' => 'A new filial has been created !!']);

        return redirect('filial');
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
        $title = 'Show - filial';

        if($request->ajax())
        {
            return URL::to('filial/'.$id);
        }

        $filial = Filial::findOrfail($id);
        return view('filial.show',compact('title','filial'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $title = 'Edit - filial';
        if($request->ajax())
        {
            return URL::to('filial/'. $id . '/edit');
        }

        
        $empresas = Empresa::all()->pluck('codigo','id');

        
        $filial = Filial::findOrfail($id);
        return view('filial.edit',compact('title','filial' ,'empresas' ) );
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
        $filial = Filial::findOrfail($id);
    	
        $filial->codigo = $request->codigo;
        
        $filial->razao_social = $request->razao_social;
        
        $filial->nome_fantasia = $request->nome_fantasia;
        
        
        $filial->empresa_id = $request->empresa_id;

        
        $filial->save();

        return redirect('filial');
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
        $msg = Ajaxis::MtDeleting('Warning!!','Would you like to remove This?','/filial/'. $id . '/delete');

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
     	$filial = Filial::findOrfail($id);
     	$filial->delete();
        return URL::to('filial');
    }
}
