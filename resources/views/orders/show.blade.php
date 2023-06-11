@extends('template.layout')

@section('titulo', 'Detalhes da Encomenda')

@section('main')
        <h2 class="text-center">Detalhes da Encomenda</h2>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">ID da Encomenda: {{ $order->id }}</h5>
                <h5 class="card-title">Estado: {{ $order->status }}</h5>
                <h5 class="card-title">ID do Cliente: {{ $order->customer_id }}</h5>
                <h5 class="card-title">Data da Encomenda: {{ $order->date }}</h5>
                <h5 class="card-title">Preço Total: {{ $order->total_price }}</h5>
                @if ($order->notes)
                    <h5 class="card-title">Notas: {{ $order->notes }}</h5>
                @endif
                <h5 class="card-title">NIF: {{ $order->nif }}</h5>
                <h5 class="card-title">Endereço: {{ $order->address }}</h5>
                <h5 class="card-title">Tipo de Pagamento: {{ $order->payment_type }}</h5>
                <h5 class="card-title">Referência de Pagamento: {{ $order->payment_ref }}</h5>
                @if ($order->receipt_url)
                    <h5 class="card-title">URL do Recibo: {{ $order->receipt_url }}</h5>
                @endif
            </div>
        </div>
@endsection
