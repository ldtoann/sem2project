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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="shortcut icon" id="logotagg" href="{{ url('image/logo_page.png') }}" type="image/x-icon">
    <style>
        #content {
            height: 1000px;
        }

        #back-to-top {
            font-size: 24px;
            position: fixed;
            bottom: 35px;
            right: 27px;
            z-index: 9999;
            width: 50px;
            height: 50px;
            text-align: center;
            line-height: 45px;
            background: red;
            color: #fff;
            cursor: pointer;
            border-radius: 50%;
            border: 2px solid white;
            transition: 0.5s all;
            opacity: 0;
        }

        #back-to-top:hover {
            background: rgb(145, 7, 7);
            border: 2px solid black;
        }

        #back-to-top.show {
            opacity: 1;
        }
    </style>
</head>

<body>
    @include('inc.header')
    @yield('content')

    <script type="text/javascript" src="https://web.cmbliss.com/webtools/hotline/js/hotline.js"></script>
    <script type="text/javascript">
        $("body").hotline({
            phone: "0899084716",
            p_bottom: true,
            bottom: 0,
            p_left: true,
            left: 0,
            bg_color: "#da4747",
            abg_color: "#b21919",
            show_bar: true,
            position: "fixed",
        });
    </script>
    <div id="back-to-top" title="Back to Top"><i class="fa-solid fa-arrow-up"></i></div>
    <script>
        if ($('#back-to-top').length) {
            var scrollTrigger = 500, //khoảng cách đến khi bắt đầu hiện nút (px)
                backToTop = function() {
                    var scrollTop = $(window).scrollTop(); //lấy khoảng cách scroll hiện tại tính lên Top
                    if (scrollTop > scrollTrigger) {
                        $('#back-to-top').addClass('show');
                    } else {
                        $('#back-to-top').removeClass('show');
                    }
                };
            backToTop();
            $(window).on('scroll', function() {
                backToTop(); //gọi function 'backToTop()' mỗi khi người dùng cuộn trang
            });
            $('#back-to-top').on('click', function(e) {
                e.preventDefault();
                $('html,body').animate({
                    scrollTop: 0
                }, 500); //thời gian kéo lên top tính bằng mili giây 
            });
        }
    </script>
    @include('inc.footer')
</body>
<script>
    AOS.init();
</script>

</html>