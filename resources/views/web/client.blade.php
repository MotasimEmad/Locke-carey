@extends('layouts.app_web')
@section('content')
    <section class="position-relative w-full h-full overflow-hidden">
        @include('layouts.component.Nav')
        <section class="text-center py-6 md:px-44">
            <div class="text-gray-800 ml-4">
                <h1 class="font-bold text-xl md:text-3xl my-1">Join 60+ companies & Inventores</h1>
                <div class="flex flex-col md:flex-row items-center justify-center">
                    <p class="text-sm text-gray-600 px-2">
                        We're proud to have played a part in these amazing journeys
                    </p>
                    <svg class="mt-2 md:mt-0 w-6 h-6 fill-current text-red-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"></path></svg>
                </div>
            </div>
        </section>
    </section>

    <section class="md:px-8">
        <h1 class="text-center font-bold text-xl md:text-3xl my-1 md:mt-16 text-gray-800">Our Clients</h1>
        <div class="flex justify-center mx-auto mb-6">
            <span class="inline-block w-40 h-1 bg-red-600 rounded-full"></span>
            <span class="inline-block w-3 h-1 mx-1 bg-red-600 rounded-full"></span>
            <span class="inline-block w-1 h-1 bg-red-600 rounded-full"></span>
        </div>
        <div class="grid grid-cols-2 gap-8 mt-8 xl:mt-12 xl:gap-12 md:grid-cols-3 lg:grid-cols-4 px-4 md:text-center mb-4">
            @foreach($clients as $client)
                <div class="py-14 px-10 border-2 border-gray-100 rounded-md">
                    <div href="#" class="inline-flex p-2 text-red-500 capitalize transition-colors duration-200 transform">
                        <img src="{{ URL::asset('uploads/clients/'.$client->image) }}" alt="" class="h-24"/>
                    </div>
                    <h1 class="font-semibold">{{ $client->client_name }}</h1>
                </div>
            @endforeach  
        </div>
    </section>
@endsection