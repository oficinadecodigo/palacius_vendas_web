@extends('scaffold-interface.layouts.defaultMaterialize')
@section('title','Show')
@section('content')

<div class = 'container'>
    <h1>
        Show cliente
    </h1>
    <form method = 'get' action = '{!!url("cliente")!!}'>
        <button class = 'btn blue'>cliente Index</button>
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
                <td>{!!$cliente->codigo!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>nome : </i></b>
                </td>
                <td>{!!$cliente->nome!!}</td>
            </tr>
            <tr>
                <td>
                    <b>
                        <i>codigo : </i>
                        <b>
                        </td>
                        <td>{!!$cliente->empresa->codigo!!}</td>
                    </tr>
                    <tr>
                        <td>
                            <b>
                                <i>Nome : </i>
                                <b>
                                </td>
                                <td>{!!$cliente->empresa->Nome!!}</td>
                            </tr>
                            <tr>
                                <td>
                                    <b>
                                        <i>created_at : </i>
                                        <b>
                                        </td>
                                        <td>{!!$cliente->empresa->created_at!!}</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <b>
                                                <i>updated_at : </i>
                                                <b>
                                                </td>
                                                <td>{!!$cliente->empresa->updated_at!!}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <b>
                                                        <i>deleted_at : </i>
                                                        <b>
                                                        </td>
                                                        <td>{!!$cliente->empresa->deleted_at!!}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        @endsection