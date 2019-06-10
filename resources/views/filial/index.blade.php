@extends('scaffold-interface.layouts.defaultMaterialize')
@section('title','Index')
@section('content')

<div class = 'container'>
    <h1>
        filial Index
    </h1>
    <div class="row">
        <form class = 'col s3' method = 'get' action = '{!!url("filial")!!}/create'>
            <button class = 'btn red' type = 'submit'>Create New filial</button>
        </form>
        <ul id="dropdown" class="dropdown-content">
            <li><a href="http://localhost/palacius_vendas_web/public/empresa">Empresa</a></li>
        </ul>
        <a class="col s3 btn dropdown-button #1e88e5 blue darken-1" href="#!" data-activates="dropdown">Associate<i class="mdi-navigation-arrow-drop-down right"></i></a>
    </div>
    <table>
        <thead>
            <th>codigo</th>
            <th>razao_social</th>
            <th>nome_fantasia</th>
            <th>codigo</th>
            <th>Nome</th>
            <th>created_at</th>
            <th>updated_at</th>
            <th>deleted_at</th>
            <th>actions</th>
        </thead>
        <tbody>
            @foreach($filials as $filial) 
            <tr>
                <td>{!!$filial->codigo!!}</td>
                <td>{!!$filial->razao_social!!}</td>
                <td>{!!$filial->nome_fantasia!!}</td>
                <td>{!!$filial->empresa->codigo!!}</td>
                <td>{!!$filial->empresa->Nome!!}</td>
                <td>{!!$filial->empresa->created_at!!}</td>
                <td>{!!$filial->empresa->updated_at!!}</td>
                <td>{!!$filial->empresa->deleted_at!!}</td>
                <td>
                    <div class = 'row'>
                        <a href = '#modal1' class = 'delete btn-floating modal-trigger red' data-link = "/filial/{!!$filial->id!!}/deleteMsg" ><i class = 'material-icons'>delete</i></a>
                        <a href = '#' class = 'viewEdit btn-floating blue' data-link = '/filial/{!!$filial->id!!}/edit'><i class = 'material-icons'>edit</i></a>
                        <a href = '#' class = 'viewShow btn-floating orange' data-link = '/filial/{!!$filial->id!!}'><i class = 'material-icons'>info</i></a>
                    </div>
                </td>
            </tr>
            @endforeach 
        </tbody>
    </table>
    {!! $filials->render() !!}

</div>
@endsection