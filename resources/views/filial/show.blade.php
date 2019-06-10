@extends('scaffold-interface.layouts.defaultMaterialize')
@section('title','Show')
@section('content')

<div class = 'container'>
    <h1>
        Show filial
    </h1>
    <form method = 'get' action = '{!!url("filial")!!}'>
        <button class = 'btn blue'>filial Index</button>
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
                <td>{!!$filial->codigo!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>razao_social : </i></b>
                </td>
                <td>{!!$filial->razao_social!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>nome_fantasia : </i></b>
                </td>
                <td>{!!$filial->nome_fantasia!!}</td>
            </tr>
            <tr>
                <td>
                    <b>
                        <i>codigo : </i>
                        <b>
                        </td>
                        <td>{!!$filial->empresa->codigo!!}</td>
                    </tr>
                    <tr>
                        <td>
                            <b>
                                <i>Nome : </i>
                                <b>
                                </td>
                                <td>{!!$filial->empresa->Nome!!}</td>
                            </tr>
                            <tr>
                                <td>
                                    <b>
                                        <i>created_at : </i>
                                        <b>
                                        </td>
                                        <td>{!!$filial->empresa->created_at!!}</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <b>
                                                <i>updated_at : </i>
                                                <b>
                                                </td>
                                                <td>{!!$filial->empresa->updated_at!!}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <b>
                                                        <i>deleted_at : </i>
                                                        <b>
                                                        </td>
                                                        <td>{!!$filial->empresa->deleted_at!!}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        @endsection