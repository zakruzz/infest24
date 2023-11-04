<!doctype html>
<html lang="en">
<head>

    @include('layouts.income.meta')

    @include('layouts.income.style')

</head>
<body>

@yield('modal')

<div id="page-container" class="enable-page-overlay side-scroll page-header-modern main-content-boxed @if(auth()->user()->is_darkmode) sidebar-dark page-header-dark dark-mode @endif">

    @include('layouts.income.navbar')

    <main id="main-container">
        <div class="content">

            @yield('content')

        </div>
    </main>
    @include('layouts.income.footer')
</div>

@include('layouts.income.script')

</body>
</html>
