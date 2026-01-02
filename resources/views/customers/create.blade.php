<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta de Cliente</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- CSS personalizado -->
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    {{-- <link rel="icon" href="{{ asset('img/logoProteger.jpg') }}" type="image/jpeg"> --}}
</head>

    <body>
        <div class="container">
            <div class="form-container">
                <div class="form-header text-center">
                    <img src="{{ asset('img/logoGorrito.jpg') }}" alt="Logo" class="logo">
                    <h1>Formulario de Alta de Cliente</h1>
                </div>

                <!-- ✅ ALERTAS -->
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Cerrar"></button>
                    </div>
                @endif

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Por favor corrige los siguientes errores:</strong>
                        <ul class="mb-0 mt-2">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <!-- ✅ FORMULARIO -->
                <form action="{{ route('customers.store') }}" method="POST">
                    @csrf

                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="nombre_fantasia" class="form-label">Nombre Fantasía *</label>
                            <input type="text" name="nombre_fantasia" id="nombre_fantasia" class="form-control" value="{{ old('nombre_fantasia') }}" required>
                        </div>

                        <div class="col-md-6">
                            <label for="cuit_dni" class="form-label">CUIT / DNI *</label>
                            <input type="text" name="cuit_dni" id="cuit_dni" class="form-control" value="{{ old('cuit_dni') }}" required>
                        </div>

                        <div class="col-md-6">
                            <label for="razon_social" class="form-label">Razón Social *</label>
                            <input type="text" name="razon_social" id="razon_social" class="form-control" value="{{ old('razon_social') }}" required>
                        </div>

                        <div class="col-md-6">
                            <label for="direccion" class="form-label">Dirección *</label>
                            <input type="text" name="direccion" id="direccion" class="form-control" value="{{ old('direccion') }}" required>
                        </div>

                        <div class="col-md-6">
                            <label for="localidad" class="form-label">Localidad *</label>
                            <input type="text" name="localidad" id="localidad" class="form-control" value="{{ old('localidad') }}" required>
                        </div>

                        <div class="col-md-6">
                            <label for="provincia" class="form-label">Provincia *</label>
                            <input type="text" name="provincia" id="provincia" class="form-control" value="{{ old('provincia') }}" required>
                        </div>

                        <hr class="mt-4">

                        <div class="form-section-title">Contacto Administrativo</div>

                        <div class="col-md-6">
                            <label for="email_admin" class="form-label">Email de Contacto Administrativo *</label>
                            <input type="email" name="email_admin" id="email_admin" class="form-control" value="{{ old('email_admin') }}" required>
                        </div>

                        <div class="col-md-6">
                            <label for="telefono_admin" class="form-label">Teléfono Administrativo *</label>
                            <input type="text" name="telefono_admin" id="telefono_admin" class="form-control" value="{{ old('telefono_admin') }}" required>
                        </div>

                        <hr class="mt-4">

                        <div class="form-section-title">Configuración de Dealer</div>

                        <div class="form-check">
                            <!-- Esto garantiza que se envíe 0 si el checkbox está desmarcado -->
                            <input type="hidden" name="tiene_movil_verificador" value="0">

                            <input
                                class="form-check-input"
                                type="checkbox"
                                name="tiene_movil_verificador"
                                id="tiene_movil_verificador"
                                value="1"
                                {{ old('tiene_movil_verificador', $customer->tiene_movil_verificador ?? false) ? 'checked' : '' }}
                            >
                            <label class="form-check-label" for="tiene_movil_verificador">
                                ¿Tiene Móvil Verificador Propio?
                            </label>
                        </div>


                        <div class="col-md-6">
                            <label for="email_config_dealer" class="form-label">Email para Config Dealer *</label>
                            <input type="email" name="email_config_dealer" id="email_config_dealer" class="form-control" value="{{ old('email_config_dealer') }}" required>
                        </div>

                        <div class="col-md-6">
                            <label for="telefono_config_dealer" class="form-label">Teléfono Config Dealer *</label>
                            <input type="text" name="telefono_config_dealer" id="telefono_config_dealer" class="form-control" value="{{ old('telefono_config_dealer') }}" required>
                        </div>

                        <div class="col-12">
                            <label for="comunicadores_puertos" class="form-label">
                                Marca de Comunicadores y Puertos *
                            </label>
                            <textarea name="comunicadores_puertos" id="comunicadores_puertos" class="form-control" rows="3" required>{{ old('comunicadores_puertos') }}</textarea>
                        </div>

                        <div class="col-12 text-center mt-4">
                            <button type="submit" class="btn btn-primary px-5">Enviar Formulario</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>

</html>
