@extends('template.layout')

@section('titulo', 'Detalhes da Categoria')

@section('main')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Detalhes</h5>
                <table class="table">
                    <tbody>
                        <tr>
                            <th>ID:</th>
                            <td>{{ $category->id }}</td>
                        </tr>
                        <tr>
                            <th>Nome:</th>
                            <td>{{ $category->name }}</td>
                        </tr>
                    </tbody>
                </table>
                <a href="{{ route('categories.index') }}" class="btn btn-secondary">Voltar</a>
            </div>
        </div>
    </div>
@endsection
