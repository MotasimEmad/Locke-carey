<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>LockeCarey</title>
    <link href="/css/app.css" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="font-Quicksand">
    @guest
        <div></div>   
    @else
    <nav class="flex items-center md:justify-between px-4 py-2 md:py-4 bg-white border-t-4 border-b-4 border-red-500">
        <div class="flex justify-between items-center">
            <img src="{{ asset('./images/logo.png') }}" class="h-12" />
        </div>
        <ul class="flex items-center transition-all ease-in duration-500 ml-2">
            <li class="my-2 md:my-0">
                <a href="/clients" class="py-2 px-2 md:px-4 font-semibold text-sm md:text-base text-red-500 rounded-md hover:underline transition-colors duration-200">Clients</a>
            </li>
            <li class="my-2 md:my-0">
                <a href="{{ route('projects.index') }}" class="py-2 px-2 md:px-4 font-semibold text-sm md:text-base text-red-500 rounded-md hover:underline transition-colors duration-200">Projects</a>
            </li>
            <li class="my-2 md:my-0">
                <a href="{{ route('messages.index') }}" class="py-2 px-2 md:px-4 font-semibold text-sm md:text-base text-red-500 rounded-md hover:underline transition-colors duration-200">Messages</a>
            </li>
            <li class="my-2 md:my-0">
                <a  href="{{ route('logout') }}"  onclick="event.preventDefault();
                document.getElementById('logout-form').submit();" class="py-2 px-2 md:px-4 bg-red-600 text-white hover:bg-red-400 hover:text-white font-bold rounded-md">{{ __('Logout') }}</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>  
            </li>
        </ul>
    </nav>
    @endguest
    <div class="">
        @yield('content')
    </div>
</body>
</html>