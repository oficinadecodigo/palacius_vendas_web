@extends('scaffold-interface.layouts.defaultMaterialize')
@section('title','Edit')
@section('content')

<div class = 'container'>
    <h1>
        Edit condicao_pagamento
    </h1>
    <form method = 'get' action = '{!!url("condicao_pagamento")!!}'>
        <button class = 'btn blue'>condicao_pagamento Index</button>
    </form>
    <br>
    <form method = 'POST' action = '{!! url("condicao_pagamento")!!}/{!!$condicao_pagamento->
        id!!}/update'> 
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="input-field col s6">
            <input id="codigo" name = "codigo" type="text" class="validate" value="{!!$condicao_pagamento->
            codigo!!}"> 
            <label for="codigo">codigo</label>
        </div>
        <div class="input-field col s6">
            <input id="prazos" name = "prazos" type="text" class="validate" value="{!!$condicao_pagamento->
            prazos!!}"> 
            <label for="prazos">prazos</label>
        </div>
        <button class = 'btn red' type ='submit'>Update</button>
    </form>
</div>
@endsection