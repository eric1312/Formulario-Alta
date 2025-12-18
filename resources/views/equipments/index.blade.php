@extends('layouts.app')
@section('title','Clientes')
@section('content')
    {{-- <div class="d-flex justify-content-between align-items-center mb-3">
    <h2>Clientes</h2>
    <a href="{{ route('customers.create') }}" class="btn btn-dark">+ Nuevo Cliente</a>
    </div>

    <table class="table table-striped">
    <thead>
        <tr>
        <th>ID</th><th>Nombre</th><th>CUIT</th><th>Localidad</th><th>Email</th><th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @forelse($customers as $c) --}}
        <tr>
            <td>{{ $c->id }}</td>
            <td>{{ $c->nombre_fantasia }}</td>
            <td>{{ $c->cuit_dni }}</td>
            <td>{{ $c->localidad }}</td>
            <td>{{ $c->email_admin }}</td>
            {{-- <td>
            <a href="{{ route('customers.show',$c) }}" class="btn btn-sm btn-info">Ver</a>
            <a href="{{ route('customers.edit',$c) }}" class="btn btn-sm btn-warning">Editar</a>
            <form action="{{ route('customers.destroy',$c) }}" method="POST" class="d-inline">
                @csrf @method('DELETE')
                <button class="btn btn-sm btn-danger" onclick="return confirm('Eliminar?')">Eliminar</button>
            </form>
            </td> --}}
        </tr>
        @empty
        <tr><td colspan="6">No hay clientes</td></tr>
        @endforelse
    </tbody>
    </table>

    {{ $customers->withQueryString()->links() }}
@endsection
