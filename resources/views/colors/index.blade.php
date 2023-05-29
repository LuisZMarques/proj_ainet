@extends('template.layout')

@section('titulo', 'Cores')

@section('main')
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>Nome:</th>
                    <th>Código:</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($colors as $color)
                    <tr>
                        <td>{{ $color->name}}</td>
                        <td>{{ '#' . $color->code}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection