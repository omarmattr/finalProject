@extends('layouts.app')

@section('content')
    <section class="h-100-vh mb-8">
        <div class="page-header align-items-start section-height-50 pt-5 pb-11 m-3 border-radius-lg"
             style="background-image: url({{asset('assets/img/curved-images/curved14.jpg')}});">
            <span class="mask bg-gradient-dark opacity-6"></span>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5 text-center mx-auto">
                        <h1 class="text-white mb-2 mt-5">Welcome Back!</h1>
                        <p class="text-lead text-white">
                            Use Email & Password to login
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row mt-lg-n10 mt-md-n11 mt-n10">
                <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
                    <div class="card z-index-0">
                        <div class="card-header text-center pt-4">
                            <h5>Login with</h5>
                        </div>
                        <div class="card-body">
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="mb-3">
                            <div class=" border  rounded-3 ">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class=" border  rounded-3 ">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="text-center">
                                <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        <div class="mb-3">
                                @if (Route::has('password.request'))
                                    <a  href="{{ route('password.request') }}">
                                   Forgot Your Password?
                                    </a>
                                @endif
                        </div>
                                <p class="text-sm mt-3 mb-0">Do not have account?<a
                                        href="{{ route('register') }}"
                                        class="text-dark font-weight-bolder">Sign In</a>
                                </p>

                    </form>
                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
