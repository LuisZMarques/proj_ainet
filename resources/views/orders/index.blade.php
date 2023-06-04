@extends('template.layout')

@section('titulo', 'Encomendas')

@section('main')
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>ID:</th>
                    <th>Status:</th>
                    <th>Cliente ID:</th>
                    <th>Data:</th>
                    <th>Preço:</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                    <tr>
                        <td>{{ $order->id}}</td>
                        <td>{{ $order->status}}</td>
                        <td>{{ $order->customer_id}}</td>
                        <td>{{ $order->date }}</td>
                        <td>{{ $order->total_price }}</td>
                        <td>
                            <a href="/encomendas/{{$order->id}}/edit">Alterar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $orders->withQueryString()->links() }}
    </div>
@endsection