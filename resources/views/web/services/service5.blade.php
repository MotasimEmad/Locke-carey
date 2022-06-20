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
                        <img src="./images/services/CFD1.png" alt="header" class="h-72 w-full rounded-md" />
                    </div>
                </div>
            </div>
            <h1 class="font-bold text-gray-800 md:text-2xl mt-10">Smoke CFD & Evacuation Modelling</h1>
            <p class="text-left px-4 pt-6 pb-2">
                As buildings become more complex and multi-faceted it is becoming more
                difficult to predict the impact that a fire would have on the building and its
                occupants, this can lead to wide spread over design in the interests of safety.
                </br> Computational fluid dynamics (CFD) modeling allows us to accurately predict the
                movements of heat and smoke within complex structures and determine if
                further mitigating features are required. If you have a complex fire engineering problem, you need someone with the right
                tools and expertise to help you solve it. 
                </br> <span class="text-red-500 font-bold">Locke Carey</span> can provide a compound
                design advice including CFD modelling, structural fire engineering, smoke
                calculations, evacuation modelling, etc. 
                </br> Our experience covers a wide range of
                projects from office, retail, industrial, assembly, transport, among others.
            </p>
        </section>
    </div>
@endsection