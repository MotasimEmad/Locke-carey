@extends('layouts.app_web')
@section('content')
    <section class="position-relative w-full h-full overflow-hidden">
        @include('layouts.component.Nav')
    </section>

    <h1 class="text-center font-bold text-xl md:text-3xl my-1 md:mt-16 text-gray-800">Projects</h1>
    <div class="flex justify-center mx-auto mb-8">
        <span class="inline-block w-40 h-1 bg-red-600 rounded-full"></span>
        <span class="inline-block w-3 h-1 mx-1 bg-red-600 rounded-full"></span>
        <span class="inline-block w-1 h-1 bg-red-600 rounded-full"></span>
    </div>

    <section class="grid grid-cols-2 md:grid-cols-3 my-4 gap-4 px-6">
        <a href="/project_country/UAE" class="flex flex-col items-center justify-center max-w-sm mx-2">
            <div class="w-full h-64 bg-gray-300 bg-bottom bg-cover rounded-lg shadow-lg" style="background-image: url('./maps/uae.jpg')"></div>
            <div class="w-56 -mt-10 overflow-hidden bg-white rounded-md md:w-full">
                <h3 class="py-2 font-bold tracking-wide text-center uppercase">UAE</h3>
            </div>
        </a>
        <a href="/project_country/KSA" class="flex flex-col items-center justify-center max-w-sm mx-2">
            <div class="w-full h-64 bg-gray-300 bg-center bg-cover rounded-lg shadow-lg object-top" style="background-image: url('./maps/ksa.jpg')"></div>
            <div class="w-56 -mt-10 overflow-hidden bg-white rounded-md md:w-full">
                <h3 class="py-2 font-bold tracking-wide text-center uppercase">KSA</h3>
            </div>
        </a>
        <a href="/project_country/Qatar" class="flex flex-col items-center justify-center max-w-sm mx-2">
            <div class="w-full h-64 bg-gray-300 bg-center bg-cover rounded-lg shadow-lg" style="background-image: url('./maps/qatar.jpg')"></div>
            <div class="w-56 -mt-10 overflow-hidden bg-white rounded-md md:w-full">
                <h3 class="py-2 font-bold tracking-wide text-center uppercase">Qatar</h3>
            </div>
        </a>
        <a href="/project_country/Kuwait" class="flex flex-col items-center justify-center max-w-sm mx-2">
            <div class="w-full h-64 bg-gray-300 bg-top bg-cover rounded-lg shadow-lg" style="background-image: url(./maps/kuwait.jpg)"></div>
            <div class="w-56 -mt-10 overflow-hidden bg-white rounded-md md:w-full">
                <h3 class="py-2 font-bold tracking-wide text-center uppercase">Kuwait</h3>
            </div>
        </a>
        <a href="/project_country/Bahrain" class="flex flex-col items-center justify-center max-w-sm mx-2">
            <div class="w-full h-64 bg-gray-300 bg-center bg-cover rounded-lg shadow-lg" style="background-image: url('./maps/bahrain.jpg')"></div>
            <div class="w-56 -mt-10 overflow-hidden bg-white rounded-md md:w-full">
                <h3 class="py-2 font-bold tracking-wide text-center uppercase">Bahrain</h3>
            </div>
        </a>
        <a href="/project_country/Iraq" class="flex flex-col items-center justify-center max-w-sm mx-2">
            <div class="w-full h-64 bg-gray-300 bg-center bg-cover rounded-lg shadow-lg" style="background-image: url('./maps/iraq.jpg')"></div>
            <div class="w-56 -mt-10 overflow-hidden bg-white rounded-md md:w-full">
                <h3 class="py-2 font-bold tracking-wide text-center uppercase">Iraq</h3>
            </div>
        </a>
   </section>
@endsection