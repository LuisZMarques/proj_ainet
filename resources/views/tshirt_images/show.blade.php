@extends('template.layout')

@section('titulo', 'Detalhes da Imagem de T-Shirt')

@section('main')
    <div class="container">
        <h2 class="text-center">Detalhes da Imagem de T-Shirt</h2>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Detalhes</h5>
                <table class="table">
                    <tbody>
                        <tr>
                            <th>ID:</th>
                            <td>{{ $tshirtImage->id }}</td>
                        </tr>
                        <tr>
                            <th>Cliente:</th>
                            <td>{{ $tshirtImage->customer_id ? $tshirtImage->customer->name : 'Catálogo da Loja' }}</td>
                        </tr>
                        <tr>
                            <th>Categoria:</th>
                            <td>{{ $tshirtImage->category_id ? $tshirtImage->category->name : 'Nenhuma' }}</td>
                        </tr>
                        <tr>
                            <th>Nome:</th>
                            <td>{{ $tshirtImage->name }}</td>
                        </tr>
                        <tr>
                            <th>Descrição:</th>
                            <td>{{ $tshirtImage->description }}</td>
                        </tr>
                        <tr>
                            <th>URL da Imagem:</th>
                            <td>{{ $tshirtImage->image_url }}</td>
                        </tr>
                        <tr>
                            <th>Informação Extra:</th>
                            <td>{{ $tshirtImage->extra_info }}</td>
                        </tr>
                    </tbody>
                </table>
                <a href="{{ route('tshirt_images.index') }}" class="btn btn-secondary">Voltar</a>
            </div>
        </div>
    </div>
@endsection
