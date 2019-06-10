<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Condicao_pagamento;
use Amranidev\Ajaxis\Ajaxis;
use URL;

/**
 * Class Condicao_pagamentoController.
 *
 * @author  The scaffold-interface created at 2019-06-10 08:19:37pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Condicao_pagamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Index - condicao_pagamento';
        $condicao_pagamentos = Condicao_pagamento::paginate(6);
        return view('condicao_pagamento.index',compact('condicao_pagamentos','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create - condicao_pagamento';
        
        return view('condicao_pagamento.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $condicao_pagamento = new Condicao_pagamento();

        
        $condicao_pagamento->codigo = $request->codigo;

        
        $condicao_pagamento->prazos = $request->prazos;

        
        
        $condicao_pagamento->save();

        $pusher = App::make('pusher');

        //default pusher notification.
        //by default channel=test-channel,event=test-event
        //Here is a pusher notification example when you create a new resource in storage.
        //you can modify anything you want or use it wherever.
        $pusher->trigger('test-channel',
                         'test-event',
                        ['message' => 'A new condicao_pagamento has been created !!']);

        return redirect('condicao_pagamento');
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
        $title = 'Show - condicao_pagamento';

        if($request->ajax())
        {
            return URL::to('condicao_pagamento/'.$id);
        }

        $condicao_pagamento = Condicao_pagamento::findOrfail($id);
        return view('condicao_pagamento.show',compact('title','condicao_pagamento'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $title = 'Edit - condicao_pagamento';
        if($request->ajax())
        {
            return URL::to('condicao_pagamento/'. $id . '/edit');
        }

        
        $condicao_pagamento = Condicao_pagamento::findOrfail($id);
        return view('condicao_pagamento.edit',compact('title','condicao_pagamento'  ));
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
        $condicao_pagamento = Condicao_pagamento::findOrfail($id);
    	
        $condicao_pagamento->codigo = $request->codigo;
        
        $condicao_pagamento->prazos = $request->prazos;
        
        
        $condicao_pagamento->save();

        return redirect('condicao_pagamento');
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
        $msg = Ajaxis::MtDeleting('Warning!!','Would you like to remove This?','/condicao_pagamento/'. $id . '/delete');

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
     	$condicao_pagamento = Condicao_pagamento::findOrfail($id);
     	$condicao_pagamento->delete();
        return URL::to('condicao_pagamento');
    }
}
