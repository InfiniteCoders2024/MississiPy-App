@extends('layouts.app')

@section('title', 'Pesquisa de Produtos')

@section('content')
    <h1>Resultados da Pesquisa</h1>

    @if($produtos->isEmpty())
        <p>Nenhum produto encontrado.</p>
    @else
        <ul>
            @foreach($produtos as $produto)
                <li>{{ $produto->nome }} - {{ $produto->preco }}</li>
            @endforeach
        </ul>
    @endif
@endsection
