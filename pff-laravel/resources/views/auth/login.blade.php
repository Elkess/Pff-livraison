@extends('layout.auth')
@section('form')

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    {{-- 
<div class="container mt-5">
    <form method="POST" class="card" action="/login">
            @csrf
            <div class="card-body m-5 ">
                 
                <div class="mb-3">
                    <label class="form-label">Email address</label>
                    <input type="email" placeholder="Email" name="email"class="form-control" >
               
                </div>
                <span>
                </span>
                <div class="mb-3">
                    <label   class="form-label">Password </label>
                    <input type="password" class="form-control"name="password" placeholder="Password">
                    @error('password')
                        <span class=" text-danger ">{{ $message }}</span>
                    @enderror
                </div>
                 <div class="mb-3 form-check">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </form>
    </div>
@endsection --}}
    <section>
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                    <div class="card" style="border-radius: 1rem;">
                        <div class="row g-0">
                            <div class="col-md-6 col-lg-5 d-none d-md-block">
                                <img src="https://locofreight.net/wp-content/uploads/2017/08/inner_home_06_02-768x1152.jpg"
                                    alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                            </div>
                            <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                <div class="card-body p-4 p-lg-5 text-black">
                                    <form method="POST" action="/login">
                                        @csrf
                                        <div class="d-flex align-items-center mb-3 pb-1">
                                            <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                                            <span class="h1 fw-bold mb-0">Logo</span>
                                        </div>
                                        
                                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account
                                        </h5>
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
                                            <button class="btn btn-dark btn-lg btn-block" type="submit">Login</button>
                                        </div>
                                        <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a
                                                href={{ route('auth.signup') }} style="color: #393f81;">Register here</a>
                                        </p>
                                        <a href="" class="small text-muted">Terms of use.</a>
                                        <a href="#!" class="small text-muted">Privacy policy</a>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
