@extends('template.layout')

@section('titulo', 'Lista de Categorias')

@section('main')
    <div class="row justify-content-center">
        <div class="col-12 col-lg-8">  
            <a href="{{ route('categories.create') }}" class="btn btn-primary mb-3">Nova Categoria</a>
            <form action="{{ route('categories.index') }}" method="GET" class="search-bar mb-3 d-flex">
                <input type="text" id="search-input" placeholder="Procura por Nome" class="form-control" name="search">
                <button type="submit" class="btn btn-primary">Filtrar</button>
            </form>
            <div class="table-responsive">
                <table class="table table-dark table-striped " style="background-color: #f1f1f1;">
                    <thead>
                        <tr>
                            <th scope="col">Nome</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($categories as $category)
                            <tr>
                                <td>{{ $category->name }}</td>
                                <td>
                                    <a href="{{ route('categories.show', $category->id) }}" class="btn btn-info btn-sm"><i class="fas fa-eye"></i></a>
                                    <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-primary btn-sm"><i class="fas fa-pencil-alt"></i></a>
                                    <form method="POST" action="{{ route('categories.destroy', $category->id) }}" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza que deseja excluir esta categoria?')"><i class='fas fa-trash'></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{ $categories->links() }}
        </div>
    </div>
@endsection
