@extends('template.layout')

@section('titulo', 'Detalhes da Cor')

@section('main')
    <div>
        @include('colors.shared.fields', ['readonlyData' => true])
    </div>
    <div class="d-flex justify-content-between">
        <div class="d-flex">
            <a href="{{ route('colors.index') }}" class="btn btn-secondary">Voltar</a>
        </div>
        <div class="d-flex">
            <a href="{{ route('colors.edit', '$color') }}" class="btn btn-primary">Editar</a>
            <a href="{{ route('colors.destroy', '$color') }}" class="btn btn-danger">Eliminar</a>
        </div>
    </div>
@endsection
