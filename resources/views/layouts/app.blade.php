<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <header>
            @include('layouts.nav')
        </header>

        <main class="mb-5 vh-100">
            @include('projects.partials._session_message')
            @yield('content')
        </main>
    </div>
    <footer>
        <a href="{{ route('project.index') }}" class="text-white">
            {{ config('app.name') }} | Copyright {{ date('y/m/d') }}
        </a>
    </footer>
</body>

</html>
