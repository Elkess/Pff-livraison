<div>
    <ul>@guest
        
        <li><a href="{{ route('auth.login') }}">login</a></li>
        <li><a href="{{ route('auth.signup') }}">Signup</a></li>
        @endguest
        @auth
            <li><a href="{{ route('driver.index') }}">Dashboard</a></li>
            <li><a href="{{ route('driver.deliverylist') }}">Delivery List</a></li>
            <li><a href="{{ route('driver.deliveries') }}">My Deliveries</a></li>
            <li><a href="{{ route('logout') }}">Logout</a></li>
        @endauth

    </ul>
</div>
