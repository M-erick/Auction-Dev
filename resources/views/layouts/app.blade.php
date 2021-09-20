<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Auction') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    @stack('styles')
</head>

<body class="background-imag h-screen antialiased leading-none font-sans">
    <div id="app">
        <div class="fixed   w-full z-50 top-0">
            <header class="bg-gray-800 ">
                <div class="container mx-auto flex justify-between items-center px-6">
                    <div>
                        <a href="{{ url('/') }}" class="text-lg font-semibold text-gray-100 no-underline">
                            {{ config('app.name', 'Auction') }}
                            {{-- rename to example .How to bid --}}
                        </a>
                    </div>
                    <nav class="space-x-4 text-gray-300 text-sm sm:text-base">
                        <a class="no-underline hover:underline" href="{{ route('howTo') }} ">HowTo</a>

                        @guest
                            <a class="no-underline hover:underline" href="{{ route('login') }}">{{ __('Login') }}</a>
                            @if (Route::has('register'))
                                <a class="no-underline hover:underline"
                                    href="{{ route('register') }}">{{ __('Register') }}</a>
                            @endif
                        @else
                            <span>{{ Auth::user()->name }}</span>
                            {{-- if users login add two links to navbar
                            1.Buy shares
                            2.Sell shares --}}

                            <a href="{{ route('logout') }}" class="no-underline hover:underline" onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                                {{ csrf_field() }}
                            </form>
                        @endguest

                    </nav>

                </div>
                <div class=" bg-gray-800 py-6 container mx-auto flex  justify-evenly space-x-1 text-white px-6">
                    <a class="no-underline hover:underline" href="{{ route('howTo') }} ">BUY</a>
                    <a class="no-underline hover:underline" href="{{ route('howTo') }} ">SELL</a>
                    <a class="no-underline hover:underline" href="{{ route('howTo') }} ">Profile</a>






                </div>
            </header>
        </div>


        <div>
            @yield('content')
            {{-- @if (Auth::check()) --}}
        </div>


        {{-- the footer should be static --}}
        <div>
            @include('layouts.footer')

            {{-- @endif --}}

        </div>


    </div>

</body>

</html>
