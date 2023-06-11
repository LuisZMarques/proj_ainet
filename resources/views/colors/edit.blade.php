@extends('template.layout')

@section('titulo', 'Editar Cor')

@section('main')
    <div class="container">
        <h2 class="text-center">Editar Cor</h2>
        <form method="POST" action="{{ route('colors.update', $color->id) }}">
            @csrf
            @method('PUT')
            @include('shared.fields')

            <div>
                <button type="submit" name="ok" class="btn btn-primary">Guardar Alterações</button>
                <a href="{{ route('colors.index') }}" class="btn btn-secondary">Cancelar</a>
            </div>
        </form>
    </div>
@endsection
