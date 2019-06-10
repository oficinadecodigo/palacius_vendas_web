@extends('scaffold-interface.layouts.defaultMaterialize')
@section('title','Edit')
@section('content')

<div class = 'container'>
    <h1>
        Edit pedido_item
    </h1>
    <form method = 'get' action = '{!!url("pedido_item")!!}'>
        <button class = 'btn blue'>pedido_item Index</button>
    </form>
    <br>
    <form method = 'POST' action = '{!! url("pedido_item")!!}/{!!$pedido_item->
        id!!}/update'> 
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="input-field col s6">
            <input id="codigo" name = "codigo" type="text" class="validate" value="{!!$pedido_item->
            codigo!!}"> 
            <label for="codigo">codigo</label>
        </div>
        <div class="input-field col s6">
            <input id="quantidade" name = "quantidade" type="text" class="validate" value="{!!$pedido_item->
            quantidade!!}"> 
            <label for="quantidade">quantidade</label>
        </div>
        <div class="input-field col s6">
            <input id="percentual_desconto" name = "percentual_desconto" type="text" class="validate" value="{!!$pedido_item->
            percentual_desconto!!}"> 
            <label for="percentual_desconto">percentual_desconto</label>
        </div>
        <div class="input-field col s12">
            <select name = 'pedido_id'>
                @foreach($pedidos as $key => $value) 
                <option value="{{$key}}">{{$value}}</option>
                @endforeach 
            </select>
            <label>pedidos Select</label>
        </div>
        <div class="input-field col s12">
            <select name = 'produto_id'>
                @foreach($produtos as $key => $value) 
                <option value="{{$key}}">{{$value}}</option>
                @endforeach 
            </select>
            <label>produtos Select</label>
        </div>
        <button class = 'btn red' type ='submit'>Update</button>
    </form>
</div>
@endsection