@extends('scaffold-interface.layouts.defaultMaterialize')
@section('title','Show')
@section('content')

<div class = 'container'>
    <h1>
        Show empresa
    </h1>
    <form method = 'get' action = '{!!url("empresa")!!}'>
        <button class = 'btn blue'>empresa Index</button>
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
                <td>{!!$empresa->codigo!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>Nome : </i></b>
                </td>
                <td>{!!$empresa->Nome!!}</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection