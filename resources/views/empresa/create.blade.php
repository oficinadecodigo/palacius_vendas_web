@extends('scaffold-interface.layouts.defaultMaterialize')
@section('title','Create')
@section('content')

<div class = 'container'>
    <h1>
        Create empresa
    </h1>
    <form method = 'get' action = '{!!url("empresa")!!}'>
        <button class = 'btn blue'>empresa Index</button>
    </form>
    <br>
    <form method = 'POST' action = '{!!url("empresa")!!}'>
        <input type = 'hidden' name = '_token' value = '{{ Session::token() }}'>
        <div class="input-field col s6">
            <input id="codigo" name = "codigo" type="text" class="validate">
            <label for="codigo">codigo</label>
        </div>
        <div class="input-field col s6">
            <input id="Nome" name = "Nome" type="text" class="validate">
            <label for="Nome">Nome</label>
        </div>
        <button class = 'btn red' type ='submit'>Create</button>
    </form>
</div>
@endsection