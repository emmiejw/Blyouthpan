<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>B&L Youth FC</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
    <div id="app">
        <nav class="flex items-center justify-between flex-wrap bg-pink-600 p-6">
            <div class="flex items-center flex-shrink-0 text-white mr-6">
                <a class="navbar-brand" href="{{ url('/home') }}">
                    Blackfield and Langley Youth FC
                </a>
            </div>
            @if(Auth::user())
                <div class="block">
                    <ul class="flex">
                        <li class="mr-6">
                            <a class="text-white hover:text-white" href="/content">Website Content</a>
                        </li>
                        <li class="mr-6">
                            <a class="text-white hover:text-white" href="/fixtures">Fixtures</a>
                        </li>
                        <li class="mr-6">
                            <a class="text-white hover:text-white" href="/games">Games</a>
                        </li>
                        <li class="mr-6">
                            <a class="text-white hover:text-white" href="/managers">Managers & Coaches</a>
                        </li>
                        <li class="mr-6">
                            <a class="text-white hover:text-white" href="/photo-gallery">Photo Gallery</a>
                        </li>
                    </ul>
                </div>
            @endif
            <div class="block">
                <ul class="navbar-nav ms-auto">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item">
                            <a href="#"  class="text-white" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>
                            <a class="dropdown-item text-white" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    @endguest
                </ul>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
