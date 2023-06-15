@extends('template.layout')

@section('titulo', 'Perfil de Cliente')

@section('main')
    <div>
        @include('customers.shared.fields', ['readonlyData' => true])
    </div>
    <div class="d-flex justify-content-between">
        <div class="d-flex">
            <a href="{{ route('customers.index') }}" class="btn btn-secondary">Voltar</a>
        </div>
        <div class="d-flex">
            <a href="{{ route('customers.edit', $customer) }}" class="btn btn-primary">Editar</a>
            <a href="{{ route('customers.destroy', $customer) }}" class="btn btn-danger">Eliminar</a>
        </div>
    </div>
@endsection
