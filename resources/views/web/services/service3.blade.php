@extends('layouts.app_web')
@section('content')
    <div class="flex flex-col">
        <section class="position-relative w-full h-full overflow-hidden">
            @include('layouts.component.Nav')
        </section>
    
        <section class="text-center">
            <div class="relative flex justify-center mt-12">
                <div>
                    {{-- <div class="bg-blue-400 shadow-lg rounded-3xl absolute transform rotate-6 w-72 h-72"></div>
                    <div class="bg-white shadow-lg rounded-3xl absolute transform -rotate-6 w-72 h-72"></div> --}}
                    <div href="#" class="inline-flex p-2 text-red-500 capitalize transition-colors duration-200 transform">
                        <img src="./images/services/no4.jpg" alt="header" class="h-72 w-full rounded-md" />
                    </div>
                </div>
            </div>
            <h1 class="font-bold text-gray-800 md:text-2xl mt-10">Façade and Roofing System Engineering Assessment and Inspection Services</h1>
            <p class="text-left px-4 pt-6 pb-2">
                Locke Carey is an approved Fire Consultant by the Authorities to undertake
                review of the facade and roofing system design to ensure compliance require
                ments of the Authority and international safety code and also to assist main
                consultant on the project to obtain NOC.
                </br> The assessments involve review of the proposed façade and roofing system
                design against listed design, conformation of the materials as product as well as
                assembly formed by them to prescribed fire classification, Post obtaining NOC, we carry out inspection of the installed façade and roofing
                system in accordance with inspection guidelnes.
            </p>
        </section>
    </div>
@endsection