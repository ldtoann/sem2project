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
            <form class="register-form" method="POST" action="{{ route('register') }}">
                <p>REGISTER</p>
                <input type="hidden" name="role" value="user">

                <input id="name" type="text" placeholder="Name" name="name" :value="old('name')" required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />

                <input id="email" type="text" placeholder="Email Address" name="email" :value="old('email')" required autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />

                <input id="password" type="password" placeholder="Password" name="password" required autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />

                <input id="password_confirmation" type="password" placeholder="Confirm Password" type="password" name="password_confirmation" required autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />

                <p id="title" class="message">Register With Social Network</p>
                <div id="with">
                    <div id="mxh"><i class="fa-brands fa-facebook-f"></i></div>
                    <div id="mxh"><i class="fa-brands fa-google"></i></div>
                    <div id="mxh"><i class="fa-brands fa-twitter"></i></div>
                </div>
                <!-- <button>create</button> -->
                <x-primary-button class="ml-4">
                    {{ __('Register') }}
                </x-primary-button>
                <p class="message">Already registered? <a href="#">Sign In</a></p>
                <p class="message"><a href="{{ route('home.index') }}">BACK TO HOME PAGE <i class="fa-solid fa-arrow-right"></i></a></p>
            </form>
            <form class="login-form" method="POST" action="{{ route('login') }}">
                <p>LOGIN</p>
                <input id="email" type="text" placeholder="Email Address" name="email" :value="old('email')" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />

                <input id="password" type="password" placeholder="Password" name="password" required autocomplete="current-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />

                <p id="title" class="message">Login With Social Network</p>
                <div id="with">
                    <div id="mxh"><i class="fa-brands fa-facebook-f"></i></div>
                    <div id="mxh"><i class="fa-brands fa-google"></i></div>
                    <div id="mxh"><i class="fa-brands fa-twitter"></i></div>
                </div>
                <!-- <button>login</button> -->
                <x-primary-button class="ml-3">
                    {{ __('Log in') }}
                </x-primary-button>
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