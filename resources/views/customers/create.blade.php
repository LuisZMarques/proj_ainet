@extends('template.layout')

@section('titulo', 'Criar novo Cliente')

@section('main')
    <form method="POST" action="{{ route('customers.store') }}">
        @csrf
        @include('customers.shared.fields')

        <div>
            <button type="submit" name="ok">Guardar Cliente</button>
        </div>
    </form>
@endsection
