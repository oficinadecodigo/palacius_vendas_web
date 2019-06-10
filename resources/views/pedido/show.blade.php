@extends('scaffold-interface.layouts.defaultMaterialize')
@section('title','Show')
@section('content')

<div class = 'container'>
    <h1>
        Show pedido
    </h1>
    <form method = 'get' action = '{!!url("pedido")!!}'>
        <button class = 'btn blue'>pedido Index</button>
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
                <td>{!!$pedido->codigo!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>emissao : </i></b>
                </td>
                <td>{!!$pedido->emissao!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>processamento : </i></b>
                </td>
                <td>{!!$pedido->processamento!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>observacao : </i></b>
                </td>
                <td>{!!$pedido->observacao!!}</td>
            </tr>
            <tr>
                <td>
                    <b>
                        <i>codigo : </i>
                        <b>
                        </td>
                        <td>{!!$pedido->cliente->codigo!!}</td>
                    </tr>
                    <tr>
                        <td>
                            <b>
                                <i>nome : </i>
                                <b>
                                </td>
                                <td>{!!$pedido->cliente->nome!!}</td>
                            </tr>
                            <tr>
                                <td>
                                    <b>
                                        <i>created_at : </i>
                                        <b>
                                        </td>
                                        <td>{!!$pedido->cliente->created_at!!}</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <b>
                                                <i>updated_at : </i>
                                                <b>
                                                </td>
                                                <td>{!!$pedido->cliente->updated_at!!}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <b>
                                                        <i>deleted_at : </i>
                                                        <b>
                                                        </td>
                                                        <td>{!!$pedido->cliente->deleted_at!!}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <b>
                                                                <i>codigo : </i>
                                                                <b>
                                                                </td>
                                                                <td>{!!$pedido->filial->codigo!!}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <b>
                                                                        <i>razao_social : </i>
                                                                        <b>
                                                                        </td>
                                                                        <td>{!!$pedido->filial->razao_social!!}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <b>
                                                                                <i>nome_fantasia : </i>
                                                                                <b>
                                                                                </td>
                                                                                <td>{!!$pedido->filial->nome_fantasia!!}</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                    <b>
                                                                                        <i>created_at : </i>
                                                                                        <b>
                                                                                        </td>
                                                                                        <td>{!!$pedido->filial->created_at!!}</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <b>
                                                                                                <i>updated_at : </i>
                                                                                                <b>
                                                                                                </td>
                                                                                                <td>{!!$pedido->filial->updated_at!!}</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>
                                                                                                    <b>
                                                                                                        <i>deleted_at : </i>
                                                                                                        <b>
                                                                                                        </td>
                                                                                                        <td>{!!$pedido->filial->deleted_at!!}</td>
                                                                                                    </tr>
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </div>
                                                                                        @endsection