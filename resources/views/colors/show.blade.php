@extends('template.layout')

@section('titulo', 'Detalhes da Cor')

@section('main')
    <div class="container">
        <h2 class="text-center">Detalhes da Cor</h2>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Detalhes</h5>
                <table class="table">
                    <tbody>
                        <tr>
                            <th>Código:</th>
                            <td>{{ $color->code }}</td>
                        </tr>
                        <tr>
                            <th>Nome:</th>
                            <td>{{ $color->name }}</td>
                        </tr>
                    </tbody>
                </table>
                <a href="{{ route('colors.index') }}" class="btn btn-secondary">Voltar</a>
            </div>
        </div>
    </div>
@endsection
