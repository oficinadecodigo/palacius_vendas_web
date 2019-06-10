@extends('scaffold-interface.layouts.defaultMaterialize')
@section('title','Index')
@section('content')

<div class = 'container'>
    <h1>
        pedido Index
    </h1>
    <div class="row">
        <form class = 'col s3' method = 'get' action = '{!!url("pedido")!!}/create'>
            <button class = 'btn red' type = 'submit'>Create New pedido</button>
        </form>
        <ul id="dropdown" class="dropdown-content">
            <li><a href="http://localhost/palacius_vendas_web/public/cliente">Cliente</a></li>
            <li><a href="http://localhost/palacius_vendas_web/public/filial">Filial</a></li>
        </ul>
        <a class="col s3 btn dropdown-button #1e88e5 blue darken-1" href="#!" data-activates="dropdown">Associate<i class="mdi-navigation-arrow-drop-down right"></i></a>
    </div>
    <table>
        <thead>
            <th>codigo</th>
            <th>emissao</th>
            <th>processamento</th>
            <th>observacao</th>
            <th>codigo</th>
            <th>nome</th>
            <th>created_at</th>
            <th>updated_at</th>
            <th>deleted_at</th>
            <th>codigo</th>
            <th>razao_social</th>
            <th>nome_fantasia</th>
            <th>created_at</th>
            <th>updated_at</th>
            <th>deleted_at</th>
            <th>actions</th>
        </thead>
        <tbody>
            @foreach($pedidos as $pedido) 
            <tr>
                <td>{!!$pedido->codigo!!}</td>
                <td>{!!$pedido->emissao!!}</td>
                <td>{!!$pedido->processamento!!}</td>
                <td>{!!$pedido->observacao!!}</td>
                <td>{!!$pedido->cliente->codigo!!}</td>
                <td>{!!$pedido->cliente->nome!!}</td>
                <td>{!!$pedido->cliente->created_at!!}</td>
                <td>{!!$pedido->cliente->updated_at!!}</td>
                <td>{!!$pedido->cliente->deleted_at!!}</td>
                <td>{!!$pedido->filial->codigo!!}</td>
                <td>{!!$pedido->filial->razao_social!!}</td>
                <td>{!!$pedido->filial->nome_fantasia!!}</td>
                <td>{!!$pedido->filial->created_at!!}</td>
                <td>{!!$pedido->filial->updated_at!!}</td>
                <td>{!!$pedido->filial->deleted_at!!}</td>
                <td>
                    <div class = 'row'>
                        <a href = '#modal1' class = 'delete btn-floating modal-trigger red' data-link = "/pedido/{!!$pedido->id!!}/deleteMsg" ><i class = 'material-icons'>delete</i></a>
                        <a href = '#' class = 'viewEdit btn-floating blue' data-link = '/pedido/{!!$pedido->id!!}/edit'><i class = 'material-icons'>edit</i></a>
                        <a href = '#' class = 'viewShow btn-floating orange' data-link = '/pedido/{!!$pedido->id!!}'><i class = 'material-icons'>info</i></a>
                    </div>
                </td>
            </tr>
            @endforeach 
        </tbody>
    </table>
    {!! $pedidos->render() !!}

</div>
@endsection