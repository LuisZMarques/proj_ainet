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
    <form method="POST" action="/Clientes">
        @csrf
        <div>
            <label for="inputAbr">Abreviatura</label>
            <input type="text" name="abreviatura" id="inputAbr">
        </div>
        <div>
            <label for="inputNome">Nome</label>
            <input type="text" name="nome" id="inputNome">
        </div>
        <div>
            <label for="inputTipo">Tipo de Cliente</label>
            <select name="tipo" id="inputTipo">
                <option>Licenciatura</option>
                <option>Mestrado</option>
                <option>Cliente Técnico Superior Profissional</option>
            </select>
        </div>
        <div>
            <label for="inputSemestres">Semestres</label>
            <input type="text" name="semestres" id="inputSemestres">
        </div>
        <div>
            <label for="inputECTS">ECTS</label>
            <input type="text" name="ECTS" id="inputECTS">
        </div>
        <div>
            <label for="inputVagas">Vagas</label>
            <input type="text" name="vagas" id="inputVagas">
        </div>
        <div>
            <label for="inputContato">Contato</label>
            <input type="text" name="contato" id="inputContato">
        </div>
        <div>
            <label for="inputObjetivos">Objetivos</label>
            <textarea name="objetivos" id="inputObjetivos" rows=10></textarea>
        </div>
        <div>
            <button type="submit" name="ok">Guardar novo Cliente</button>
        </div>
    </form>
</body>