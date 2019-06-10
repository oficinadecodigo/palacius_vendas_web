@extends('scaffold-interface.layouts.defaultMaterialize')
@section('title','Create')
@section('content')

<div class = 'container'>
    <h1>
        Create produto
    </h1>
    <form method = 'get' action = '{!!url("produto")!!}'>
        <button class = 'btn blue'>produto Index</button>
    </form>
    <br>
    <form method = 'POST' action = '{!!url("produto")!!}'>
        <input type = 'hidden' name = '_token' value = '{{ Session::token() }}'>
        <div class="input-field col s6">
            <input id="codigo" name = "codigo" type="text" class="validate">
            <label for="codigo">codigo</label>
        </div>
        <div class="input-field col s6">
            <input id="descricao" name = "descricao" type="text" class="validate">
            <label for="descricao">descricao</label>
        </div>
        <div class="input-field col s6">
            <input id="unidade_medida" name = "unidade_medida" type="text" class="validate">
            <label for="unidade_medida">unidade_medida</label>
        </div>
        <button class = 'btn red' type ='submit'>Create</button>
    </form>
</div>
@endsection