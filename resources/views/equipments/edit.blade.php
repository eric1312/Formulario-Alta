@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Equipos</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('equipments.create') }}" class="btn btn-primary mb-3">Agregar equipo</a>

    @if($equipments->isEmpty())
        <p>No hay equipos registrados.</p>
    @else
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Serial</th>
                    <th>Notas</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($equipments as $equipment)
                    <tr>
                        <td>{{ $equipment->name }}</td>
                        <td>{{ $equipment->brand }}</td>
                        <td>{{ $equipment->model }}</td>
                        <td>{{ $equipment->serial_number }}</td>
                        <td>{{ $equipment->notes }}</td>
                        {{-- <td>
                            <a href="{{ route('equipments.show', $equipment) }}" class="btn btn-sm btn-info">Ver</a>
                            <a href="{{ route('equipments.edit', $equipment) }}" class="btn btn-sm btn-warning">Editar</a>
                            <form action="{{ route('equipments.destroy', $equipment) }}" method="POST" style="display:inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Eliminar este equipo?')">Eliminar</button>
                            </form> --}}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
