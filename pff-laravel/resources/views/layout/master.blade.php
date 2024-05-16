<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('title') | Master </title>
          <link rel="icon" type="image/x-icon" href={{ asset('favico.png') }}>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>

    <body class="bg-body-tertiary ">
        @guest
            <x-navbar />
            @yield('content')
        @endguest
        @auth
            <div class="container-fluid ">
                <div class="row flex-nowrap">
                    <x-navtab />
                    <div class="col">
                        <div class="mt-3">
                            @yield('content')
                        </div>
                    </div>
                </div>
            @endauth
        </div>
        <x-footer />
        <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    </body>

</html>
