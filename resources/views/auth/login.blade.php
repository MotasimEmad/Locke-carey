@extends('layouts.app')
@section('content')
    <div>
        <div class="relative min-h-screen flex flex-col sm:justify-center items-center bg-gray-100">
            <div class="relative sm:max-w-sm w-full">
                <div class="card bg-blue-400 shadow-lg w-full h-full rounded-3xl absolute transform -rotate-6"></div>
                <div class="card bg-red-400 shadow-lg w-full h-full rounded-3xl absolute transform rotate-6"></div>
                <div class="relative w-full rounded-3xl px-6 bg-gray-100 shadow-md py-20">
                    <label for="" class="block mt-3 text-sm text-gray-700 text-center font-semibold uppercase">
                        {{ __('Login') }}
                    </label>
                    <form method="POST" action="{{ route('login') }}" class="mt-10">
                        @csrf
                        <input type="email" placeholder="{{ __('E-Mail Address') }}" class="py-2 px-2 mt-1 w-full rounded-md" name="email" required autocomplete="email" autofocus>

                        <div class="mt-7">                
                            <input type="password" class="py-2 px-2 mt-1 w-full rounded-md" placeholder="{{ __('Password') }}" name="password" required autocomplete="current-password">                           
                        </div>
            
                        <div class="mt-7">
                            <button class="uppercase bg-blue-500 w-full py-3 rounded-xl text-white shadow-xl hover:shadow-inner focus:outline-none transition duration-500 ease-in-out transform" type="submit">
                                {{ __('Login') }}
                            </button>
                        </div>
            
                        <div class="mt-7">
                            <div class="flex justify-center items-center">
                                {{-- <a href="/dashboard" class="mr-2 underline">LockyCare</a> --}}
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
