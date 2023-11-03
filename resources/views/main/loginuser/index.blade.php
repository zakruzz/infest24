@extends('layouts.main.app')
@section('style')
@endsection
@section('content')
<section class="tf-section project-info" style="padding-top: 10%">
    <div class="container"> 
        <div class="row">
            <div class="col-md-12">
                <form action="#">
                    <div class="project-info-form form-login">
                        <h6 class="title">Login</h6>
                        <h6 class="title show-mobie"><a href="/registeruser">Register</a></h6>
                        <h6 class="title link"><a href="/registeruser">Register</a></h6>
                        <p>Login dengan Akun Anda yang Telah Terdaftar Sebelumnya</p>
                        <div class="form-inner"> 
                            <fieldset>
                                <label>
                                    Email *
                                </label>
                                <input type="email" placeholder="Masukkan Emailmu..." required>
                            </fieldset>
                            <fieldset>
                                <label>
                                    Password *
                                </label>
                                <input type="password" placeholder="Masukkan Passwordmu..." required>
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
