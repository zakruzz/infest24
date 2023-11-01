<!DOCTYPE html>
<html lang="en">
@include('layouts.main.header')
 <!-- Main Content -->
 @yield('content')
 <!-- footer -->
 @include('layouts.main.footer')

 <script src="{{ asset('public/assets/main/app/js/jquery.min.js') }}"></script>
 <script src="{{ asset('public/assets/main/app/js/swiper-bundle.min.js') }}"></script>
 <script src="{{ asset('public/assets/main/app/js/swiper.js') }}"></script>
 <script src="{{ asset('public/assets/main/app/js/app.js') }}"></script>
 <script src="{{ asset('public/assets/main/app/js/jquery.easing.js') }}"></script>
 <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="{{ asset('public/assets/main/app/js/parallax.js') }}"></script>
  <script src="{{ asset('public/assets/main/app/js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ asset('public/assets/main/app/js/bootstrap.min.js') }}"></script>

  <script src="{{ asset('public/assets/main/app/js/count-down.js') }}"></script>
  <script src="{{ asset('public/assets/main/app/js/countto.js') }}"></script>
  <script src="{{ asset('public/assets/main/app/js/chart.js') }}"></script>
  <script src="{{ asset('public/assets/main/app/js/plugin.js') }}"></script>

</html>