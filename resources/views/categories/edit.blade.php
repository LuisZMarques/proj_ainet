@extends('template.layout')

@section('titulo', 'Editar Categoria')

@section('main')
    <form method="POST" action="{{ route('categories.update', $category->id) }}">
        @csrf
        @method('PUT')
        @include('categories.shared.fields', ['readonlyData' => false])
        <div>
            <button type="submit" name="ok" class="btn btn-primary">Guardar Alterações</button>
            <a href="{{ route('categories.index') }}" class="btn btn-danger">Cancelar</a>
        </div>
    </form>
@endsection
