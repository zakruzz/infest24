<meta name="theme-color" content="#6777ef"/>
<link rel="manifest" href="{{ asset('/manifest.json') }}">
<link rel="stylesheet" href="{{ asset('assets/superuser/app/js/plugins/magnific-popup/magnific-popup.css') }}">

<link rel="stylesheet" href="../css.css?family=Poppins:300,400,500,600,700,800&display=swap">
<link rel="stylesheet" id="css-main" href="{{asset('assets/superuser/app/css/codebase.min-5.0.css')}}">

<link rel="stylesheet" href="{{asset('assets/superuser/css/style.css')}}">

@livewireStyles

@yield('styles')
@stack('styles')

<style>
    .btn-float{
        position:fixed;
        width:60px;
        height:60px;
        bottom:40px;
        right:40px;
        background-color: #ff9218;
        color:#FFF;
        border-radius:50px;
        text-align:center;
        box-shadow: 2px 2px 3px #999;
    }

    .btn-float-inner{
        margin-top:22px;
    }

    .select2-container--default .select2-selection--single {
        background-color: #fff;
        border: 1px solid #d5d5d5;
        border-radius: 4px;
        height: 37px;
    }
</style>
