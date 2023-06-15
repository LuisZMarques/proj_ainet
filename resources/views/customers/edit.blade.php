@extends('template.layout')

@section('titulo', 'Editar Perfil')

@section('main')
    <form method="POST" action="{{ route('customers.update', $customer->id) }}">
        @csrf
        @method('PUT')
        @include('customers.shared.fields', ['readonlyData' => false])
        <div>
            <button type="submit" name="ok" class="btn btn-primary">Guardar Alterações</button>
            <a href="{{ route('customers.index') }}" class="btn btn-danger">Cancelar</a>
        </div>
    </form>
@endsection
