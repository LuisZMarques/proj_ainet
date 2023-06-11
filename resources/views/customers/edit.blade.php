@extends('template.layout')

@section('titulo', 'Editar Cliente')

@section('main')
    <h2>Editar Cliente</h2>
    <form method="POST" action="{{ route('customers.update', $customer->id) }}">
        @csrf
        @method('PUT')
        @include('fields.shared')

        <div>
            <button type="submit" name="ok">Guardar</button>
        </div>
    </form>
@endsection
