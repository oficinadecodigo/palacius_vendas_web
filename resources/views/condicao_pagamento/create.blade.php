@extends('scaffold-interface.layouts.defaultMaterialize')
@section('title','Create')
@section('content')

<div class = 'container'>
    <h1>
        Create condicao_pagamento
    </h1>
    <form method = 'get' action = '{!!url("condicao_pagamento")!!}'>
        <button class = 'btn blue'>condicao_pagamento Index</button>
    </form>
    <br>
    <form method = 'POST' action = '{!!url("condicao_pagamento")!!}'>
        <input type = 'hidden' name = '_token' value = '{{ Session::token() }}'>
        <div class="input-field col s6">
            <input id="codigo" name = "codigo" type="text" class="validate">
            <label for="codigo">codigo</label>
        </div>
        <div class="input-field col s6">
            <input id="prazos" name = "prazos" type="text" class="validate">
            <label for="prazos">prazos</label>
        </div>
        <button class = 'btn red' type ='submit'>Create</button>
    </form>
</div>
@endsection