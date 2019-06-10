<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Pedido_item;
use Amranidev\Ajaxis\Ajaxis;
use URL;

use App\Pedido;


use App\Produto;


/**
 * Class Pedido_itemController.
 *
 * @author  The scaffold-interface created at 2019-06-10 08:27:52pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Pedido_itemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Index - pedido_item';
        $pedido_items = Pedido_item::paginate(6);
        return view('pedido_item.index',compact('pedido_items','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create - pedido_item';
        
        $pedidos = Pedido::all()->pluck('codigo','id');
        
        $produtos = Produto::all()->pluck('codigo','id');
        
        return view('pedido_item.create',compact('title','pedidos' , 'produtos'  ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pedido_item = new Pedido_item();

        
        $pedido_item->codigo = $request->codigo;

        
        $pedido_item->quantidade = $request->quantidade;

        
        $pedido_item->percentual_desconto = $request->percentual_desconto;

        
        
        $pedido_item->pedido_id = $request->pedido_id;

        
        $pedido_item->produto_id = $request->produto_id;

        
        $pedido_item->save();

        $pusher = App::make('pusher');

        //default pusher notification.
        //by default channel=test-channel,event=test-event
        //Here is a pusher notification example when you create a new resource in storage.
        //you can modify anything you want or use it wherever.
        $pusher->trigger('test-channel',
                         'test-event',
                        ['message' => 'A new pedido_item has been created !!']);

        return redirect('pedido_item');
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
        $title = 'Show - pedido_item';

        if($request->ajax())
        {
            return URL::to('pedido_item/'.$id);
        }

        $pedido_item = Pedido_item::findOrfail($id);
        return view('pedido_item.show',compact('title','pedido_item'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $title = 'Edit - pedido_item';
        if($request->ajax())
        {
            return URL::to('pedido_item/'. $id . '/edit');
        }

        
        $pedidos = Pedido::all()->pluck('codigo','id');

        
        $produtos = Produto::all()->pluck('codigo','id');

        
        $pedido_item = Pedido_item::findOrfail($id);
        return view('pedido_item.edit',compact('title','pedido_item' ,'pedidos', 'produtos' ) );
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
        $pedido_item = Pedido_item::findOrfail($id);
    	
        $pedido_item->codigo = $request->codigo;
        
        $pedido_item->quantidade = $request->quantidade;
        
        $pedido_item->percentual_desconto = $request->percentual_desconto;
        
        
        $pedido_item->pedido_id = $request->pedido_id;

        
        $pedido_item->produto_id = $request->produto_id;

        
        $pedido_item->save();

        return redirect('pedido_item');
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
        $msg = Ajaxis::MtDeleting('Warning!!','Would you like to remove This?','/pedido_item/'. $id . '/delete');

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
     	$pedido_item = Pedido_item::findOrfail($id);
     	$pedido_item->delete();
        return URL::to('pedido_item');
    }
}
