@extends('scaffold-interface.layouts.defaultMaterialize')
@section('title','Index')
@section('content')

<div class = 'container'>
    <h1>
        pedido_item Index
    </h1>
    <div class="row">
        <form class = 'col s3' method = 'get' action = '{!!url("pedido_item")!!}/create'>
            <button class = 'btn red' type = 'submit'>Create New pedido_item</button>
        </form>
        <ul id="dropdown" class="dropdown-content">
            <li><a href="http://localhost/palacius_vendas_web/public/pedido">Pedido</a></li>
            <li><a href="http://localhost/palacius_vendas_web/public/produto">Produto</a></li>
        </ul>
        <a class="col s3 btn dropdown-button #1e88e5 blue darken-1" href="#!" data-activates="dropdown">Associate<i class="mdi-navigation-arrow-drop-down right"></i></a>
    </div>
    <table>
        <thead>
            <th>codigo</th>
            <th>quantidade</th>
            <th>percentual_desconto</th>
            <th>codigo</th>
            <th>emissao</th>
            <th>processamento</th>
            <th>observacao</th>
            <th>created_at</th>
            <th>updated_at</th>
            <th>deleted_at</th>
            <th>codigo</th>
            <th>descricao</th>
            <th>created_at</th>
            <th>updated_at</th>
            <th>deleted_at</th>
            <th>actions</th>
        </thead>
        <tbody>
            @foreach($pedido_items as $pedido_item) 
            <tr>
                <td>{!!$pedido_item->codigo!!}</td>
                <td>{!!$pedido_item->quantidade!!}</td>
                <td>{!!$pedido_item->percentual_desconto!!}</td>
                <td>{!!$pedido_item->pedido->codigo!!}</td>
                <td>{!!$pedido_item->pedido->emissao!!}</td>
                <td>{!!$pedido_item->pedido->processamento!!}</td>
                <td>{!!$pedido_item->pedido->observacao!!}</td>
                <td>{!!$pedido_item->pedido->created_at!!}</td>
                <td>{!!$pedido_item->pedido->updated_at!!}</td>
                <td>{!!$pedido_item->pedido->deleted_at!!}</td>
                <td>{!!$pedido_item->produto->codigo!!}</td>
                <td>{!!$pedido_item->produto->descricao!!}</td>
                <td>{!!$pedido_item->produto->created_at!!}</td>
                <td>{!!$pedido_item->produto->updated_at!!}</td>
                <td>{!!$pedido_item->produto->deleted_at!!}</td>
                <td>
                    <div class = 'row'>
                        <a href = '#modal1' class = 'delete btn-floating modal-trigger red' data-link = "/pedido_item/{!!$pedido_item->id!!}/deleteMsg" ><i class = 'material-icons'>delete</i></a>
                        <a href = '#' class = 'viewEdit btn-floating blue' data-link = '/pedido_item/{!!$pedido_item->id!!}/edit'><i class = 'material-icons'>edit</i></a>
                        <a href = '#' class = 'viewShow btn-floating orange' data-link = '/pedido_item/{!!$pedido_item->id!!}'><i class = 'material-icons'>info</i></a>
                    </div>
                </td>
            </tr>
            @endforeach 
        </tbody>
    </table>
    {!! $pedido_items->render() !!}

</div>
@endsection