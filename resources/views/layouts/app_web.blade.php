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
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @livewireStyles
</head>
<body class="font-Quicksand bg-white">
    <div>
        @yield('content')
    </div>
    
    <footer class="bg-red-500 text-white">
        <div class="container px-4 py-4">
            <div class="w-full px-6 flex flex-col md:flex-row justify-between">
                <div>
                    <div>
                        <a href="#" class="text-xl font-bold text-white hover:text-gray-200">LockeyCarey</a>
                    </div>
                    
                    <p class="max-w-md mt-2 text-gray-100">Join 60+ companies & Inventores.</p>
                    
                    <div class="flex mt-4 -mx-2">
                        <a href="#" class="mx-2 text-white hover:text-gray-200" aria-label="Linkden">
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 512 512">
                                <path d="M444.17,32H70.28C49.85,32,32,46.7,32,66.89V441.61C32,461.91,49.85,480,70.28,480H444.06C464.6,480,480,461.79,480,441.61V66.89C480.12,46.7,464.6,32,444.17,32ZM170.87,405.43H106.69V205.88h64.18ZM141,175.54h-.46c-20.54,0-33.84-15.29-33.84-34.43,0-19.49,13.65-34.42,34.65-34.42s33.85,14.82,34.31,34.42C175.65,160.25,162.35,175.54,141,175.54ZM405.43,405.43H341.25V296.32c0-26.14-9.34-44-32.56-44-17.74,0-28.24,12-32.91,23.69-1.75,4.2-2.22,9.92-2.22,15.76V405.43H209.38V205.88h64.18v27.77c9.34-13.3,23.93-32.44,57.88-32.44,42.13,0,74,27.77,74,87.64Z"/>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="mt-4 md:mt-0">
                    <span class="block mt-2 text-sm font-semibold">Dubai</span>
                    <span class="block mt-2 text-sm">Liberty Building | Office 209 | Al Garhoud</span>
                    <span class="block mt-2 text-sm">T: +971 (0)42831321</span>
                    <span class="block mt-2 text-sm">F: +971 (0)42831377</span>
                    <span class="block mt-2 text-sm">fire@lockecarey.com</span>
                </div>
                <div class="mt-4 md:mt-0">
                    <span class="block mt-2 text-sm font-semibold">Abu Dhabi</span>
                    <span class="block mt-2 text-sm mr-4">C 54 Building | Office 601 | Al Nahyan Camp</span>
                    <span class="block mt-2 text-sm">T: +971 (0)26431831</span>
                    <span class="block mt-2 text-sm">F: +971 (0)26431832</span>
                    <span class="block mt-2 text-sm">abhabid@lockecarey.com</span>
                </div>
            </div>

            <hr class="h-px my-6 bg-white border-none">

            <div class="flex justify-between px-4">
                <div>
                    <p class="text-sm text-white font-bold">© <span class="underline">LockeCarey</span> 2022. All Rights Reserved.</p>
                </div>
                <div class="flex items-center">
                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M2 5a2 2 0 012-2h12a2 2 0 012 2v10a2 2 0 01-2 2H4a2 2 0 01-2-2V5zm3.293 1.293a1 1 0 011.414 0l3 3a1 1 0 010 1.414l-3 3a1 1 0 01-1.414-1.414L7.586 10 5.293 7.707a1 1 0 010-1.414zM11 12a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"></path></svg>
                    <p class="text-sm text-white font-bold hover:underline"><a href="https://www.linkedin.com/in/motasim-emad-8b4901192/">Developer Contact info</a></p>
                </div>
            </div>
        </div>
    </footer>

    @include('sweetalert::alert')
    @livewireScripts

</body>
</html>
