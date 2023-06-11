@extends('template.layout')

@section('titulo', 'Editar Preço')

@section('main')
    <h2>Editar Preço</h2>
    <form method="POST" action="{{ route('prices.update', $price->id) }}">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="unit_price_catalog" class="form-label">Preço T-Shirt Catálogo</label>
            <input type="text" class="form-control" id="unit_price_catalog" name="unit_price_catalog" value="{{ $price->unit_price_catalog }}">
        </div>

        <div class="mb-3">
            <label for="unit_price_own" class="form-label">Preço T-Shirt Própria</label>
            <input type="text" class="form-control" id="unit_price_own" name="unit_price_own" value="{{ $price->unit_price_own }}">
        </div>

        <div class="mb-3">
            <label for="unit_price_catalog_discount" class="form-label">Preço T-Shirt Catálogo com Desconto</label>
            <input type="text" class="form-control" id="unit_price_catalog_discount" name="unit_price_catalog_discount" value="{{ $price->unit_price_catalog_discount }}">
        </div>

        <div class="mb-3">
            <label for="unit_price_own_discount" class="form-label">Preço T-Shirt Própria com Desconto</label>
            <input type="text" class="form-control" id="unit_price_own_discount" name="unit_price_own_discount" value="{{ $price->unit_price_own_discount }}">
        </div>

        <div class="mb-3">
            <label for="qty_discount" class="form-label">Quantidade de Desconto</label>
            <input type="text" class="form-control" id="qty_discount" name="qty_discount" value="{{ $price->qty_discount }}">
        </div>

        <div>
            <button type="submit" class="btn btn-primary">Guardar Alterações</button>
        </div>
    </form>
@endsection
