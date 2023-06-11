@extends('template.layout')

@section('titulo', 'Criar Nova Imagem de T-Shirt')

@section('main')
    <div class="container">
        <h2 class="text-center">Criar Nova Imagem de T-Shirt</h2>
        <form method="POST" action="{{ route('tshirt_images.store') }}">
            @csrf
            @include('shared.fields')

            <div>
                <button type="submit" name="ok" class="btn btn-primary">Guardar Imagem de T-Shirt</button>
                <a href="{{ route('tshirt_images.index') }}" class="btn btn-secondary">Cancelar</a>
            </div>
        </form>
    </div>
@endsection
