@extends('scaffold-interface.layouts.defaultMaterialize')
@section('title','Show')
@section('content')

<div class = 'container'>
    <h1>
        Show condicao_pagamento
    </h1>
    <form method = 'get' action = '{!!url("condicao_pagamento")!!}'>
        <button class = 'btn blue'>condicao_pagamento Index</button>
    </form>
    <table class = 'highlight bordered'>
        <thead>
            <th>Key</th>
            <th>Value</th>
        </thead>
        <tbody>
            <tr>
                <td>
                    <b><i>codigo : </i></b>
                </td>
                <td>{!!$condicao_pagamento->codigo!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>prazos : </i></b>
                </td>
                <td>{!!$condicao_pagamento->prazos!!}</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection