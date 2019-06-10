@extends('scaffold-interface.layouts.defaultMaterialize')
@section('title','Show')
@section('content')

<div class = 'container'>
    <h1>
        Show pedido_item
    </h1>
    <form method = 'get' action = '{!!url("pedido_item")!!}'>
        <button class = 'btn blue'>pedido_item Index</button>
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
                <td>{!!$pedido_item->codigo!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>quantidade : </i></b>
                </td>
                <td>{!!$pedido_item->quantidade!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>percentual_desconto : </i></b>
                </td>
                <td>{!!$pedido_item->percentual_desconto!!}</td>
            </tr>
            <tr>
                <td>
                    <b>
                        <i>codigo : </i>
                        <b>
                        </td>
                        <td>{!!$pedido_item->pedido->codigo!!}</td>
                    </tr>
                    <tr>
                        <td>
                            <b>
                                <i>emissao : </i>
                                <b>
                                </td>
                                <td>{!!$pedido_item->pedido->emissao!!}</td>
                            </tr>
                            <tr>
                                <td>
                                    <b>
                                        <i>processamento : </i>
                                        <b>
                                        </td>
                                        <td>{!!$pedido_item->pedido->processamento!!}</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <b>
                                                <i>observacao : </i>
                                                <b>
                                                </td>
                                                <td>{!!$pedido_item->pedido->observacao!!}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <b>
                                                        <i>created_at : </i>
                                                        <b>
                                                        </td>
                                                        <td>{!!$pedido_item->pedido->created_at!!}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <b>
                                                                <i>updated_at : </i>
                                                                <b>
                                                                </td>
                                                                <td>{!!$pedido_item->pedido->updated_at!!}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <b>
                                                                        <i>deleted_at : </i>
                                                                        <b>
                                                                        </td>
                                                                        <td>{!!$pedido_item->pedido->deleted_at!!}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <b>
                                                                                <i>codigo : </i>
                                                                                <b>
                                                                                </td>
                                                                                <td>{!!$pedido_item->produto->codigo!!}</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                    <b>
                                                                                        <i>descricao : </i>
                                                                                        <b>
                                                                                        </td>
                                                                                        <td>{!!$pedido_item->produto->descricao!!}</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <b>
                                                                                                <i>created_at : </i>
                                                                                                <b>
                                                                                                </td>
                                                                                                <td>{!!$pedido_item->produto->created_at!!}</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>
                                                                                                    <b>
                                                                                                        <i>updated_at : </i>
                                                                                                        <b>
                                                                                                        </td>
                                                                                                        <td>{!!$pedido_item->produto->updated_at!!}</td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td>
                                                                                                            <b>
                                                                                                                <i>deleted_at : </i>
                                                                                                                <b>
                                                                                                                </td>
                                                                                                                <td>{!!$pedido_item->produto->deleted_at!!}</td>
                                                                                                            </tr>
                                                                                                        </tbody>
                                                                                                    </table>
                                                                                                </div>
                                                                                                @endsection