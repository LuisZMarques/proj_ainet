@extends('template.layout')

@section('titulo', 'Imagens das Camisas do Cliente ' . $customer->user->name)

@section('main')
    <div class="container">
        <table class="table table-dark table-bordered text-center">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>URL da Imagem</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($customer->tshirtImages as $tshirtImage)
                    <tr>
                        <td>{{ $tshirtImage->id }}</td>
                        <td>{{ $tshirtImage->name }}</td>
                        <td>{{ $tshirtImage->description }}</td>
                        <td>{{ $tshirtImage->image_url }}</td>
                        <td>
                            <a href="/tshirt_images/{{ $tshirtImage->id }}/edit" class="btn btn-primary">Editar</a>
                            <form action="/tshirt_images/{{ $tshirtImage->id }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection