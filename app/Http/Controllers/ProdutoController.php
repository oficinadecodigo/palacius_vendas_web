<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Produto;
use Amranidev\Ajaxis\Ajaxis;
use URL;

/**
 * Class ProdutoController.
 *
 * @author  The scaffold-interface created at 2019-06-10 08:25:14pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Index - produto';
        $produtos = Produto::paginate(6);
        return view('produto.index',compact('produtos','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create - produto';
        
        return view('produto.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $produto = new Produto();

        
        $produto->codigo = $request->codigo;

        
        $produto->descricao = $request->descricao;

        
        $produto->unidade_medida = $request->unidade_medida;

        
        
        $produto->save();

        $pusher = App::make('pusher');

        //default pusher notification.
        //by default channel=test-channel,event=test-event
        //Here is a pusher notification example when you create a new resource in storage.
        //you can modify anything you want or use it wherever.
        $pusher->trigger('test-channel',
                         'test-event',
                        ['message' => 'A new produto has been created !!']);

        return redirect('produto');
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
        $title = 'Show - produto';

        if($request->ajax())
        {
            return URL::to('produto/'.$id);
        }

        $produto = Produto::findOrfail($id);
        return view('produto.show',compact('title','produto'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $title = 'Edit - produto';
        if($request->ajax())
        {
            return URL::to('produto/'. $id . '/edit');
        }

        
        $produto = Produto::findOrfail($id);
        return view('produto.edit',compact('title','produto'  ));
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
        $produto = Produto::findOrfail($id);
    	
        $produto->codigo = $request->codigo;
        
        $produto->descricao = $request->descricao;
        
        $produto->unidade_medida = $request->unidade_medida;
        
        
        $produto->save();

        return redirect('produto');
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
        $msg = Ajaxis::MtDeleting('Warning!!','Would you like to remove This?','/produto/'. $id . '/delete');

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
     	$produto = Produto::findOrfail($id);
     	$produto->delete();
        return URL::to('produto');
    }
}
