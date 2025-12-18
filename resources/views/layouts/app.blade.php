<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>@yield('title', 'Panel')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link rel="icon" href="{{ asset('img/logoProteger.jpg') }}" type="image/jpeg">
    @vite('resources/js/app.js')
</head>
<body>
    {{-- <nav class="navbar navbar-expand-lg navbar-dark" style="background:#195295"> --}}
        {{-- <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('customers.index') }}">
            <img src="{{ asset('img/logoProteger.jpg') }}" alt="logo" style="height:36px" class="me-2">
            Panel
            </a>
            <div class="collapse navbar-collapse">
            <ul class="navbar-nav me-auto">
                <li class="nav-item"><a class="nav-link" href="{{ route('customers.index') }}">Clientes</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('equipments.index') }}">Equipos</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('receptoras.index') }}">Receptoras</a></li>
            </ul>
            <form class="d-flex" method="GET" action="{{ route('customers.index') }}">
                <input class="form-control me-2" name="q" value="{{ request('q') }}" placeholder="Buscar cliente o CUIT">
                <button class="btn btn-light" type="submit">Buscar</button>
            </form>
            </div>
        </div>
    </nav> --}}

    <div class="container my-4">
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @yield('content')

        {{-- Footer incluido desde partial --}}
        @include('partials.footer')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
