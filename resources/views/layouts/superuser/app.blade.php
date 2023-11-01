<!doctype html>
<html lang="en">
<head>

    @include('layouts.superuser.meta')

    @include('layouts.superuser.style')

</head>
<body>

@yield('modal')

<div id="page-container" class="{{ Auth::user()->hasRole('Superuser') ? 'sidebar-o' : '' }} enable-page-overlay side-scroll page-header-modern main-content-boxed @if(auth()->user()->is_darkmode) sidebar-dark page-header-dark dark-mode @endif">

    @if (Auth::user()->hasRole('Superuser'))
        @include('layouts.superuser.aside')

        @include('layouts.superuser.sidebar')
    @endif

    @include('layouts.superuser.navbar')

    <main id="main-container">
        <div class="content">

            @yield('content')

        </div>
    </main>
    @include('layouts.superuser.footer')
</div>

@include('layouts.superuser.script')

</body>
</html>
