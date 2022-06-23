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
                        <img src="./images/services/hot-smoke-test.png" alt="header" class="h-72 w-full rounded-md" />
                    </div>
                </div>
            </div>
            <h1 class="font-bold text-gray-800 md:text-2xl mt-10">Hot Smoke Test</h1>
            <p class="text-left px-4 pt-6 pb-2">
                Hot Smoke test used to verify the quality of the build and evaluates the smoke system installation.
                This method of testing should be doen for New Projects and whenever there is  change in the building. 
                In smoke testing, the test cases usually cover the most important functionalities of the system. 
                The objective of this test is to verify that the critical functionalities of the system are working fine.
            </p>
        </section>
    </div>
@endsection