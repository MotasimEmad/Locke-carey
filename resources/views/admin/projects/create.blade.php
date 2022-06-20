@extends('layouts.app')
@section('content')
<div>        
    <div>
        <div class="flex">
            <div class="flex-1 flex flex-col overflow-hidden">        
                <main class="flex-1 overflow-x-hidden overflow-y-auto">
                    <div class="container mx-auto">
                        <form action ="{{ route('projects.store') }}"  enctype="multipart/form-data" method="POST">
                            @csrf
                            <div class="bg-gray-50 md:px-20 py-6">
                                <div class=" bg-white rounded-md px-6 py-10 max-w-2xl mx-auto shadow-2xl">
                                    <h1 class="text-center text-2xl font-bold text-gray-800 mb-10 py-4">New Project</h1>
                                    <div class="space-y-4">
                                        <div class="flex">
                                            <div class="mx-4">
                                                <label for="title" class="font-semibold">Project Name</label>
                                                <input id="project_name" name="project_name" placeholder="Project name ..." class="w-full mt-2 py-2 px-4 text-gray-800 bg-gray-100 border border-blue-200 rounded-md" />
                                            </div>
                                            <div class="mx-4">
                                                <label for="title" class="font-semibold">Client</label>
                                                <select id="client_name" name="client_id" class="w-full mt-2 py-2 px-4 text-gray-800 bg-gray-100 border border-blue-200 rounded-md">
                                                    @foreach($clients as $client)
                                                        <option value="{{ $client->id }}">
                                                            {{ $client->client_name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="flex">
                                            <div class="mx-4">
                                                <label for="title" class="font-semibold">Project Type</label>
                                                <input id="type" name="type" placeholder="Project type ..." class="w-full mt-2 py-2 px-4 text-gray-800 bg-gray-100 border border-blue-200 rounded-md" />
                                            </div>
                                            <div class="mx-4">
                                                <label for="title" class="font-semibold">Country</label>
                                                <select class="w-full mt-2 py-2 px-4 text-gray-800 bg-gray-100 border border-blue-200 rounded-md" name="city_name">
                                                    <option>UAE</option>
                                                    <option>KSA</option>
                                                    <option>Qatar</option>
                                                    <option>Kuwait</option>
                                                    <option>Bahrain</option>
                                                    <option>Iraq</option>
                                                    <option>Kongo</option>
                                                </select>
                                            </div>
                                            <div class="mx-4">
                                                <label for="title" class="font-semibold">City Type</label>
                                                <input id="type" name="location" placeholder="Option" class="w-full mt-2 py-2 px-4 text-gray-800 bg-gray-100 border border-blue-200 rounded-md" />
                                            </div>
                                        </div>

                                        <input type="file" name="image" />
                                        
                                        <button type="submit" class="px-6 py-2 mx-auto block rounded-md text-lg font-semibold text-white bg-blue-500 hover:bg-blue-400">Add</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </main>
            </div>
        </div>
    </div>
</div>
@endsection