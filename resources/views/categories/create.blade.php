@extends('template.layout')

@section('titulo', 'Criar Nova Categoria')

@section('main')
    <div class="container">
        <form method="POST" action="{{ route('categories.store') }}">
            @csrf
            @include('categories.shared.fields')

            <div>
                <button type="submit" name="ok" class="btn btn-primary">Guardar Categoria</button>
                <a href="{{ route('categories.index') }}" class="btn btn-secondary">Cancelar</a>
            </div>
        </form>
    </div>
@endsection
