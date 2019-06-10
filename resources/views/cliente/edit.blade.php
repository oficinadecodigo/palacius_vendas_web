@extends('scaffold-interface.layouts.defaultMaterialize')
@section('title','Edit')
@section('content')

<div class = 'container'>
    <h1>
        Edit cliente
    </h1>
    <form method = 'get' action = '{!!url("cliente")!!}'>
        <button class = 'btn blue'>cliente Index</button>
    </form>
    <br>
    <form method = 'POST' action = '{!! url("cliente")!!}/{!!$cliente->
        id!!}/update'> 
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="input-field col s6">
            <input id="codigo" name = "codigo" type="text" class="validate" value="{!!$cliente->
            codigo!!}"> 
            <label for="codigo">codigo</label>
        </div>
        <div class="input-field col s6">
            <input id="nome" name = "nome" type="text" class="validate" value="{!!$cliente->
            nome!!}"> 
            <label for="nome">nome</label>
        </div>
        <div class="input-field col s12">
            <select name = 'empresa_id'>
                @foreach($empresas as $key => $value) 
                <option value="{{$key}}">{{$value}}</option>
                @endforeach 
            </select>
            <label>empresas Select</label>
        </div>
        <button class = 'btn red' type ='submit'>Update</button>
    </form>
</div>
@endsection