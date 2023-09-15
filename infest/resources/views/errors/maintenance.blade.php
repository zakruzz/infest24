@extends('layouts.superuser.app-blank')
@section('title', 'Under Maintenance')
@section('content')
    <div class="hero bg-body-extra-light">
        <div class="hero-inner">
            <div class="content content-full">
                <div class="py-4 text-center">
                    <i class="si si-settings text-warning display-3"></i>
                    <h1 class="h2 fw-bold mt-4 mb-2">This site is under maintenance!</h1>
                    <h2 class="h5 fw-medium text-muted mb-5">We’re currently working it..</h2>
                    <a class="btn btn-warning" href="{{route('home')}}">
                        <i class="fa fa-arrow-left opacity-50 me-1"></i> Go Back to Home
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
