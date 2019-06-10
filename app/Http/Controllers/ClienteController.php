<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Cliente;
use Amranidev\Ajaxis\Ajaxis;
use URL;

use App\Empresa;


/**
 * Class ClienteController.
 *
 * @author  The scaffold-interface created at 2019-06-10 08:05:35pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Index - cliente';
        $clientes = Cliente::paginate(6);
        return view('cliente.index',compact('clientes','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create - cliente';
        
        $empresas = Empresa::all()->pluck('codigo','id');
        
        return view('cliente.create',compact('title','empresas'  ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cliente = new Cliente();

        
        $cliente->codigo = $request->codigo;

        
        $cliente->nome = $request->nome;

        
        
        $cliente->empresa_id = $request->empresa_id;

        
        $cliente->save();

        $pusher = App::make('pusher');

        //default pusher notification.
        //by default channel=test-channel,event=test-event
        //Here is a pusher notification example when you create a new resource in storage.
        //you can modify anything you want or use it wherever.
        $pusher->trigger('test-channel',
                         'test-event',
                        ['message' => 'A new cliente has been created !!']);

        return redirect('cliente');
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
        $title = 'Show - cliente';

        if($request->ajax())
        {
            return URL::to('cliente/'.$id);
        }

        $cliente = Cliente::findOrfail($id);
        return view('cliente.show',compact('title','cliente'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $title = 'Edit - cliente';
        if($request->ajax())
        {
            return URL::to('cliente/'. $id . '/edit');
        }

        
        $empresas = Empresa::all()->pluck('codigo','id');

        
        $cliente = Cliente::findOrfail($id);
        return view('cliente.edit',compact('title','cliente' ,'empresas' ) );
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
        $cliente = Cliente::findOrfail($id);
    	
        $cliente->codigo = $request->codigo;
        
        $cliente->nome = $request->nome;
        
        
        $cliente->empresa_id = $request->empresa_id;

        
        $cliente->save();

        return redirect('cliente');
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
        $msg = Ajaxis::MtDeleting('Warning!!','Would you like to remove This?','/cliente/'. $id . '/delete');

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
     	$cliente = Cliente::findOrfail($id);
     	$cliente->delete();
        return URL::to('cliente');
    }
}
