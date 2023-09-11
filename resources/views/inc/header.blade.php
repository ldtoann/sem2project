<header>
    <div id="headerusers">
        <nav class="navbar navbar-expand">
            <div class="collapse navbar-collapse" id="navbarNavLightDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <button id="buttonlanguage" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            Language
                        </button>
                        <ul id="chooselanguage" class="dropdown-menu dropdown-menu-dark">
                            <li><a class="dropdown-item" href="{{ route('language', 'en') }}">
                                    <p>English</p>
                                </a></li>
                            <li><a class="dropdown-item" href="{{ route('language', 'vi') }}">
                                    <p>Vietnamese</p>
                                </a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        <p> / </p>
        @if (auth()->check())
        <p>&nbsp;&nbsp;{{ Auth::user()->name }}&nbsp;&nbsp;</p>
        @endif
        <p> / </p>
        <a href=" {{ route('login') }}"> <i class="fa-solid fa-user"></i> </a>
        <p> / </p>
        <form action="{{ route('logout') }}" method="post">
            @csrf
            <a id="logoutnut" :href="route('logout')" onclick="event.preventDefault();
                    this.closest('form').submit();">
                <i class="fa-solid fa-right-from-bracket"></i>
            </a>
        </form>
    </div>
    <div id="header" class="shadow-lg">
        <div class="row">
            <div id="col_start" class="col-2">
                <a href="{{ route('home.index') }}"><img src="{{ url('image/logo_page.png') }}"></a>
            </div>
            <div id="col_between" class="col-6">
                <a id="menu1" href="{{ route('products') }}">{{ @trans('font.home.index.product' )}}</a>
                <a id="menu1" href="#">{{trans('font.header.index.order')}}</a>
                <a id="menu1" href="{{ route('gallery') }}">{{trans('font.header.index.smatebook')}}</a>
                <a id="menu1" href="{{ route('support') }}">{{trans('font.header.index.support1')}}</a>
                <a id="menu1" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">{{trans('font.header.index.contact')}} <i class="fa fa-arrow-down"></i></a>
                <ul class="dropdown-menu">
                    <li><a id="menu2" class="dropdown-item" href="#">EMAIL</a></li>
                    <li><a id="menu2" class="dropdown-item" href="https://www.facebook.com/toan.lee.7796420">FACEBOOK</a></li>
                    <li><a id="menu2" class="dropdown-item" href="https://www.instagram.com/_siwel13_/?fbclid=IwAR3cU12MMjgIpINGyY_f9N-gHfuRL5iQxOYGytHkejhieWfHhUZijGN4X1w">INSTAGRAM</a></li>
                </ul>
            </div>
            <div id="col_end" class="col-4">
                <form id="search" action="{{ route('search.show') }}" method="get">
                    <input class="form-control" type="text" placeholder="search" name="key" />
                    <button class="btn"><i class="fa fa-search"></i></button>
                </form>
                <a id="iconcart" href="{{ route('cart.index') }}" type="button" class=" position-relative">
                    <i class="fa-solid fa-cart-shopping"></i>
                </a>
            </div>
        </div>
    </div>
</header>