@extends('layout')

@section('cabecalho')
Series</h1>
@endsection

@section('conteudo')
<a href="/criar" class="btn btn-dark mb-2">Adicionar</a>
<ul class="list-group">
    @foreach ($series as $serie)
        <li class="list-group-item"><?= $serie?></li>
    @endforeach
</ul>
@endsection