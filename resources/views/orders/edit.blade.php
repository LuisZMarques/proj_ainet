@extends('template.layout')

@section('titulo', 'Editar Encomenda')

@section('main')
    <form method="POST" action="{{ route('orders.update', $order->id) }}">
        @csrf
        @method('PUT')
        @include('orders.shared.fields', ['readonlyData' => false])
        <div>
            <button type="submit" name="ok" class="btn btn-primary">Guardar Alterações</button>
            <a href="{{ route('customers.index') }}" class="btn btn-danger">Cancelar</a>
        </div>
    </form>
@endsection
