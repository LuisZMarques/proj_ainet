@extends('template.layout')

@section('titulo', 'Criar Nova Categoria')

@section('main')
    <div class="container">
        <h2 class="text-center">Criar Nova Categoria</h2>
        <form method="POST" action="{{ route('categories.store') }}">
            @csrf
            @include('shared.fields')

            <div>
                <button type="submit" name="ok" class="btn btn-primary">Guardar Categoria</button>
                <a href="{{ route('categories.index') }}" class="btn btn-secondary">Cancelar</a>
            </div>
        </form>
    </div>
@endsection
