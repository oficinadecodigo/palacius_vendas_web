@extends('scaffold-interface.layouts.defaultMaterialize')
@section('title','Index')
@section('content')

<div class = 'container'>
    <h1>
        condicao_pagamento Index
    </h1>
    <div class="row">
        <form class = 'col s3' method = 'get' action = '{!!url("condicao_pagamento")!!}/create'>
            <button class = 'btn red' type = 'submit'>Create New condicao_pagamento</button>
        </form>
    </div>
    <table>
        <thead>
            <th>codigo</th>
            <th>prazos</th>
            <th>actions</th>
        </thead>
        <tbody>
            @foreach($condicao_pagamentos as $condicao_pagamento) 
            <tr>
                <td>{!!$condicao_pagamento->codigo!!}</td>
                <td>{!!$condicao_pagamento->prazos!!}</td>
                <td>
                    <div class = 'row'>
                        <a href = '#modal1' class = 'delete btn-floating modal-trigger red' data-link = "/condicao_pagamento/{!!$condicao_pagamento->id!!}/deleteMsg" ><i class = 'material-icons'>delete</i></a>
                        <a href = '#' class = 'viewEdit btn-floating blue' data-link = '/condicao_pagamento/{!!$condicao_pagamento->id!!}/edit'><i class = 'material-icons'>edit</i></a>
                        <a href = '#' class = 'viewShow btn-floating orange' data-link = '/condicao_pagamento/{!!$condicao_pagamento->id!!}'><i class = 'material-icons'>info</i></a>
                    </div>
                </td>
            </tr>
            @endforeach 
        </tbody>
    </table>
    {!! $condicao_pagamentos->render() !!}

</div>
@endsection