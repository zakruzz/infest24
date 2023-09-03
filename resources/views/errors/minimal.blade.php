@extends('layouts.main.app')
@section('content')
    <main id="main-container">
        <div class="hero bg-body-extra-light">
            <div class="hero-inner">
                <div class="content content-full">
                    <div class="py-4 text-center">
                        <div class="display-1 fw-bold text-danger">
                            <i class="far fa-times-circle opacity-50 me-1"></i> @yield('code')
                        </div>
                        <h1 class="fw-bold mt-5 mb-2">Oops.. You just found an error page..</h1>
                        <h2 class="fs-4 fw-medium text-muted mb-5">@yield('message')</h2>
                        <a class="btn btn-lg btn-alt-secondary" href="{{ route('home') }}">
                            <i class="fa fa-arrow-left opacity-50 me-1"></i> Kembali ke Beranda
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
