@extends('scaffold-interface.layouts.defaultMaterialize')
@section('title','Edit')
@section('content')

<div class = 'container'>
    <h1>
        Edit pedido
    </h1>
    <form method = 'get' action = '{!!url("pedido")!!}'>
        <button class = 'btn blue'>pedido Index</button>
    </form>
    <br>
    <form method = 'POST' action = '{!! url("pedido")!!}/{!!$pedido->
        id!!}/update'> 
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="input-field col s6">
            <input id="codigo" name = "codigo" type="text" class="validate" value="{!!$pedido->
            codigo!!}"> 
            <label for="codigo">codigo</label>
        </div>
        <div class="input-field col s6">
            <input id="emissao" name = "emissao" type="text" class="validate" value="{!!$pedido->
            emissao!!}"> 
            <label for="emissao">emissao</label>
        </div>
        <div class="input-field col s6">
            <input id="processamento" name = "processamento" type="text" class="validate" value="{!!$pedido->
            processamento!!}"> 
            <label for="processamento">processamento</label>
        </div>
        <div class="input-field col s6">
            <input id="observacao" name = "observacao" type="text" class="validate" value="{!!$pedido->
            observacao!!}"> 
            <label for="observacao">observacao</label>
        </div>
        <div class="input-field col s12">
            <select name = 'cliente_id'>
                @foreach($clientes as $key => $value) 
                <option value="{{$key}}">{{$value}}</option>
                @endforeach 
            </select>
            <label>clientes Select</label>
        </div>
        <div class="input-field col s12">
            <select name = 'filial_id'>
                @foreach($filials as $key => $value) 
                <option value="{{$key}}">{{$value}}</option>
                @endforeach 
            </select>
            <label>filials Select</label>
        </div>
        <button class = 'btn red' type ='submit'>Update</button>
    </form>
</div>
@endsection