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





<x-guest-layout style="background-color: black;">
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                {{ __('Forgot your password?') }}
            </a>
            @endif

            <x-primary-button class="ml-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>