@extends('template.layout')

@section('titulo', 'Lista de Encomendas')

@section('main')
    <h2>Lista de Encomendas</h2>
    <div class="table-responsive">
        <table class="table table-dark text-center">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Status</th>
                    <th>Cliente</th>
                    <th>Data</th>
                    <th>Preço Total</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                    <tr>
                        <td>{{ $order->id }}</td>
                        <td>{{ $order->status }}</td>
                        <td>{{ $order->customer->user->name }}</td>
                        <td>{{ $order->date }}</td>
                        <td>{{ $order->total_price }}</td>
                        <td>
                            <a href="{{ route('orders.show', $order->id) }}">Ver</a>
                            <a href="{{ route('orders.edit', $order->id) }}">Editar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
