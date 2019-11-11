@extends('layout')

@section('cabecalho')
Adicionar Series
@endsection

@section('conteudo')   
<form action="#" method="post">
    <div class="form-group">
        <label for="nome" >Nome</label>
        <input type="text" class="form-control" name="nome" id="nome">
    </div>
        <button class="btn btn-primary mb-2">Adicionar</button>
</form>
@endsection
