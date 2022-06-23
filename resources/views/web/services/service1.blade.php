@extends('layouts.app_web')
@section('content')
    <div class="flex flex-col">
        <section class="position-relative w-full h-full overflow-hidden">
            @include('layouts.component.Nav')
        </section>
    
        <section class="text-center">
            <div class="relative flex justify-center mt-12">
                <div class="flex flex-row justify-center py-2 px-4 md:text-center">
                    <div href="#" class="inline-flex p-2 text-red-500 capitalize transition-colors duration-200 transform">
                        <img src="./images/services/deisgn.jpg" alt="header" class="h-72 w-full rounded-md" />
                    </div>
                    <div href="#" class="inline-flex p-2 text-red-500 capitalize transition-colors duration-200 transform">
                        <img src="./images/services/no3.jpg" alt="header" class="h-72 w-full rounded-md" />
                    </div>
                </div>
            </div>
            <h1 class="font-bold text-gray-800 md:text-2xl mt-10">Fire Safety Design</h1>
            <p class="text-left px-4 pt-6 pb-2">
                Fire safety is one of many aspects which must be considered when preparing
                designs for increasingly complex new buildings or planning refurbishment to
                existing buildings.
                </br> Every building design presents different fire safety problems, codes and technical
                guidance attempt to set out standard solutions, which often frustrate design
                concepts or affect the economic viability of a proposed building or development,
                The Locke Carey team of fire safety specialists has an in-depth knowledge of all
                aspects of fire safety codes, standards and legislation.
                </br> Our assistance can be provided on any project whether large or small. Whilst we
                can provide our services at any stage in the life of a project, our past experience
                shows that involving us at the very beginning can often provide economical
                insurance against costly delays and design changes at a later stage. 
                </br> Fire protection and life safety is a complex discipline of vital concern to building design and
                construction. Locke Carey provides cost effective advice and assistance to help
                achieve design objectives safely and economicaly.
                </br> <span class="font-semibold">Fire Safety Design also contains:</span>
                <ol class="text-left px-4 pb-4">
                    <li>1. Risk Assessment and Strategic Fire engineering.</li>
                    <li>2. Zone Modeling.</li>
                    <li>3. Fire Modelling using Computational Fluid Dynamics.</li>
                    <li>4. Evacuation Modeling and Crowd Engineering.</li>
                    <li>5. Fire Systems Design.</li>
                </ol>
            </p>
        </section>
    </div>
@endsection