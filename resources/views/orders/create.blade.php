@extends('template.layout')

@section('titulo', 'Criar nova Encomenda')

@section('main')
    <div class="container">
        <h2 class="text-center">Criar nova Encomenda</h2>
        <form method="POST" action="{{ route('orders.store') }}">
            @csrf
            @include('shared.fields')
            <div>
                <button type="submit" name="ok">Guardar Encomenda</button>
            </div>
        </form>
    </div>
@endsection
