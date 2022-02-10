<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/init-alpine.js') }}"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('styles')
</head>
<body class=" overflow-y-scroll scrollbar">
    <div id="app">
        {{-- <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">                    
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        <li class="nav-item"><a class="nav-link" href="{{ route('outbreakmap.index') }}">{{ __('menu.our_outbreaks') }}</a></li>
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                @if (Route::has('register'))
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                @endif
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('outbreaks.index') }}">{{ __('outbreak.list') }}</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav> --}}
        <nav class="bg-white border-gray-200 shadow mb-10">
            <div x-data="{ isOpen: false }" class="max-w-3xl mx-auto py-3 px-6 md:px-0 md:flex md:justify-between md:items-center">
                <div class="flex justify-between items-center">
                    <div class="flex items-center">
                        <a href="" class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
                            <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                            class="w-10 h-10 rounded-full" viewBox="0 0 484.000000 512.000000"
                 preserveAspectRatio="xMidYMid meet">
                <metadata>
                Created by potrace 1.16, written by Peter Selinger 2001-2019
                </metadata>
                <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)"
                fill="#F59E0B" stroke="none">
                <path d="M1241 4784 c-41 -309 -168 -660 -626 -1719 -247 -573 -303 -730 -346
                -980 -26 -148 -36 -483 -19 -637 13 -121 56 -308 91 -398 90 -228 255 -391
                467 -462 93 -31 103 -32 262 -32 156 -1 170 1 253 28 243 80 424 288 540 621
                78 225 110 442 110 745 1 317 -33 504 -111 626 -128 197 -409 264 -621 148
                -81 -43 -101 -87 -187 -404 -31 -113 -58 -213 -61 -222 -3 -10 0 -18 6 -18 6
                0 11 7 11 15 0 58 75 106 197 126 274 45 492 -180 493 -507 1 -350 -271 -608
                -640 -607 -160 0 -287 57 -398 178 -193 211 -296 631 -237 969 17 96 27 125
                113 311 203 443 411 968 560 1410 129 382 192 638 192 780 0 61 -15 125 -29
                125 -4 0 -13 -43 -20 -96z"/>
                <path d="M2148 4141 l-138 -286 15 -42 c21 -61 50 -235 84 -518 50 -404 79
                -615 121 -875 22 -135 46 -301 55 -370 26 -211 65 -476 86 -583 10 -56 19
                -112 19 -124 0 -28 -109 -190 -203 -303 -250 -299 -539 -537 -812 -671 -127
                -62 -297 -119 -356 -119 -10 0 -20 -4 -23 -9 -8 -12 498 -5 628 9 449 49 697
                209 872 563 l37 75 51 -85 c119 -197 276 -297 466 -297 99 0 161 21 261 86
                123 79 247 213 483 521 121 158 205 250 250 271 27 13 70 16 219 16 l185 0 16
                47 c53 160 82 446 53 515 -18 42 -10 40 -182 62 -236 31 -399 88 -440 153 -11
                18 -22 32 -25 33 -9 0 -150 -468 -150 -499 0 -17 12 -60 26 -96 l26 -65 -57
                -70 c-128 -156 -291 -293 -431 -360 -118 -57 -273 -78 -347 -46 -67 28 -159
                154 -217 296 l-22 55 42 130 c143 441 235 584 339 531 29 -15 103 -99 114
                -128 9 -26 15 0 33 137 22 171 26 471 6 527 -15 42 -79 104 -117 114 -147 37
                -282 -167 -480 -731 -29 -82 -56 -143 -59 -135 -17 46 -104 566 -140 840 -44
                325 -108 1065 -135 1553 -5 87 -11 160 -12 161 -2 2 -66 -125 -141 -283z"/>
                <path d="M4161 4363 c-33 -40 -103 -207 -123 -292 -6 -28 -14 -51 -17 -51 -4
                0 -27 28 -51 62 -44 60 -110 118 -136 118 -28 0 -44 -31 -44 -88 0 -96 51
                -166 78 -107 16 34 48 32 66 -4 9 -16 29 -63 45 -105 l31 -76 -25 -36 c-35
                -52 -59 -144 -37 -144 5 0 14 11 20 25 12 26 20 29 46 19 11 -4 3 -14 -31 -37
                -97 -66 -122 -185 -89 -438 9 -68 19 -166 22 -216 4 -51 10 -93 14 -93 24 0
                26 188 5 375 -22 192 -20 219 11 244 28 22 66 34 149 48 l50 8 13 54 c13 52
                12 54 -15 93 -15 22 -43 52 -63 66 -19 14 -38 29 -43 32 -4 3 4 64 19 136 35
                178 71 254 119 254 11 0 27 -6 33 -12 17 -17 27 0 41 72 8 42 9 65 1 86 -21
                55 -48 57 -89 7z"/>
                <path d="M2512 4101 l-33 -99 31 -44 c64 -92 96 -245 86 -416 -6 -111 2 -124
                28 -44 61 182 63 502 5 615 -12 24 -70 87 -78 87 -4 -1 -21 -45 -39 -99z"/>
                <path d="M1572 4079 c-83 -42 -162 -158 -162 -240 l0 -28 46 16 c55 19 127 13
                155 -13 29 -26 21 -77 -30 -178 -46 -94 -119 -194 -206 -283 -33 -35 -58 -63
                -54 -63 16 0 131 84 201 146 98 88 179 189 226 283 32 65 37 86 41 159 7 182
                -83 267 -217 201z"/>
                <path d="M3008 3547 c-24 -34 -82 -113 -127 -176 -46 -63 -84 -119 -86 -125
                -4 -12 337 -261 357 -261 11 0 268 341 268 355 0 5 -324 244 -356 263 -6 3
                -30 -21 -56 -56z"/>
                <path d="M4572 3274 c-104 -204 -492 -528 -955 -798 -64 -38 -116 -71 -114
                -73 2 -2 50 10 105 27 312 93 560 235 743 427 118 124 185 233 233 381 23 67
                15 89 -12 36z"/>
                <path d="M943 1787 c-56 -78 -115 -161 -132 -184 l-31 -41 181 -132 c100 -72
                185 -130 190 -128 5 2 67 83 138 182 l130 178 -184 134 c-101 74 -185 134
                -187 134 -2 -1 -49 -65 -105 -143z"/>
                </g>
                </svg>
                            <span class="ml-3 text-xl hidden md:inline">Mazin</span>
                          </a>
                    </div>
                    <!-- Mobile menu button -->
                    <div class="flex md:hidden">
                        <button 
                            type="button" 
                            class="text-gray-500 hover:text-gray-600 focus:outline-none focus:text-gray-600" 
                            aria-label="toggle menu"
                            @click="isOpen = !isOpen"
                        >
                            <svg viewBox="0 0 24 24" class="h-6 w-6 fill-current">
                                <path fill-rule="evenodd" d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"></path>
                            </svg>
                        </button>
                    </div>
                </div>
    
                <!-- Menu, if mobile set to hidden -->
                <div :class="isOpen ? 'show' : 'hidden'" class="md:flex items-center md:block mt-4 md:mt-0">
                    <div class="flex flex-col md:flex-row md:ml-6">
                        <a class="my-1 text-sm text-gray-700 font-medium hover:text-yellow-500 md:mx-4 md:my-0" href="{{ route('outbreakmap.index') }}">Outbreaks Map</a>
                        <a class="my-1 text-sm text-gray-700 font-medium hover:text-yellow-500 md:mx-4 md:my-0" href="{{ route('outbreaks.index') }}">Outbreaks List</a>
                        <a class="my-1 text-sm text-gray-700 font-medium hover:text-yellow-500 md:mx-4 md:my-0" href="#contact">Contact</a>
                    </div>
                    
                </div>
            </div>
        </nav>
       
        {{-- trying my navbar --}}

        <main class="h-full ">
            <div class="container px-6 mx-auto grid ">
              
            </div>
            @yield('content')
        </main>
        {{-- @include('layouts.partials.footer') --}}
    </div>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    @stack('scripts')
</body>
</html>