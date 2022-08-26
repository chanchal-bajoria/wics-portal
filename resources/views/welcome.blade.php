<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Eurus: The Cryptic Hunt</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/landing.css') }}" rel="stylesheet">

    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <!--
            <div class="top-right links">
                @auth
                    <a href="{{ url('/home') }}">Home</a>
                @else
                    <a href="{{ route('login') }}">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            </div>-->

            <div class="content">
                <div class="title m-b-md">
                Eurus: The Cryptic Hunt
                </div>
                <div id="sub">
                    WiCS x Sports Ministry
                </div>
                <div class="links">
                    <a href="{{ route('play') }}" style="color:white; border: 2px solid #636b6f; background-color:#636b6f;padding:2px 25px;">Play</a>
                </div>
                <!--<div class="links">
                    <a href="{{ route('play') }}">Play</a>
                </div>-->
            </div>
        </div>
    </body>
</html>
