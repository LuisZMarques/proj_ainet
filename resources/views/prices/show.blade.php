@extends('template.layout')

@section('titulo', 'Detalhes do Preço')

@section('main')
    <h2>Detalhes do Preço</h2>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Preço T-Shirt Catálogo: {{ $price->unit_price_catalog }}</h5>
            <h5 class="card-title">Preço T-Shirt Própria: {{ $price->unit_price_own }}</h5>
            <h5 class="card-title">Preço T-Shirt Catálogo com Desconto: {{ $price->unit_price_catalog_discount }}</h5>
            <h5 class="card-title">Preço T-Shirt Própria com Desconto: {{ $price->unit_price_own_discount }}</h5>
            <h5 class="card-title">Quantidade de Desconto: {{ $price->qty_discount }}</h5>
        </div>
    </div>
    <div class="mt-3">
        <a href="{{ route('prices.edit', $price->id) }}" class="btn btn-primary">Editar</a>
    </div>
@endsection
