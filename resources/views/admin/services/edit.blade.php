@extends('layouts.app')
@section('content')
<div>        
    <div>
        <div class="flex">
            <div class="flex-1 flex flex-col overflow-hidden">        
                <main class="flex-1 overflow-x-hidden overflow-y-auto">
                    <div class="container mx-auto">
                        <form action ="{{ route('services.update', $service->id) }}"  enctype="multipart/form-data" method="POST">
                            {{ method_field('PUT') }}
                            @csrf
                            <div class="bg-gray-50 md:px-20 py-6">
                                <div class=" bg-white rounded-md px-6 py-10 max-w-2xl mx-auto shadow-2xl">
                                    <h1 class="text-center text-2xl font-bold text-gray-800 mb-10 py-4">Update Service</h1>
                                    <div class="space-y-4">
                                        <div>
                                            <label class="font-semibold">Service Name</label>
                                            <input id="service_name" name="service_name" class="w-full mt-2 py-2 px-4 text-gray-800 bg-gray-50 border border-gray-100 rounded-md" value={{$service->service_name}} />
                                        </div>
                                        <div>
                                            <label for="title" class="font-semibold">Service Description</label>
                                            <textarea id="service_description" name="service_description" cols="30" rows="10" placeholder="Description ..." class="w-full mt-2 py-2 px-4 text-gray-800 bg-gray-50 border border-gray-100 rounded-md">
                                                {{$service->service_description}}
                                            </textarea>
                                        </div>
                                        <div>
                                            <label for="title" class="font-semibold">Service Image</label>
                                            <img class="w-16 h-16 border-gray-100 border" src="{{ URL::asset('uploads/services/'.$service->image) }}" />
                                            <input type="file" name="image" />
                                        </div>
                                        <button type="submit" class="px-6 py-2 mx-auto block rounded-md text-lg font-semibold text-white bg-blue-500 hover:bg-blue-400">Update</button>
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