@extends('scaffold-interface.layouts.defaultMaterialize')
@section('title','Index')
@section('content')

<div class = 'container'>
    <h1>
        produto Index
    </h1>
    <div class="row">
        <form class = 'col s3' method = 'get' action = '{!!url("produto")!!}/create'>
            <button class = 'btn red' type = 'submit'>Create New produto</button>
        </form>
    </div>
    <table>
        <thead>
            <th>codigo</th>
            <th>descricao</th>
            <th>unidade_medida</th>
            <th>actions</th>
        </thead>
        <tbody>
            @foreach($produtos as $produto) 
            <tr>
                <td>{!!$produto->codigo!!}</td>
                <td>{!!$produto->descricao!!}</td>
                <td>{!!$produto->unidade_medida!!}</td>
                <td>
                    <div class = 'row'>
                        <a href = '#modal1' class = 'delete btn-floating modal-trigger red' data-link = "/produto/{!!$produto->id!!}/deleteMsg" ><i class = 'material-icons'>delete</i></a>
                        <a href = '#' class = 'viewEdit btn-floating blue' data-link = '/produto/{!!$produto->id!!}/edit'><i class = 'material-icons'>edit</i></a>
                        <a href = '#' class = 'viewShow btn-floating orange' data-link = '/produto/{!!$produto->id!!}'><i class = 'material-icons'>info</i></a>
                    </div>
                </td>
            </tr>
            @endforeach 
        </tbody>
    </table>
    {!! $produtos->render() !!}

</div>
@endsection