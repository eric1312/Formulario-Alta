<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Clientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link rel="icon" href="{{ asset('img/logoProteger.jpg') }}" type="image/jpeg">
</head>
<body>

    <div class="table-container mt-5">
        <div class="card p-4 shadow-lg">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h2 class="text-white">📋 Listado de Clientes</h2>
                <a href="{{ route('customers.create') }}" class="btn btn-dark">+ Nuevo Cliente</a>
            </div>

            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <div class="table-responsive">
                <table class="table table-striped table-hover align-middle text-center">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Nombre Fantasía</th>
                            <th>CUIT / DNI</th>
                            <th>Razón Social</th>
                            <th>Localidad</th>
                            <th>Provincia</th>
                            <th>Email Contacto Adm.</th>
                            <th>Tel. Contacto Adm.</th>
                            <th>Tiene Móvil Verificador</th>
                            <th>Email Config Dealer</th>
                            <th>Tel. Config Dealer</th>
                            <th>Marca y Puertos</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($customers as $customer)
                            <tr>
                                <td>{{ $customer->id }}</td>
                                <td>{{ $customer->nombre_fantasia }}</td>
                                <td>{{ $customer->cuit_dni }}</td>
                                <td>{{ $customer->razon_social }}</td>
                                <td>{{ $customer->localidad }}</td>
                                <td>{{ $customer->provincia }}</td>
                                <td>{{ $customer->email_contacto_administrativo }}</td>
                                <td>{{ $customer->telefono_contacto_administrativo }}</td>
                                <td>
                                    @if($customer->tiene_movil_verificador)
                                        ✅ Sí
                                    @else
                                        ❌ No
                                    @endif
                                </td>
                                <td>{{ $customer->email_config_dealer }}</td>
                                <td>{{ $customer->telefono_config_dealer }}</td>
                                <td>{{ $customer->marca_comunicadores_puertos }}</td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-primary">Ver</a>
                                    <a href="#" class="btn btn-sm btn-warning">Editar</a>
                                    <a href="#" class="btn btn-sm btn-danger">Eliminar</a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="13" class="text-center text-muted">No hay clientes registrados aún</td>
                            </tr>
                        @endforelse
                        <td>
                            <a href="{{ route('customers.show', $customer->id) }}" class="btn btn-sm btn-primary">Ver</a>
                            <a href="{{ route('customers.edit', $customer->id) }}" class="btn btn-sm btn-warning">Editar</a>
                            <form action="{{ route('customers.destroy', $customer->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Seguro que deseas eliminar este cliente?')">Eliminar</button>
                            </form>
                        </td>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>
</html>
