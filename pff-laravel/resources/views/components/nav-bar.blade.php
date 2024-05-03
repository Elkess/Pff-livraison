<div class="container-fluid">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        @guest
        
        <li class="nav-item"><a href="{{ route('auth.login') }}">login</a></li>
        <li class="nav-item"><a href="{{ route('auth.signup') }}">Signup</a></li>
        @endguest
        @auth
            <li class="nav-item"><a href="{{ route('driver.index') }}">Dashboard</a></li>
            <li class="nav-item"><a href="{{ route('driver.deliverylist') }}">Delivery List</a></li>
            <li class="nav-item"><a href="{{ route('driver.deliveries') }}">My Deliveries</a></li>
            <li class="nav-item"><a href="{{ route('driver.vehicles') }}">My Vehicles</a></li>
            <li class="nav-item"><a href="{{ route('logout') }}">Logout</a></li>
        @endauth

    </ul>
</div>
