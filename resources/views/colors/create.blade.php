@extends('template.layout')

@section('titulo', 'Criar Nova Cor')

@section('main')
    <div class="container">
        <h2 class="text-center">Criar Nova Cor</h2>
        <form method="POST" action="{{ route('colors.store') }}">
            @csrf
            @include('colors.shared.fields')

            <div>
                <button type="submit" name="ok" class="btn btn-primary">Guardar Cor</button>
                <a href="{{ route('colors.index') }}" class="btn btn-secondary">Cancelar</a>
            </div>
        </form>
    </div>
@endsection
