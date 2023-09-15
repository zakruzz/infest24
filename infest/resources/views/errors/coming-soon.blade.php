@extends('layouts.app-blank')
@section('content')
    <div class="hero bg-body-extra-light">
        <div class="hero-inner">
            <div class="content content-full">
                <div class="py-4 text-center">
                    <i class="si si-chemistry text-primary display-3"></i>
                    <h1 class="h2 fw-bold mt-4 mb-2">This page is coming soon!</h1>
                    <h2 class="h5 fw-medium text-muted mb-5">We’re currently working it..</h2>
                    <a class="btn btn-primary" href="{{route('admin.dashboard')}}">
                        <i class="fa fa-arrow-left opacity-50 me-1"></i> Go Back to Dashboard
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
