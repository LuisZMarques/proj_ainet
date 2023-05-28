@extends('template.layout')

@section('titulo', 'Catalogo de T-Shirts')

@section('main')
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>Nome:</th>
                    <th>Email:</th>
                    <th>NIF:</th>
                    <th>Foto:</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($customers as $customer)
                    <tr>
                        <td>{{ $customer->name}}</td>
                        <td>{{ $customer->email}}</td>
                        <td>{{ $customer->nif}}</td>
                        <td>{{ $customer->fullPhotoUrl }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection