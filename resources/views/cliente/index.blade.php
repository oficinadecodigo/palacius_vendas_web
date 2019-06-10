@extends('scaffold-interface.layouts.defaultMaterialize')
@section('title','Index')
@section('content')

<div class = 'container'>
    <h1>
        cliente Index
    </h1>
    <div class="row">
        <form class = 'col s3' method = 'get' action = '{!!url("cliente")!!}/create'>
            <button class = 'btn red' type = 'submit'>Create New cliente</button>
        </form>
        <ul id="dropdown" class="dropdown-content">
            <li><a href="http://localhost/palacius_vendas_web/public/empresa">Empresa</a></li>
        </ul>
        <a class="col s3 btn dropdown-button #1e88e5 blue darken-1" href="#!" data-activates="dropdown">Associate<i class="mdi-navigation-arrow-drop-down right"></i></a>
    </div>
    <table>
        <thead>
            <th>codigo</th>
            <th>nome</th>
            <th>codigo</th>
            <th>Nome</th>
            <th>created_at</th>
            <th>updated_at</th>
            <th>deleted_at</th>
            <th>actions</th>
        </thead>
        <tbody>
            @foreach($clientes as $cliente) 
            <tr>
                <td>{!!$cliente->codigo!!}</td>
                <td>{!!$cliente->nome!!}</td>
                <td>{!!$cliente->empresa->codigo!!}</td>
                <td>{!!$cliente->empresa->Nome!!}</td>
                <td>{!!$cliente->empresa->created_at!!}</td>
                <td>{!!$cliente->empresa->updated_at!!}</td>
                <td>{!!$cliente->empresa->deleted_at!!}</td>
                <td>
                    <div class = 'row'>
                        <a href = '#modal1' class = 'delete btn-floating modal-trigger red' data-link = "/cliente/{!!$cliente->id!!}/deleteMsg" ><i class = 'material-icons'>delete</i></a>
                        <a href = '#' class = 'viewEdit btn-floating blue' data-link = '/cliente/{!!$cliente->id!!}/edit'><i class = 'material-icons'>edit</i></a>
                        <a href = '#' class = 'viewShow btn-floating orange' data-link = '/cliente/{!!$cliente->id!!}'><i class = 'material-icons'>info</i></a>
                    </div>
                </td>
            </tr>
            @endforeach 
        </tbody>
    </table>
    {!! $clientes->render() !!}

</div>
@endsection