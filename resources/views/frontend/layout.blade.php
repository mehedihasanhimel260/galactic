<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

@include('frontend.inc.head')

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="{{ asset('frontend') }}/http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <div class="site-preloader">
        <div class="spinner"></div>
    </div>
    @include('frontend.inc.header')

    @yield('content')
    @include('frontend.inc.footer')
    <div id="scrollup">
        <button id="scroll-top" class="scroll-to-top hover-target"><i class="las la-arrow-up"></i></button>
    </div>

    @include('frontend.inc.script')
</body>


</html>
