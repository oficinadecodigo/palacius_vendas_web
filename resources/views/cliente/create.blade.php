@extends('scaffold-interface.layouts.defaultMaterialize')
@section('title','Create')
@section('content')

<div class = 'container'>
    <h1>
        Create cliente
    </h1>
    <form method = 'get' action = '{!!url("cliente")!!}'>
        <button class = 'btn blue'>cliente Index</button>
    </form>
    <br>
    <form method = 'POST' action = '{!!url("cliente")!!}'>
        <input type = 'hidden' name = '_token' value = '{{ Session::token() }}'>
        <div class="input-field col s6">
            <input id="codigo" name = "codigo" type="text" class="validate">
            <label for="codigo">codigo</label>
        </div>
        <div class="input-field col s6">
            <input id="nome" name = "nome" type="text" class="validate">
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
        <button class = 'btn red' type ='submit'>Create</button>
    </form>
</div>
@endsection