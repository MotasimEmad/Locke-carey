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
                        <img src="./images/services/AX036910.jpg" alt="header" class="h-72 w-full rounded-md" />
                    </div>
                </div>
            </div>
            <h1 class="font-bold text-gray-800 md:text-2xl mt-10">Fire Safety Inspection & on Site Work</h1>
            <p class="text-left px-4 pt-6 pb-2">
                <span class="font-bold">1. Inspection work</span>
                </br> <span class="font-semibold">Site Supervision and handing over inspection:</span> Conduct monthly
                inspection for the passive and active fire protection systems for each
                building individually, 
                checking against approvals:
                <ol class="text-left px-4">
                    <li>Compartmentation Zones.</li>
                    <li>Egress Dimensions.</li>
                    <li>Fire Alarm Cause & Effect.</li>
                    <li>Smoke & heat detector and manual fire alarm cal point operation.</li>
                    <li>Fire hose reel pressure and flow characteristics.</li>
                    <li>Sprinkler head pressure and flow characteristics.</li>
                    <li>Fire pump/Jockey pump pressure and flow characteristics.</li>
                    <li>Raiser pipe pressure and flow characteristics.</li>
                    <li>Emergency light and exit sign locations.</li>
                    <li>Stair and shaft pressurization.</li>
                    <li>Door opening forces.</li>
                </ol>
            </p>

            <p class="text-left px-4 pt-6 pb-2">
                <span class="font-bold">2. Testing Commissioning</span>
                </br> <span class="font-semibold">Hot Smoke Test:</span> The test is intended to verify the correct performance
                of the smoke management system including operation, sequence of
                control where practical specified smoke layer depth.
                <ol class="text-left px-4">
                    <li>Lux test for the emergency lights.</li>
                    <li>Bucket test for sprinkler.</li>
                    <li>Smoke test for the beam detector.</li>
                    <li>Hot smoke test for large space.</li>
                    <li>DB Level.</li>
                </ol>
            </p>

            <p class="text-left px-4 pt-6 pb-2">
                <span class="font-bold">3. Training</span>
                We carry out audits of buildings to ensure ongoing compliance with statutory
                requirements.
                </br> <span class="font-semibold">Fire Evacuation Drills, Fire Safety & Risk Management Training:</span> We organize and supervise evacuation drills, report on the standards of the drill
                and recommend any necessary changes.
                </br> <span class="font-semibold">Fire Safety Manual:</span> We prepare manuals which document the fire safety system in individual buildings, describe how they work, detail their operational
                maintenance requirements together with management responsibilities.
            </p>

            <p class="text-left px-4 pt-6 pb-2">
                <span class="font-bold">4. Fire Stopping</span>
                </br> For fire stopping and during design stage, Locke Carey
                reviews and approve the method statements and specifications of fireproofing materials as per fire international
                standards.
                </br> We inspect and assure all fire stopping materials installation
                work have been applied as per standards by providing
                Inspection reports to relevant authorities.
            </p>
        </section>
    </div>
@endsection