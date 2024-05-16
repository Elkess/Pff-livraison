<div class="navbar-nav">
       <nav class="col-md-3 col-lg-2 d-md-block bg-light">
           <div class="sidebar-sticky pt-3">
               <ul class="nav d-flex flex-row ">
                   <li class="nav-item">
                       <a class="nav-link" href='/'>Navbar</a>
                   </li>
                   @guest
                       <li class="nav-item">
                        <a class="nav-link" href="{{ route('auth.login') }}">login</a>
                    </li>
                       <li class="nav-item">
                        <a class="nav-link" href="{{ route('auth.signup') }}">Signup</a>
                    </li>
                   @endguest
                   @auth
                       @switch(auth()->user()->role)
                           @case('client')
                               {{-- <li class="nav-item">
                                   <a class="nav-link" href="{{ route('client.index') }}">Dashboard</a>
                               </li>
                               <li class="nav-item">
                                   <a class="nav-link" href="{{ route('client.index') }}">Reclamations</a>
                               </li>
                               <li class="nav-item">
                                   <a class="nav-link" href="{{ route('client.orders') }}"></a>
                               </li> --}}
                           @break

                           @case('driver')
                               <li class="nav-item">
                                   <a class="nav-link" href="{{ route('driver.deliveries') }}">Dashboard</a>
                               </li>
                               <li class="nav-item">
                                   <a class="nav-link" href="{{ route('driver.orders') }}">Delivery List</a>
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
   </div>
