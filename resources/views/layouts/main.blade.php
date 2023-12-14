<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title', 'Banda Essence')</title>

    @yield('styles')

    @include('components.header')
</head>

    <body>
        <main>
            @yield('content')
        </main>

        @include('components.footer')

        @yield('scripts')
    </body>

</html>
