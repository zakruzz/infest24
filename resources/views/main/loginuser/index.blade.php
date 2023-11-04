@extends('layouts.main.app')
@section('style')
@endsection
@section('content')
<section class="tf-section project-info" style="padding-top: 10%">
    <div class="container"> 
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="project-info-form form-login">
                        <h6 class="title">Login</h6>
                        <h6 class="title show-mobie"><a href="/register">Register</a></h6>
                        <h6 class="title link"><a href="/register">Register</a></h6>
                        <p>Login dengan Akun Anda yang Telah Terdaftar Sebelumnya</p>
                        <div class="form-inner"> 
                            <fieldset>
                                <label>
                                    Email<span class="text-danger">*</span>
                                </label>
                                <input type="text" class="@error('email') is-invalid @enderror" id="login-email"
                                name="email" value="{{old('email')}}" placeholder="Masukkan emailmu..." required>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </fieldset>
                            <fieldset>
                                <label>
                                    Password<span class="text-danger">*</span>
                                </label>
                                <input type="password" class="@error('password') is-invalid @enderror" id="login-password"
                                name="password" placeholder="Masukkan passwordmu..." required>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </fieldset> 
                        </div>
                        <a href="/forgetpassword" class="fogot-pass">Lupa Password</a>
                    </div> 

                    
                    <div class="wrap-btn">
                        <button type="submit" class="tf-button style2">
                            Login
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection