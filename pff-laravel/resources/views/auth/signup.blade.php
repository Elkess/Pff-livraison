@extends('layout.auth')
@section('form')
    <x-ClientNavbar />

    <section>
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                    <div class="card" style="border-radius: 1rem;">
                        <div class="row g-0">

                            <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                <div class="card-body p-4 p-lg-5 text-black">

                                    <form method="POST" action="/signup">
                                        @csrf
                                        <div class="d-flex align-items-center mb-3 pb-1">
                                            <span class="h1 fw-bold mb-0">SERL</span>
                                        </div>

                                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Create a new account
                                        </h5>
                                        <div class="form-outline form-floating mb-4">
                                            <input type="text" name="Firstname" class="form-control form-control-lg"
                                                placeholder="First Name" />
                                            <label class="form-label">First Name</label>
                                            @error('Firstname')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="form-outline form-floating mb-4">
                                            <input type="text" name="Lastname" class="form-control form-control-lg"
                                                placeholder="Last Name" />
                                            <label class="form-label">Last Name</label>
                                            @error('Lastname')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="form-outline mb-4 form-floating">
                                            <input type="tel" name="phonenumber" maxlength="10"
                                                class="form-control form-control-lg" placeholder="phone number" />
                                            <label class="form-label">Phone Number</label>
                                            @error('phonenumber')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="form-outline form-floating mb-4">
                                            <input type="email" name="email" class="form-control form-control-lg"
                                                placeholder="Email Address" />
                                            <label class="form-label">Email address</label>
                                            @error('email')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="form-outline form-floating mb-4">
                                            <input type="password" name="password" class="form-control form-control-lg"
                                                placeholder="Password" />
                                            <label class="form-label">Password</label>
                                            @error('password')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="pt-1 mb-4">
                                            <button class="btn btn-dark btn-lg btn-block" type="submit">Sign Up</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                            <div class="col-md-6 col-lg-5 d-none d-md-block">
                                <img src="https://i0.wp.com/thedeadpixelssociety.com/wp-content/uploads/2018/10/USPS-delivery-e1615859301418.jpg?fit=1000%2C1273&ssl=1"
                                    alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
