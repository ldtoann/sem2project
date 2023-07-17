<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('lib/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('lib/fontawesome-free-6.3.0-web/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('lib/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="shortcut icon" href="public/image/logo_page.png" type="image/x-icon">
    <title>@yield('title')</title>
</head>

<body ng-app="myApp" data-aos-easing="ease" data-aos-duration="400" data-aos-delay="0">
    <header>
        <div id="headerusers">
            <p> / </p>
            <a href="http://localhost/smatestoress/_user.php"> <i class="fa-solid fa-right-to-bracket"></i> </a>
            <p> / </p>
            <a href="http://localhost/smatestoress/_user.php"> <i class="fa-solid fa-user-plus"></i> </a>
        </div>
        <div id="header" class="shadow-lg">
            <div class="row">
                <div id="col_start" class="col-2">
                    <a href="http://localhost/smatestoress/_home1.php"><img src="./home_Sneaker_files/logo_page.png"></a>
                </div>
                <div id="col_between" class="col-6">
                    <a id="menu1" href="http://localhost/smatestoress/_home1.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">PRODUCTs <i class="fa fa-arrow-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a id="menu2" class="dropdown-item" href="http://localhost/smatestoress/_category.php?category_id=1">All BRAND</a></li>
                        <li><a id="menu2" class="dropdown-item" href="http://localhost/smatestoress/_category.php?category_id=2">NIKE</a></li>
                        <li><a id="menu2" class="dropdown-item" href="http://localhost/smatestoress/_category.php?category_id=3">ADIDAS</a></li>
                        <li><a id="menu2" class="dropdown-item" href="http://localhost/smatestoress/_category.php?category_id=4">VANS</a></li>
                        <li><a id="menu2" class="dropdown-item" href="http://localhost/smatestoress/_category.php?category_id=5">CONVERSE</a></li>
                        <li><a id="menu2" class="dropdown-item" href="http://localhost/smatestoress/_category.php?category_id=6">MLB</a></li>
                        <li><a id="menu2" class="dropdown-item" href="http://localhost/smatestoress/_category.php?category_id=7">NEW BALANCE</a></li>
                        <li><a id="menu2" class="dropdown-item" href="http://localhost/smatestoress/_category.php?category_id=8">GUCCI</a></li>
                    </ul>
                    <a id="menu1" href="http://localhost/smatestoress/_home1.php#">ORDER LOOKING</a>
                    <a id="menu1" href="http://localhost/smatestoress/_gallery.php">SMATE's BOOK</a>
                    <a id="menu1" href="http://localhost/smatestoress/_home1.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">CONTACTs <i class="fa fa-arrow-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a id="menu2" class="dropdown-item" href="http://localhost/smatestoress/_home1.php#">EMAIL</a></li>
                        <li><a id="menu2" class="dropdown-item" href="https://www.facebook.com/toan.lee.7796420">FACEBOOK</a></li>
                        <li><a id="menu2" class="dropdown-item" href="https://www.instagram.com/_siwel13_/?fbclid=IwAR3cU12MMjgIpINGyY_f9N-gHfuRL5iQxOYGytHkejhieWfHhUZijGN4X1w">INSTAGRAM</a></li>
                    </ul>
                    <a id="menu1" href="http://localhost/smatestoress/_support.php">SUPPORT's</a>
                </div>
                <div id="col_end" class="col-4">
                    <form id="search" action="http://localhost/smatestoress/_search.php" method="get">
                        <input class="form-control" type="text" placeholder="search" name="key">
                        <button class="btn"><i class="fa fa-search"></i></button>
                    </form>
                    <a id="iconcart" href="http://localhost/smatestoress/_cart.php" type="button" class=" position-relative">
                        <i class="fa-solid fa-cart-shopping"></i>
                    </a>
                </div>
            </div>
        </div>
    </header>
    @yield('main')
    <footer>
        <div id="footer">
            <div id="aboutfooter" class="container">
                <div class="row">
                    <div id="aboutfooter_col_left" class="col-9">
                        <div class="row">
                            <div id="aboutfooter_start" class="col-3">
                                <a id="title_footer" href="http://localhost/smatestoress/_home1.php">FIND A STORE</a><br>
                                <a id="title_footer" href="http://localhost/smatestoress/_home1.php">BECOME A MEMBER</a><br>
                                <a id="title_footer" href="http://localhost/smatestoress/_home1.php">SIGN UP FOR EMAIL</a><br>
                                <a id="title_footer" href="http://localhost/smatestoress/_home1.php">SEND US FEEDBACK</a>
                            </div>
                            <div id="aboutfooter_between" class="col-3">
                                <a id="title_footer" href="http://localhost/smatestoress/_home1.php">GET HELP</a><br>
                                <a id="info_footer" href="http://localhost/smatestoress/_home1.php">Order Status</a><br>
                                <a id="info_footer" href="http://localhost/smatestoress/_home1.php">Delivery</a><br>
                                <a id="info_footer" href="http://localhost/smatestoress/_home1.php">Returns</a><br>
                                <a id="info_footer" href="http://localhost/smatestoress/_home1.php">Payment Options</a><br>
                                <a id="info_footer" href="http://localhost/smatestoress/_home1.php">Contact Us</a>
                            </div>
                            <div id="aboutfooter_end" class="col-3">
                                <!-- <a id="title_footer" href="">ABOUT SMATE</a><br>
                            <a id="info_footer" href="">News</a><br>
                            <a id="info_footer" href="">Careers</a><br>
                            <a id="info_footer" href="">Investors</a><br>
                            <a id="info_footer" href="">Sustainability</a> -->
                            </div>
                            <div class="col-3"></div>
                        </div>
                    </div>
                    <div id="aboutfooter_col_right" class="col-3">
                        <div id="allmxh">
                            <div id="mxh" class="text-center">
                                <a href="http://localhost/smatestoress/_home1.php"><i class="fa-brands fa-facebook-f"></i></a>
                            </div>
                            <div id="mxh" class="text-center">
                                <a href="http://localhost/smatestoress/_home1.php"><i class="fa-brands fa-instagram"></i></a>
                            </div>
                            <div id="mxh" class="text-center">
                                <a href="http://localhost/smatestoress/_home1.php"><i class="fa-brands fa-twitch"></i></a>
                            </div>
                            <div id="mxh" class="text-center">
                                <a href="http://localhost/smatestoress/_home1.php"><i class="fa-brands fa-twitter"></i></a>
                            </div>
                            <div id="mxh" class="text-center">
                                <a href="http://localhost/smatestoress/_home1.php#"><i class="fa fa-arrow-up"></i></a>
                            </div>
                        </div>
                        <div id="imgfooter">
                            <img src="./home_Sneaker_files/logo_page.png">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div id="content_footer_left" class="col-6">
                        <a href="http://localhost/smatestoress/_home1.php"><i class="fa fa-location-dot"></i>VietNam</a>
                        <a href="http://localhost/smatestoress/_home1.php">CopyRight © 2023 SMATE, Inc. All Rights Reserved</a>
                    </div>
                    <div id="content_footer_right" class="col-6">
                        <a href="http://localhost/smatestoress/_home1.php">Guides</a>
                        <a href="http://localhost/smatestoress/_home1.php">Terms of Sale</a>
                        <a href="http://localhost/smatestoress/_home1.php">Terms of Use</a>
                        <a href="http://localhost/smatestoress/_home1.php">Nike Privacy Policy</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script>
        AOS.init();
    </script>
</body>

</html>