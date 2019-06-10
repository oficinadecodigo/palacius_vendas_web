@extends('scaffold-interface.layouts.defaultMaterialize')
@section('title','Show')
@section('content')

<div class = 'container'>
    <h1>
        Show produto
    </h1>
    <form method = 'get' action = '{!!url("produto")!!}'>
        <button class = 'btn blue'>produto Index</button>
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
                <td>{!!$produto->codigo!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>descricao : </i></b>
                </td>
                <td>{!!$produto->descricao!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>unidade_medida : </i></b>
                </td>
                <td>{!!$produto->unidade_medida!!}</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection