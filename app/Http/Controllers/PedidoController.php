<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Pedido;
use Amranidev\Ajaxis\Ajaxis;
use URL;

use App\Cliente;


use App\Filial;


/**
 * Class PedidoController.
 *
 * @author  The scaffold-interface created at 2019-06-10 08:21:43pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Index - pedido';
        $pedidos = Pedido::paginate(6);
        return view('pedido.index',compact('pedidos','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create - pedido';
        
        $clientes = Cliente::all()->pluck('codigo','id');
        
        $filials = Filial::all()->pluck('codigo','id');
        
        return view('pedido.create',compact('title','clientes' , 'filials'  ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pedido = new Pedido();

        
        $pedido->codigo = $request->codigo;

        
        $pedido->emissao = $request->emissao;

        
        $pedido->processamento = $request->processamento;

        
        $pedido->observacao = $request->observacao;

        
        
        $pedido->cliente_id = $request->cliente_id;

        
        $pedido->filial_id = $request->filial_id;

        
        $pedido->save();

        $pusher = App::make('pusher');

        //default pusher notification.
        //by default channel=test-channel,event=test-event
        //Here is a pusher notification example when you create a new resource in storage.
        //you can modify anything you want or use it wherever.
        $pusher->trigger('test-channel',
                         'test-event',
                        ['message' => 'A new pedido has been created !!']);

        return redirect('pedido');
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
        $title = 'Show - pedido';

        if($request->ajax())
        {
            return URL::to('pedido/'.$id);
        }

        $pedido = Pedido::findOrfail($id);
        return view('pedido.show',compact('title','pedido'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $title = 'Edit - pedido';
        if($request->ajax())
        {
            return URL::to('pedido/'. $id . '/edit');
        }

        
        $clientes = Cliente::all()->pluck('codigo','id');

        
        $filials = Filial::all()->pluck('codigo','id');

        
        $pedido = Pedido::findOrfail($id);
        return view('pedido.edit',compact('title','pedido' ,'clientes', 'filials' ) );
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
        $pedido = Pedido::findOrfail($id);
    	
        $pedido->codigo = $request->codigo;
        
        $pedido->emissao = $request->emissao;
        
        $pedido->processamento = $request->processamento;
        
        $pedido->observacao = $request->observacao;
        
        
        $pedido->cliente_id = $request->cliente_id;

        
        $pedido->filial_id = $request->filial_id;

        
        $pedido->save();

        return redirect('pedido');
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
        $msg = Ajaxis::MtDeleting('Warning!!','Would you like to remove This?','/pedido/'. $id . '/delete');

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
     	$pedido = Pedido::findOrfail($id);
     	$pedido->delete();
        return URL::to('pedido');
    }
}
