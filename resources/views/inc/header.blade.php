<header>
    <div id="headerusers">
        <a href="_user.php"> <i class="fa-solid fa-right-to-bracket"></i> </a>
        <p> / </p>
        <a href="_user.php"> <i class="fa-solid fa-user-plus"></i> </a>
    </div>
    <div id="header" class="shadow-lg">
        <div class="row">
            <div id="col_start" class="col-2">
                <a href="_home1.php"><img src="{{ url('image/logo_page.png') }}"></a>
            </div>
            <div id="col_between" class="col-6">
                <a id="menu1" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">PRODUCTs <i class="fa fa-arrow-down"></i></a>
                <ul class="dropdown-menu">
                    <li><a id="menu2" class="dropdown-item" href="#">nike</a></li>
                    <li><a id="menu2" class="dropdown-item" href="#">adidas</a></li>
                    <li><a id="menu2" class="dropdown-item" href="#">vans</a></li>
                    <li><a id="menu2" class="dropdown-item" href="#">converse</a></li>
                </ul>
                <a id="menu1" href="#">ORDER LOOKING</a>
                <a id="menu1" href="_gallery.php">SMATE BOOK</a>
                <a id="menu1" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">CONTACTs <i class="fa fa-arrow-down"></i></a>
                <ul class="dropdown-menu">
                    <li><a id="menu2" class="dropdown-item" href="#">EMAIL</a></li>
                    <li><a id="menu2" class="dropdown-item" href="https://www.facebook.com/toan.lee.7796420">FACEBOOK</a></li>
                    <li><a id="menu2" class="dropdown-item" href="https://www.instagram.com/_siwel13_/?fbclid=IwAR3cU12MMjgIpINGyY_f9N-gHfuRL5iQxOYGytHkejhieWfHhUZijGN4X1w">INSTAGRAM</a></li>
                </ul>
                <a id="menu1" href="_support.php">SUPPORT</a>
            </div>
            <div id="col_end" class="col-4">
                <form id="search" action="_search.php" method="get">
                    <input class="form-control" type="text" placeholder="search" name="key" />
                    <button class="btn"><i class="fa fa-search"></i></button>
                </form>
                <a id="iconcart" href="_cart.php" type="button" class=" position-relative">
                    <i class="fa-solid fa-cart-shopping"></i>
                </a>
            </div>
        </div>
    </div>
</header>