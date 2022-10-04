@extends('layouts.base')

@section('conteudo')
    
    <h1>
        @if($pessoa)
        Atualizar Dados da Pessoa
        @else 
        Cadastro de Pesssoa
        @endif
    </h1>

    @if ($pessoa)
    <form action="{{ route('pessoa.update', ['id'=>$pessoa->id_pessoas]) }}" method="post">
    @else 
    <form action="{{ route('pessoa.store') }}" method="post">
    @endif
        @csrf
        <div class="row">

            <div class="form-group col-md-6">
              <label for="nome" class="form-label">Nome*</label>
              <input type="text" name="nome" id="nome" class="form-control" value="{{ $pessoa? $pessoa->nome :old('pessoa') }}">
            </div>

            <div class="form-group col-md-6">
                <label for="sobrenome" class="form-label">Sobrenome*</label>
                <input type="text" name="sobrenome" id="sobrenome"  class="form-control" value="{{ $pessoa? $pessoa->sobrenome :old('pessoa') }}">
            </div>

            <div class="form-group col-md-6">
                <label for="email" class="form-label">E-mail*</label>
                <input type="email" name="email" id="email"  class="form-control" value="{{ $pessoa? $pessoa->email :old('pessoa') }}">
            </div>

            <div class="form-group col-md-2">
                <label for="dt_nascimento" class="form-label">Data de Nascimento*</label>
                <input type="date" name="dt_nascimento" id="dt_nascimento" class="form-control" value="{{$pessoa ? $pessoa->dt_nascimento->format('Y-m-d') : old('pessoa')}}"> 
           </div>

            <div class="form-group col-md-2">
                <label for="btn-enviar" class="form-label">&nbsp;</label>
                <input  class='btn btn-success form-control'  type="submit" value="Cadastrar">
            </div>     
        </div>
    </form>

@endsection