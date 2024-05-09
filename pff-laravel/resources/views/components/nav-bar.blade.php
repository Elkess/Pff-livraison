<div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
    <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
        <a href={{ route('driver.index') }} class="nav-link">
            <span class="fs-5 d-none d-sm-inline">Menu</span>
        </a>
        <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
            <li class="mt-4 row btn btn-primary">
                <a class="nav-link" href={{ route('driver.index') }}>
                    Dashboard
                </a>
            </li>
            <li class="mt-3">
                <a href={{ route('driver.deliveries') }} class="nav-link">
                    My Deliveries
                </a>
            </li>
            <li class="mt-3">
                <a class="nav-link" href={{ route('driver.deliverylist') }}>
                    Delivery List
                </a>
                </span>
            </li>
            <li class="mt-3">
                <a href={{ route('driver.vehicles') }} class="nav-link">
                    Vehicles
                </a>
            </li>

        </ul>
        <hr>
        <div class="dropdown pb-4">
            <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" alt="hugenerd" width="30"
                    height="30" class="rounded-circle">
                <span class="d-none d-sm-inline mx-1">{{ Auth::user()->Lastname }}</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                {{-- <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li> --}}
                <li><a class="dropdown-item" href={{ route('logout') }}>Sign out</a></li>
            </ul>
        </div>
    </div>
</div>
