@csrf
<div class="mb-3">
    <label for="status" class="form-label">Estado</label>
    <select class="form-select" id="status" name="status">
        <option value="pending">Pendente</option>
        <option value="paid">Paga</option>
        <option value="closed">Fechada</option>
        <option value="canceled">Anulada</option>
    </select>
</div>
<div class="mb-3">
    <label for="customer_id" class="form-label">ID do Cliente</label>
    <input type="text" class="form-control" id="customer_id" name="customer_id">
</div>
<div class="mb-3">
    <label for="date" class="form-label">Data da Encomenda</label>
    <input type="text" class="form-control" id="date" name="date">
</div>
<div class="mb-3">
    <label for="total_price" class="form-label">Preço Total</label>
    <input type="text" class="form-control" id="total_price" name="total_price">
</div>
<div class="mb-3">
    <label for="notes" class="form-label">Notas</label>
    <textarea class="form-control" id="notes" name="notes"></textarea>
</div>
<div class="mb-3">
    <label for="nif" class="form-label">NIF</label>
    <input type="text" class="form-control" id="nif" name="nif">
</div>
<div class="mb-3">
    <label for="address" class="form-label">Endereço</label>
    <input type="text" class="form-control" id="address" name="address">
</div>
<div class="mb-3">
    <label for="payment_type" class="form-label">Tipo de Pagamento</label>
    <select class="form-select" id="payment_type" name="payment_type">
        <option value="VISA">Cartão de Crédito Visa</option>
        <option value="MC">Cartão de Crédito Master Card</option>
        <option value="PAYPAL">Paypal</option>
    </select>
</div>
<div class="mb-3">
    <label for="payment_ref" class="form-label">Referência de Pagamento</label>
    <input type="text" class="form-control" id="payment_ref" name="payment_ref">
</div>
<div class="mb-3">
    <label for="receipt_url" class="form-label">URL do Recibo</label>
    <input type="text" class="form-control" id="receipt_url" name="receipt_url">
</div>
