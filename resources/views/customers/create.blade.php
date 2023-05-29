<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0,
 maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cliente</title>
</head>

<body>
    <h2>Novo Cliente</h2>
    <form method="POST" action="/clientes">
        @csrf
        <div>
            <label for="inputNome">Nome</label>
            <input type="text" name="nome" id="inputNome">
        </div>
        <div>
            <label for="inputAbr">Email</label>
            <input type="text" name="email" id="inputAbr">
        </div>
        <div>
            <label for="inputPw">Password</label>
            <input type="text" name="password" id="inputPw">
        </div>
        <div>
            <label for="inputTipoCliente">Tipo de Cliente</label>
            <select name="tipoCliente" id="inputTipoCliente">
                <option>C</option>
                <option>E</option>
                <option>A</option>
            </select>
        </div>
        <div>
            <label for="inputNif">Nif</label>
            <input type="text" name="nif" id="inputNif">
        </div>
        <div>
            <label for="inputEndereco">Endereço</label>
            <input type="text" name="endereco" id="inputEndereco">
        </div>
        <div>
            <label for="inputTipoPagamento">Tipo Pagamento</label>
            <select name="tipoPagamento" id="inputTipoPagamento">
                <option>MBWAY</option>
                <option>X</option>
                <option>Y</option>
            </select>
        </div>
        <div>
            <label for="inputRefPagamento">Ref. Pagamento</label>
            <input type="text" name="RefPagamento" id="inputRefPagamento">
        </div>
        <div>
            <button type="submit" name="ok">Guardar novo Cliente</button>
        </div>
    </form>
</body>