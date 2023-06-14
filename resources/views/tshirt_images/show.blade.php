@extends('template.layout')

@section('titulo', 'Detalhes da Imagem de T-Shirt')

@section('main')
    <div class="card">
        <div class="card-body">
            <table class="table">
                <tbody>
                    <tr>
                        <th>Cliente:</th>
                        <td>{{ $tshirtImage->customer_id ? $tshirtImage->customer->user->name : 'Catálogo da Loja' }}</td>
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
                        <th>Imagem:</th>
                        <td>
                            <img src="{{ asset('storage/tshirt_images/' . $tshirtImage->image_url) }}" alt="Imagem da T-Shirt" style="max-width: 200px">
                        </td>
                    </tr>
                </tbody>
            </table>
            <a href="{{ route('tshirt_images.index') }}" class="btn btn-secondary">Voltar</a>
        </div>
    </div>
@endsection
