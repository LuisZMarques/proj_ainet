@extends('template.layout')

@section('titulo', 'Detalhes do Preço')

@section('main')
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-center">Preço T-Shirt Catálogo: {{ $price->unit_price_catalog }}</h5>
                    <h5 class="card-title text-center">Preço T-Shirt Própria: {{ $price->unit_price_own }}</h5>
                    <h5 class="card-title text-center">Preço T-Shirt Catálogo com Desconto: {{ $price->unit_price_catalog_discount }}</h5>
                    <h5 class="card-title text-center">Preço T-Shirt Própria com Desconto: {{ $price->unit_price_own_discount }}</h5>
                    <h5 class="card-title text-center">Quantidade de Desconto: {{ $price->qty_discount }}</h5>
                </div>
            </div>
            <div class="mt-3 text-center">
                <a href="{{ route('prices.edit', $price->id) }}" class="btn btn-primary">Editar</a>
            </div>
        </div>
    </div>
@endsection
