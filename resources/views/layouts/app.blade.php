<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    @include('layouts.head')

</head>
<body>
    <div id="app">
        <div class="header">
            @include('layouts.header')
        </div>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>

@yield('scripts')
