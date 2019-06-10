@extends('scaffold-interface.layouts.defaultMaterialize')
@section('title','Index')
@section('content')

<div class = 'container'>
    <h1>
        empresa Index
    </h1>
    <div class="row">
        <form class = 'col s3' method = 'get' action = '{!!url("empresa")!!}/create'>
            <button class = 'btn red' type = 'submit'>Create New empresa</button>
        </form>
    </div>
    <table>
        <thead>
            <th>codigo</th>
            <th>Nome</th>
            <th>actions</th>
        </thead>
        <tbody>
            @foreach($empresas as $empresa) 
            <tr>
                <td>{!!$empresa->codigo!!}</td>
                <td>{!!$empresa->Nome!!}</td>
                <td>
                    <div class = 'row'>
                        <a href = '#modal1' class = 'delete btn-floating modal-trigger red' data-link = "/empresa/{!!$empresa->id!!}/deleteMsg" ><i class = 'material-icons'>delete</i></a>
                        <a href = '#' class = 'viewEdit btn-floating blue' data-link = '/empresa/{!!$empresa->id!!}/edit'><i class = 'material-icons'>edit</i></a>
                        <a href = '#' class = 'viewShow btn-floating orange' data-link = '/empresa/{!!$empresa->id!!}'><i class = 'material-icons'>info</i></a>
                    </div>
                </td>
            </tr>
            @endforeach 
        </tbody>
    </table>
    {!! $empresas->render() !!}

</div>
@endsection