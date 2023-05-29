@extends('template.layout')

@section('titulo', 'Preços da Loja')

@section('main')
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>Nome:</th>
                    <th>Preço:</th>
                    <th><a href="{{ route('prices.edit', $prices->id) }}">Editar</a></th>
                </tr>
            </thead>
            <tbody>
                    <tr>
                        <td>Preço T-shirt Catalogo (uni.)</td>
                        <td>{{ $prices->unit_price_catalog }}</td>
                    </tr>
                    <tr>
                        <td> Preço T-shirt Cliente (uni.) </td>
                        <td>{{ $prices->unit_price_own }}</td>
                    </tr>
                    <tr>
                        <td> Desconto T-shirt Catalogo </td>
                        <td>{{ $prices->unit_price_catalog_discount }}</td>
                    </tr>
                    <tr>
                        <td> Desconto T-shirt Cliente</td>
                        <td>{{ $prices->unit_price_own_discount }}</td>
                    </tr>
                    <tr>
                        <td>Unidade para ativar desconto</td>
                        <td>{{ $prices->qty_discount }}</td>
                    </tr>
            </tbody>
        </table>
    </div>
@endsection