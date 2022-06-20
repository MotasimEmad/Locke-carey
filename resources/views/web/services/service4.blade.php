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
                        <img src="./images/services/fire-saftey-man.jpg" alt="header" class="h-72 w-full rounded-md" />
                    </div>
                </div>
            </div>
            <h1 class="font-bold text-gray-800 md:text-2xl mt-10">Fire Safety Management</h1>
            <p class="text-left px-4 pt-6 pb-2">
                Effective fire safety management is a key element in the overall fire safety of
                building and its occupants. Managers plan effectively to combat the potentially
                disastrous effects of a fire in their structures, and meet the many requirements
                placed upon them by various pieces of fire legislation applicable to occupied
                buildings of all types and uses.
                </br> This can be an extremely complex and time consuming task which is usually only
                one of many competing priorities facing today's busy manager.
                </br> Locke Carey consulting can assist those responsible for fire safety in buildings
                by providing advice, practical assistance and training on all aspects of fire safety
                management.
            </p>
        </section>
    </div>
@endsection