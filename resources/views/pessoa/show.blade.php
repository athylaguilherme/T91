@extends('layouts.base')

@section('conteudo')

    <h1>Nome: {{$pessoa->nome}} {{$pessoa->sobrenome}}</h1>

    <h4>Data de Nascimento: {{$pessoa->dt_nascimento->format('d/m/Y')}}</h4>
    <h4>E-mail: {{$pessoa->email}}</h4>
    
@endsection