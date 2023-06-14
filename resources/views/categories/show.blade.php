@extends('template.layout')

@section('titulo', 'Detalhes da Categoria')

@section('main')
    <div>
        @include('categories.shared.fields', ['readonlyData' => true])
    </div>
    <div class="d-flex justify-content-between">
        <div class="d-flex">
            <a href="{{ route('categories.index') }}" class="btn btn-secondary">Voltar</a>
        </div>
        <div class="d-flex">
            <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-primary">Editar</a>
            <a href="{{ route('categories.destroy', $category->id) }}" class="btn btn-danger">Eliminar</a>
        </div>
    </div>
@endsection
