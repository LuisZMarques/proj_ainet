@extends('template.layout')

@section('titulo', 'Lista de Imagens de T-Shirt')

@section('main')
    <div class="row justify-content-center">
        <div class="col-12 col-lg-8">
            <div class="table-responsive">
                <table class="table table-dark table-striped" style="background-color: #f1f1f1;">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Cliente</th>
                            <th>Categoria</th>
                            <th>Nome</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tshirtImages as $tshirtImage)
                            <tr>
                                <td>{{ $tshirtImage->id }}</td>
                                <td>{{ $tshirtImage->category_id ? $tshirtImage->category->name : 'Nenhuma' }}</td>
                                <td>{{ $tshirtImage->name }}</td>
                                <td>
                                    <a href="{{ route('tshirt_images.show', $tshirtImage->id) }}" class="btn btn-primary btn-sm">Detalhes</a>
                                    <a href="{{ route('tshirt_images.edit', $tshirtImage->id) }}" class="btn btn-secondary btn-sm">Editar</a>
                                    <form method="POST" action="{{ route('tshirt_images.destroy', $tshirtImage->id) }}" style="display: inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza que deseja excluir esta imagem de T-Shirt?')">Excluir</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{ $tshirtImages->links() }}
        </div>
    </div>
@endsection
