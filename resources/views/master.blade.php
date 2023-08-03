<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="{{ url('lib/angular.min.js') }}"></script>
    <script src="{{ url('lib/angular-route.min.js') }}"></script>
    <script src="{{ url('lib/jquery.min.js') }}"></script>
    <script src="{{ url('lib/bootstrap.bundle.min.js') }}"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('lib/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('lib/fontawesome-free-6.3.0-web/css/all.css') }}">
    <link rel="stylesheet" href="{{ url('lib/all.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('css/home.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('css/productdetail.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('css/book.css') }}">
    <!-- <link rel="stylesheet" type="text/css" href="{{ url('css/login.css') }}"> -->
    <link rel="stylesheet" type="text/css" href="{{ url('css/cart.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('css/category.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('css/pay.css') }}">
    <link rel="shortcut icon" id="logotagg" href="{{ url('image/logo_page.png') }}" type="image/x-icon">

</head>

<body>
    @include('inc.header')
    @yield('content')
    @include('inc.footer')
</body>
<script>
    AOS.init();
</script>

</html>