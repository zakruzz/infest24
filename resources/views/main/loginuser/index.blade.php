@extends('layouts.main.app')
@section('style')
@endsection
@section('content')
<div id="wrapper">
    <section class="page-title">
        <div class="overlay"></div> 
    </section>
</div>
<section class="tf-section project-info">
    <div class="container"> 
        <div class="row">
            <div class="col-md-12">
                <form action="#">
                    <div class="project-info-form form-login">
                        <h6 class="title">Login</h6>
                        <h6 class="title show-mobie"><a href="/registeruser">Register</a></h6>
                        <h6 class="title link"><a href="/registeruser">Register</a></h6>
                        <p>Enter your credentials to access your account</p>
                        <div class="form-inner"> 
                            <fieldset>
                                <label>
                                    Email address *
                                </label>
                                <input type="email" placeholder="Your email" required>
                            </fieldset>
                            <fieldset>
                                <label>
                                    Password *
                                </label>
                                <input type="password" placeholder="Your password" required>
                            </fieldset> 
                        </div>
                        <a href="/forgetpassword" class="fogot-pass">Fogot password?</a>
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
