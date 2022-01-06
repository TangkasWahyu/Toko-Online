<!DOCTYPE html>
<html lang="en">

<head>
    @include('frontend.layouts.head')
</head>

<body>
<header>
    @include('frontend.layouts.header')
</header>

    @yield('content')

<footer>
    @include('frontend.layouts.footer')
</footer>

@include('frontend.layouts.footer_scripts')
@yield('script')

</body>
</html>

