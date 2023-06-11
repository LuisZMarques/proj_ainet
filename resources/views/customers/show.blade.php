@extends('template.layout')

@section('titulo', 'Detalhes de Cliente')

@section('main')
    <div class="mb-3">
        <label for="inputNome" class="form-label">Nome</label>
        <input type="text" name="nome" id="inputNome" class="form-control" value="{{ $customer->nome }}" readonly>
    </div>
    <div class="mb-3">
        <label for="inputAbr" class="form-label">Email</label>
        <input type="text" name="email" id="inputAbr" class="form-control" value="{{ $customer->email }}" readonly>
    </div>
    <div class="mb-3">
        <label for="inputNif" class="form-label">Nif</label>
        <input type="text" name="nif" id="inputNif" class="form-control" value="{{ $customer->nif }}" readonly>
    </div>
    <div class="mb-3">
        <label for="inputEndereco" class="form-label">Endereço</label>
        <input type="text" name="endereco" id="inputEndereco" class="form-control" value="{{ $customer->endereco }}" readonly>
    </div>
    <div class="mb-3">
        <label for="inputTipoPagamento" class="form-label">Tipo Pagamento</label>
        <input type="text" name="tipoPagamento" id="inputTipoPagamento" class="form-control" value="{{ $customer->tipoPagamento }}" readonly>
    </div>
    <div class="mb-3">
        <label for="inputRefPagamento" class="form-label">Ref. Pagamento</label>
        <input type="text" name="RefPagamento" id="inputRefPagamento" class="form-control" value="{{ $customer->refPagamento }}" readonly>
    </div>
@endsection
