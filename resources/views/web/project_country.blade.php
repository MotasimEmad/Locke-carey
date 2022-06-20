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

    <section class="grid grid-cols-2 md:grid-cols-3 my-4 gap-4 px-6 pb-32 md:pb-20">
        @foreach($projects as $project)
        <!-- component -->
<!-- This is an example component -->
<div class="w-full mx-auto">
    <div class="bg-white shadow-md border border-gray-200 rounded-lg max-w-sm mb-5">
        <a href="#">
            <img class="rounded-t-lg h-48 w-full object-cover" src="{{ URL::asset('uploads/projects/'.$project->image) }}" alt="">
        </a>
        <div class="p-5">
            <a href="#">
                <h5 class="text-gray-800 font-semibold text-xl tracking-tight mb-2">{{ $project->project_name }}</h5>
            </a>

            <p class="text-sm">
                {{ $project->type }}
            </p>
            
            <div class="flex justify-between my-2 font-normal text-gray-700">
                <div>
                    Client | {{ $project->client->client_name }}
                </div>
                <div>
                    {{ $project->location }}
                </div>
            </div>
        </div>
    </div>
</div>
        @endforeach
   </section>
@endsection