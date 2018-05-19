@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <ol class="breadcrumb panel-heading">                    
                    <li class="active">Contatos</li>
                </ol>

                <div class="panel-body">
                    <p>
                        <a class="btn btn-info" href="{{ route('cliente.adicionar') }}">Adicionar</a>
                    </p>

                    <table class="table table-sm table-hover" id="id_Table">
                        <thead>
                            <tr>
                                <th class="col_center">#</th>
                                <th>Nome</th>
                                <th>E-mail</th>
                                <th>Endereço</th>
                                <th>Ação</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($clientes as $cliente)

                            <tr>
                                <th class="col_center" scope="row">{{ $cliente->id }}</th>
                                <td>{{ $cliente->nome }}</td>
                                <td>{{ $cliente->email }}</td> 
                                <td>{{ $cliente->endereco }}</td>
                                <td class="col_center" scope="row">
                                    <a class="glyphicon glyphicon-th-list btn-detail" href="{{route('cliente.detalhe',$cliente->id)}}" alt="Exibir todos os dados do Contato"></a>
                                    <a class="glyphicon glyphicon-pencil btn-edit" href="{{route('cliente.editar',$cliente->id)}}"></a>
                                    <!--
                                    <a class="glyphicon glyphicon-trash btn-delete" href="javascript:(confirm('Deletar esse registro?') ? window.location.href='{{route('cliente.deletar',$cliente->id)}}' : false)"></a>
                                -->
                                    <a class="glyphicon glyphicon-trash btn-delete" onclick="confirmExcluir({!! $cliente->id !!})" href='javascript:;'></a>

                                    

                                </td>
                            </tr>                            

                            @endforeach
                            
                        </tbody>
                        
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection