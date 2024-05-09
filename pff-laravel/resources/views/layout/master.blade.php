<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('title') | Master </title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>

    <body>
        {{-- <div>
            <nav class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="sidebar-sticky pt-3">
                    <ul class="nav d-flex flex-column flex-wrap ">
                        <li class="nav-item">

                            <a class="nav-link" href='/'>Navbar</a>
                        </li>
                        @guest
                            <li class="nav-item"><a class="nav-link" href="{{ route('auth.login') }}">login</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('auth.signup') }}">Signup</a></li>
                        @endguest
                        @auth
                            @switch(auth()->user()->role)
                                @case('client')
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('client.index') }}">Dashboard</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('client.orders') }}">My Orders</a>
                                    </li>
                                @break

                                @case('driver')
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('driver.index') }}">Dashboard</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('driver.deliverylist') }}">Delivery List</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('driver.deliveries') }}">My Deliveries</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('driver.vehicles') }}">My Vehicles</a>
                                    </li>
                                @break

                                @default
                            @endswitch
                            <li class="nav-item ">
                                <a class="nav-link" href="{{ route('logout') }}">Logout</a>
                            </li>
                        @endauth
                    </ul>
                </div>
            </nav>
        </div> --}}
        <div class="container-fluid sticky-top ">
            <div class="row flex-nowrap">
                <x-navbar />
                <div class="col">
                    @yield('content')
                </div>
            </div>
            <x-footer />
        </div>
    </body>

</html>
