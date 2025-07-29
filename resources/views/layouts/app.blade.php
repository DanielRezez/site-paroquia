<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Paróquia Santo Antônio de Pádua')</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet"></link>
    
</head>
<body>
    @include('components.header')
    <main>
        @yield('content')
    </main>
    @include('components.footer')

</body>
</html>
