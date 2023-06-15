@extends('template.layout')

@section('titulo', 'Detalhes dos Preços da Loja')

@section('main')
    @include('prices.shared.fields', ['readonlyData' => true])
    <a href="{{ route('prices.edit', $price->id) }}" class="btn btn-primary">Editar</a>
@endsection
