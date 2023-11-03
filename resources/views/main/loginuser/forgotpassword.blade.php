@extends('layouts.main.app')
@section('style')
@endsection
@section('content')
<section class="page-title">
    <div class="overlay"></div> 
</section>

<section class="tf-section project-info">
<div class="container"> 
    <div class="row">
        <div class="col-md-12">
            <form action="#">
                <div class="project-info-form forget-form">
                    <h4 class="title">Forget Password</h4> 
                    <p>Masukkan emailmu, untuk nanti dikirimkan link untuk reset password.</p>
                    <div class="form-inner"> 
                        <fieldset>
                            <label >
                                Email
                            </label>
                            <input type="email" placeholder="Masukkan Emailmu yang Sebelumnya Telah Terdaftar." required>
                        </fieldset> 
                    </div>
                    <div class="bottom">
                        Nevermind. 
                        <a href="/loginuser">Sign in</a>
                    </div>
                </div> 

                <div class="wrap-btn">
                    <button type="submit" class="tf-button style1">
                        Reset password
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
</section>
@endsection