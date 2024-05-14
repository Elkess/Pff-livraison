@extends('layout.auth')
@section('form')
    {{-- <div class="container mt-5">
        {{ $errors }}
        <h2 class="text-center">Sign in</h2>
        <form class="card" method="POST" action="/signup">
            @csrf
            <div class="card-body">
                FIRST NAME :<input class="form-control" name="firstname" type="text" />
                @error('firstname')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                LAST NAME :<input class="form-control" name="lastname" type="text" />
                @error('lastname')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
              
                PHONE NUMBER : <input class="form-control" name="phone" type="number" required />
                @error('phone')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                EMAIL : <input class="form-control" name="email" type="text" required />
                @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                PASSWORD : <input class="form-control " name="password" type="password" type="text" required />
                @error('password')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
            </div>
            <button class="btn btn-primary " type="submit">Sign in</button>
        </form>
    </div> --}}
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
                                            <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                                            <span class="h1 fw-bold mb-0">Logo</span>
                                        </div>

                                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Create a new account
                                        </h5>
                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="form2Example27">First Name</label>
                                            <input type="text" name="firstname" id="form2Example27"
                                                class="form-control form-control-lg" />
                                            @error('firstname')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="form2Example27">Last Name</label>
                                            <input type="text" name="lastname" id="form2Example27"
                                                class="form-control form-control-lg" />
                                            @error('lastname')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="form2Example17">Phone Number</label>
                                            <input type="tel" name="phone" maxlength="10" id="form2Example17"
                                                class="form-control form-control-lg" />
                                            @error('phone')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="form2Example17">Email address</label>
                                            <input type="email" name="email" id="form2Example17"
                                                class="form-control form-control-lg" />
                                            @error('email')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="form2Example27">Password</label>
                                            <input type="password" name="password" id="form2Example27"
                                                class="form-control form-control-lg" />
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
                                <img src="https://i0.wp.com/thedeadpixelssociety.com/wp-content/uploads/2018/10/USPS-delivery-e1615859301418.jpg?fit=1000%2C1273&ssl=1" alt="login form"
                                    class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
