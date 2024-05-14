<div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-gradient card me-2 " style='background-color: #0008EB'>
    <div class="d-flex flex-column align-items-center align-items-lg-start px-3 pt-2 min-vh-100">
        @auth
            @switch(auth()->user()->role)
                @case('client')
                @break

                @case('driver')
                    <ul class="nav nav-pills flex-column 5 mb-sm-auto mb-0  align-items-center align-items-sm-start">
                        <a href={{ route('driver.deliveries') }} class="nav-link">
                            <span class="fs-5 d-none d-sm-inline">
                                <img class=" img-fluid "
                                    src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRnVqX139J07-6dpS6EjkVn8IAGUDFe9iAUDAKMBwK5KA&s' /></span>
                        </a>
                        <li class="mt-3 ms-4 btn bg-gradient" style='background-color: #000000'>
                            <a class="nav-link text-white" href={{ route('driver.deliverylist') }}>
                                Orders </a>
                        </li>
                        <li type="button" class=" mt-3 ms-4 btn bg-gradient" style='background-color: #000000'>
                            <a class="nav-link text-white " href={{ route('driver.deliveries') }}>
                                Deliveries
                            </a>
                        </li>
                        <li class="mt-3 ms-4 btn bg-gradient" style='background-color: #000000'>
                            <a class="nav-link text-white"href={{ route('driver.vehicles') }}>
                                Vehicles
                            </a>
                        </li>
                        <li class="mt-3 ms-4 btn bg-gradient " style='background-color: #000000'>
                            <a class="nav-link text-white " href={{ route('driver.reports') }}>
                                Reports
                            </a>
                        </li>
                    </ul>
                    <hr>
                    <div class="dropdown pb-4 mt-3 ms-4">
                        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                            id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" alt="hugenerd" width="30"
                                height="30" class="rounded-circle">
                            <span class="d-none d-sm-inline mx-1">{{ auth()->user()->Firstname }}</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                            <li><a class="dropdown-item" href={{ route('logout') }}>Sign out</a></li>
                        </ul>
                    </div>
                @break

                @default
            @endswitch
        @endauth

    </div>
</div>
