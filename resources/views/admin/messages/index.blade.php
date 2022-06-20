@extends('layouts.app')
@section('content')
<div class="mt-12">
     <div class="sm:px-6 w-full">
    <!--- more free and premium Tailwind CSS components at https://tailwinduikit.com/ --->
        <div class="px-4 md:px-10 py-4 md:py-7">
            <div class="flex items-center justify-between">
                <p tabindex="0" class="focus:outline-none text-base sm:text-lg md:text-xl lg:text-2xl font-bold leading-normal text-gray-800">Messages</p>
            </div>
        </div>
        @if ($messages->isEmpty())
            <div class="flex flex-col items-center">
                <img class="my-4" src="{{ asset('./images/no_message.svg') }}" />
                <h1 class="font-semibold text-xl">No New Messages</h1>
            </div>
        @else    
            <div class="py-8 md:py-8 px-4 md:px-8 xl:px-10">
                <div class="mt-7 overflow-x-auto">
                    <table class="w-full whitespace-nowrap">
                        <tbody>
                            @foreach($messages as $inbox)
                                <tr tabindex="0" class="px-4 focus:outline-none h-16 border border-gray-900 rounded-md">
                                    <td class="">
                                        <div class="flex items-center px-2">
                                            <p class="text-base font-medium leading-none text-gray-700 mr-2">{{ $inbox->name }}</p>
                                        </div>
                                    </td>
                                    <td class="pl-5">
                                        <div class="flex items-center">
                                            <p class="text-sm leading-none text-gray-600 ml-2">{{ $inbox->email }}</p>
                                        </div>
                                    </td>
                                    <td class="pl-5">
                                        <div class="flex items-center">
                                            <p class="text-sm leading-none text-gray-600 ml-2">{{ $inbox->subject }}</p>
                                        </div>
                                    </td>
                                    <td class="pl-5">
                                        <div class="flex items-center">
                                            <p class="text-sm leading-none text-gray-600 ml-2">{{ $inbox->message }}</p>
                                        </div>
                                    </td>
                                    <td class="pl-5">
                                        <button class="py-3 px-4 text-sm focus:outline-none leading-none text-gray-700 bg-gray-100 rounded">{{ $inbox->created_at->diffForHumans() }}</button>
                                    </td>
                                </tr>
                                <tr class="h-3"></tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            {{ $messages->links() }}
        </div>
        @endif
    </div>
</div>
@endsection