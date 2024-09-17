@extends('app')
@section('title', 'Novo cliente')
    

@section('content')
    <h1>Novo Cliente</h1>
    <form action="{{ route('clients.update', $client) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" value="{{$client->nome }}" class="form-control" name="nome" id="nome" placeholder="Digite o nome"required>
        </div>

        <div class="mb-3">
            <label for="endereco" class="form-label">Endereco</label>
            <input type="text" value="{{$client->endereco}}" class="form-control" name="endereco" id="endereco" placeholder="Digite o endereco" required>
        </div>

        <div class="mb-3">
            <label for="observacao" class="form-label">observacao</label>
            <input type="text" value="{{$client->observacao}}" class="form-control" name="observacao" id="observacao" placeholder="Digite a observacao">
        </div>

        <button class="btn btn-success">Enviar</button>
    </form>
@endsection