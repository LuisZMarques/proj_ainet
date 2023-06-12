@extends('template.layout')

@section('titulo', 'Editar Encomenda')

@section('main')
    <div class="container">
        <h2 class="text-center">Editar Encomenda</h2>
        <form method="POST" action="{{ route('orders.update', $order->id) }}">
            @csrf
            @method('PUT')
            @include('orders.shared.fields')
            <div>
                <button type="submit" name="ok">Guardar Encomenda</button>
            </div>
        </form>
    </div>
@endsection
