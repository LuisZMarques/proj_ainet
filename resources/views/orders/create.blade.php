@extends('template.layout')

@section('titulo', 'Criar novo Cliente')

@section('main')
    <h2>Nova Encomenda</h2>
    <form method="POST" action="/Encomendas">
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
            <label for="inputTipo">Tipo de Encomenda</label>
            <select name="tipo" id="inputTipo">
                <option>Licenciatura</option>
                <option>Mestrado</option>
                <option>Encomenda Técnico Superior Profissional</option>
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
            <button type="submit" name="ok">Guardar novo Encomenda</button>
        </div>
    </form>
