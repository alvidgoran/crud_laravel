<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Mi Aplicación')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> {{-- Si usas CSS --}}
    <style>
        body { font-family: sans-serif; margin: 20px; }
        header, footer { background: #f2f2f2; padding: 10px; text-align: center; }
        nav a { margin: 0 10px; text-decoration: none; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        a.btn { padding: 6px 12px; background-color: #3490dc; color: white; border-radius: 4px; text-decoration: none; }
        a.btn:hover { background-color: #2779bd; }
    </style>
</head>
<body>

    <header>
        <h1>Mi CRUD Laravel</h1>
        <nav>
            <a href="{{ route('estudiantes.index') }}">Estudiantes</a>
            <a href="{{ route('profesores.index') }}">Profesores</a>
        </nav>
    </header>

    <main>
        @yield('content') {{-- Aquí se coloca el contenido de cada vista --}}
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} - Todos los derechos reservados.</p>
    </footer>

</body>
</html>
