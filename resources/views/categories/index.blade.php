@extends('template.layout')

@section('titulo', 'Categorias')

@section('main')
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>Nome:</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <td>{{ $category->name}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection