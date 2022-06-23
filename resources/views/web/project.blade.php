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

    <section class="grid grid-cols-1 my-4 gap-4 px-6">
        <img src="https://images.unsplash.com/photo-1526778548025-fa2f459cd5c1?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=850&q=80" alt="header" class="w-full h-64 lg:h-96 rounded-md" />
    </section>

    <div class="flex flex-col text-center justify-center px-2 pt-2 pb-4 bg-white rounded-md shadow-lg text-red-500 font-semibold text-xl">
        <a class="mt-2" href="/project_country/UAE">
            UAE
        </a>
        <a class="mt-2" href="/project_country/KSA">
            KSA
        </a>
        <a class="mt-2" href="/project_country/Qatar">
            Qatar
        </a>
        <a class="mt-2" href="/project_country/Kuwait">
            Kuwait
        </a>
        <a class="mt-2" href="/project_country/Bahrain">
            Bahrain
        </a>
        <a class="mt-2" href="/project_country/Iraq">
            Iraq
        </a>
    </div>
@endsection
