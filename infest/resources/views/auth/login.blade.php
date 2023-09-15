@extends('layouts.superuser.app-blank')
@section('title', 'Admin Panel')
@section('content')
    <div id="page-container" class="main-content-boxed">
        <main id="main-container">
            <div class="bg-body-dark">
                <div class="row mx-0 justify-content-center">
                    <div class="hero-static col-lg-6 col-xl-4">
                        <div class="content content-full overflow-hidden">
                            <div class="py-4 text-center">
                                <a class="link-fx fw-bold" href="{{ route('home') }}">
                                    <i class="fa fa-house-user"></i>
                                    <span class="fs-4 text-body-color">admin</span><span class="fs-4">panel</span>
                                </a>
                                <h1 class="h3 fw-bold mt-4 mb-2">Welcome to Your Dashboard</h1>
                                <h2 class="h5 fw-medium text-muted mb-0">It’s a great day today!</h2>
                            </div>
                            <form class="js-validation-signin" action="{{ route('login') }}" method="POST">
                                @csrf
                                <div class="block block-themed block-rounded block-fx-shadow">
                                    <div class="block-header bg-gd-dusk">
                                        <h3 class="block-title">Please Sign In</h3>
                                    </div>
                                    <div class="block-content">
                                        <div class="form-floating mb-4">
                                            <input type="text" class="form-control @error('email') is-invalid @enderror" id="login-email"
                                                   name="email" value="{{old('email')}}" placeholder="andrew@mail.com" required>
                                            <label class="form-label" for="login-email">Email</label>
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-floating mb-4">
                                            <input type="password" class="form-control @error('password') is-invalid @enderror" id="login-password"
                                                   name="password" placeholder="********" required>
                                            <label class="form-label" for="login-password">Password</label>
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6 d-sm-flex align-items-center push">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="login-remember-me" name="remember">
                                                    <label class="form-check-label" for="login-remember-me">Ingat Saya</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 text-sm-end push">
                                                <button type="submit" class="btn btn-lg btn-alt-primary fw-medium">
                                                    Masuk
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="block-content block-content-full bg-body-light text-center d-flex justify-content-between">
                                        <span class="text-muted">Copyright © <span data-toggle="year-copy"></span></span>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
@endsection
