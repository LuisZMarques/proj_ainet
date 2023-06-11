@extends('template.layout')

@section('titulo', 'Lista de Categorias')

@section('main')
    <div class="container">
        <h2 class="text-center">Lista de Categorias</h2>
        <a href="{{ route('categories.create') }}" class="btn btn-primary mb-3">Nova Categoria</a>
        <table class="table table-dark text-center">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->name }}</td>
                        <td>
                            <a href="{{ route('categories.show', $category->id) }}" class="btn btn-info btn-sm">Detalhes</a>
                            <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-primary btn-sm">Editar</a>
                            <form method="POST" action="{{ route('categories.destroy', $category->id) }}" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza que deseja excluir esta categoria?')">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
