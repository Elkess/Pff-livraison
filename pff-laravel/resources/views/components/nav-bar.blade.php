<div class="container-fluid">
    <nav class="navbar navbar-expand-lg bg-primary bg-gradient ">
        <div class="container">
            <a class="navbar-brand" href='/'>Navbar</a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-5">
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
                        <li class="nav-item pushme">
                            <a class="nav-link" href="{{ route('logout') }}">Logout</a>
                        </li>

                    @endauth
                </ul>
            </div>
        </div>
    </nav>
</div>
