@extends('layout')

@section('cabecalho')
Series
@endsection

@section('conteudo')
<a href="{{ route('series.create') }}" class="btn btn-dark mb-2">Adicionar</a>

<ul class="list-group">
    @foreach ($series as $serie)
    <li class="list-group-item d-flex justify-content-between align-items-center">
        {{$serie->nome}}
    </li>
    @endforeach
</ul>
@endsection
