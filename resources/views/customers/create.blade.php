@extends('template.layout')

@section('titulo', 'Criar novo Cliente')

@section('main')
    <h2>Criar novo Cliente</h2>
    <form method="POST" action="{{ route('customers.store') }}">
        @csrf
        @include('customers.shared.fields')

        <div>
            <button type="submit" name="ok">Guardar Cliente</button>
        </div>
    </form>
@endsection
