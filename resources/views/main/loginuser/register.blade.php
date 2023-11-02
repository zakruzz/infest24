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
                <div class="project-info-form form-login style2">
                    <h6 class="title">Register</h6>
                    <h6 class="title show-mobie"><a href="/loginuser">Login</a></h6>
                    <h6 class="title link"><a href="/loginuser">Login</a></h6>
                    <p>Selamat Datang Di Infest 2024</p>
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
                        <fieldset class="mb19">
                            <label>
                                Confirm password*
                            </label>
                            <input type="password" placeholder="Confirm password" required>
                        </fieldset> 
                        {{-- <fieldset class="checkbox"> 
                            <input type="checkbox" id="checkbox" name="checkbox" >
                            <label for="checkbox" class="icon"></label>
                            <label for="checkbox">
                                I accept the Term of Conditions and Privacy Policy
                            </label>
                        </fieldset> --}}
                    </div>
                </div> 

                <div class="wrap-btn">
                    <button type="submit" class="tf-button style2">
                        Register
                    </button>
                </div>
            </form>
        </div>
    </div>
    </div>
</section>
@endsection