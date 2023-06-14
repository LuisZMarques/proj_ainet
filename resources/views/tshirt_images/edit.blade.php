@extends('template.layout')

@section('titulo', 'Editar Imagem de T-Shirt')
    <form method="POST" action="{{ route('tshirt_images.update', $tshirtImage->id) }}">
        @csrf
        @method('PUT')
        @include('tshirt_images.shared.fields')

        <div>
            <button type="submit" name="ok" class="btn btn-primary">Guardar Alterações</button>
            <a href="{{ route('tshirt_images.index') }}" class="btn btn-secondary">Cancelar</a>
        </div>
    </form>
@endsection
