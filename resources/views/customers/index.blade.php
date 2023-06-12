@extends('template.layout')

@section('titulo', 'Todos os Clientes')

@section('main')
<h2>Clientes</h2>
<div class="d-flex justify-content-center">
    <table class="table table-dark table-striped" style="background-color: #f1f1f1;">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Nif</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($customers as $customer)
            <tr>
                <td>{{ $customer->user->name }}</td>
                <td>{{ $customer->user->email }}</td>
                <td>{{ $customer->nif }}</td>
                <td>
                    <div class="d-flex justify-content-center">
                        <a href="{{ route('customers.show', $customer->id) }}" class="btn btn-primary btn-sm me-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                <path d="M8 1C4.15 1 1 4.582 1 8s3.15 7 7 7 7-3.582 7-7S11.85 1 8 1zm0 12.5A5.5 5.5 0 1 1 8 1.5a5.5 5.5 0 0 1 0 11zm0-10a4 4 0 1 0 0 8 4 4 0 0 0 0-8zm3.5 4a.5.5 0 0 1 0 1H9.5v2a.5.5 0 0 1-1 0v-2H5.5a.5.5 0 0 1 0-1h2V7a.5.5 0 0 1 1 0v2h2z" />
                            </svg>
                        </a>
                        <a href="{{ route('customers.edit', $customer->id) }}" class="btn btn-secondary btn-sm me-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                <path d="M13.854 2.146a.5.5 0 0 0-.708 0L1 13.293V15h1.707l10.147-10.146a.5.5 0 0 0 0-.708zM2 14V13.586L11.586 4H13v1.414L4.414 14H2zm9-10l1-1v1h1l1 1V4h-3zM3.5 9a.5.5 0 0 1 0-1h9a.5.5 0 0 1 0 1h-9z" />
                            </svg>
                        </a>
                        <form method="POST" action="{{ route('customers.destroy', $customer->id) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Tem a certeza?')">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                    <path d="M1.5 5.5A.5.5 0 0 1 2 5h12a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-12a.5.5 0 0 1-.5-.5v-9zM4.5 4h7a.5.5 0 0 1 .5.5V5H4v-.5a.5.5 0 0 1 .5-.5zM2 5.5a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h12a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-1v-.5A1.5 1.5 0 0 0 11.5 2h-3A1.5 1.5 0 0 0 7 3.5v.5H2.5a.5.5 0 0 0-.5.5zM3 10a.5.5 0 0 1 .5.5V14a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-3.5a.5.5 0 0 1 .5-.5h1zm4 0a.5.5 0 0 1 .5.5V14a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-3.5a.5.5 0 0 1 .5-.5h1z" />
                                </svg>
                            </button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection