@extends('scaffold-interface.layouts.defaultMaterialize')
@section('title','Create')
@section('content')

<div class = 'container'>
    <h1>
        Create filial
    </h1>
    <form method = 'get' action = '{!!url("filial")!!}'>
        <button class = 'btn blue'>filial Index</button>
    </form>
    <br>
    <form method = 'POST' action = '{!!url("filial")!!}'>
        <input type = 'hidden' name = '_token' value = '{{ Session::token() }}'>
        <div class="input-field col s6">
            <input id="codigo" name = "codigo" type="text" class="validate">
            <label for="codigo">codigo</label>
        </div>
        <div class="input-field col s6">
            <input id="razao_social" name = "razao_social" type="text" class="validate">
            <label for="razao_social">razao_social</label>
        </div>
        <div class="input-field col s6">
            <input id="nome_fantasia" name = "nome_fantasia" type="text" class="validate">
            <label for="nome_fantasia">nome_fantasia</label>
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