@extends('template.layout')

@section('titulo', 'Lista de Cores')

@section('main')
    <div class="container">
        <h2 class="text-center">Lista de Cores</h2>
        <a href="{{ route('colors.create') }}" class="btn btn-primary mb-3">Nova Cor</a>
        <table class="table table-dark text-center">
            <thead>
                <tr>
                    <th scope="col">Código</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($colors as $color)
                    <tr>
                        <td>{{ $color->code }}</td>
                        <td>{{ $color->name }}</td>
                        <td>
                            <a href="{{ route('colors.show', $color->code) }}" class="btn btn-info btn-sm">Detalhes</a>
                            <a href="{{ route('colors.edit', $color->code) }}" class="btn btn-primary btn-sm">Editar</a>
                            <form method="POST" action="{{ route('colors.destroy', $color->code) }}" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza que deseja excluir esta cor?')">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
