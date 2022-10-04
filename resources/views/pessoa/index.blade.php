@extends('layouts.base')

@section('conteudo')

    <h1>Cadastrar Pessoas - 
        <a class="btn btn-dark" href="{{ route('pessoa.create',)}}">Novo <i class="bi bi-plus"></i></a>  
    </h1>
     
    <table class="table table-striped table-border">
        <thead>
            <tr>
                <th>Ações</th>
                <th>ID</th>
                <th>Nome</th>
                <th>Sobrenome</th>
                <th>E-mail</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pessoas->get() as $pessoa) 
            <tr>
                <td> 
                    <a class="btn btn-primary" href="{{ route('pessoa.show',['id'=>$pessoa->id_pessoas]) }}"><i class="bi bi-eye-fill"></i></a>
                    <a class="btn btn-warning" href="{{ route('pessoa.edit',['id'=>$pessoa->id_pessoas]) }}">
                        <i class="bi bi-pencil-square"></i> 
                    </a> 
                    <a class="btn btn-danger" href="{{ route('pessoa.destroy',['id'=>$pessoa->id_pessoas]) }}">
                        <i class="bi bi-trash3-fill"></i>
                    </a>
                    
                </td>
                <td>{{$pessoa->id_pessoas}}</td>
                <td>{{$pessoa->nome}}</td>
                <td>{{$pessoa->sobrenome}}</td>
                <td>{{$pessoa->email}}</td>
                
            </tr>
             @endforeach 
        </tbody>
    </table>


@endsection