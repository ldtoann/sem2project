<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="{{ url('lib/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('lib/fontawesome-free-6.3.0-web/css/all.css') }}">
    <link rel="stylesheet" href="{{ url('lib/all.min.css') }}" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{{ url('css/login.css') }}">
</head>

<body>
    <div class="login-page">
        <div class="form">
            <form class="register-form">
                <p>REGISTER</p>
                <input type="text" placeholder="Name" />
                <input type="text" placeholder="Email Address" />
                <input type="password" placeholder="Password" />
                <input type="password" placeholder="Confirm Password" />
                <p id="title" class="message">Register With Social Network</p>
                <div id="with">
                    <div id="mxh"><i class="fa-brands fa-facebook-f"></i></div>
                    <div id="mxh"><i class="fa-brands fa-google"></i></div>
                    <div id="mxh"><i class="fa-brands fa-twitter"></i></div>
                </div>
                <button>create</button>
                <p class="message">Already registered? <a href="#">Sign In</a></p>
                <p class="message"><a href="{{ route('home.index') }}">BACK TO HOME PAGE <i class="fa-solid fa-arrow-right"></i></a></p>
            </form>
            <form class="login-form">
                <p>LOGIN</p>
                <input type="text" placeholder="Email Address" />
                <input type="password" placeholder="Password" />
                <p id="title" class="message">Login With Social Network</p>
                <div id="with">
                    <div id="mxh"><i class="fa-brands fa-facebook-f"></i></div>
                    <div id="mxh"><i class="fa-brands fa-google"></i></div>
                    <div id="mxh"><i class="fa-brands fa-twitter"></i></div>
                </div>
                <button>login</button>
                <p class="message">Not registered? <a href="#">Create an account</a></p>
                <p class="message"><a href="{{ route('home.index') }}">BACK TO HOME PAGE <i class="fa-solid fa-arrow-right"></i></a></p>
                <script>
                    $('.message a').click(function() {
                        $('form').animate({
                            height: "toggle",
                            opacity: "toggle"
                        }, "slow");
                    });
                </script>
            </form>
        </div>
    </div>
</body>

</html>