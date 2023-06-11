@extends('template.layout')

@section('titulo', 'Editar Categoria')

@section('main')
    <div class="container">
        <h2 class="text-center">Editar Categoria</h2>
        <form method="POST" action="{{ route('categories.update', $category->id) }}">
            @csrf
            @method('PUT')
            @include('shared.fields')

            <div>
                <button type="submit" name="ok" class="btn btn-primary">Guardar Alterações</button>
                <a href="{{ route('categories.index') }}" class="btn btn-secondary">Cancelar</a>
            </div>
        </form>
    </div>
@endsection
