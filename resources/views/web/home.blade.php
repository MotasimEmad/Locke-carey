@extends('layouts.app_web')
@section('content')
    <section class="flex flex-col position-relative w-full overflow-hidden">
        @include('layouts.component.Nav')
        <section class="flex flex-col lg:flex-row items-center md:justify-between py-6 md:px-32 bg-red-500">
            <img src="./images/main.jpg" alt="header" class="ml-4 h-64 lg:h-96 rounded-md" />
            <div class="text-white ml-4 p-5">
                <h1 class="font-bold text-xl md:text-3xl my-1">LockeCarey</h1>
                <p class="mb-4 text-md mt-2">
                    fire safety consultancy is a successful team of specialist fire safety consultants add engineers that provide innovative fire safety solutions to those involved in the development, design, construction and management of residential and commercial buildings as well as other structures since 1989.
                    We are a local company that understands the way in which the construction and fire safety industry operates within the region and we are therefore able to make sound professional judments on behalf of clients and in line with the current guidelines of the requlatory authorities. We have been providing the same comprehensive design, risk assessment, inspection and auditing services throughout in the middle east, India and Europe. 
                </p>
            </div>
        </section>
    </section>

    <section>
        <div class="container px-6 py-8 mx-auto md:mt-10">
            <div class="lg:flex">
                <div class="lg:w-1/2">
                    <h2 class="text-3xl font-bold text-gray-800">Who We Are</h2>
                    <div class="flex mx-auto mb-6 mt-2">
                        <span class="inline-block w-40 h-1 bg-red-600 rounded-full"></span>
                        <span class="inline-block w-3 h-1 mx-1 bg-red-600 rounded-full"></span>
                        <span class="inline-block w-1 h-1 bg-red-600 rounded-full"></span>
                    </div>

                    <p class="mt-4 text-gray-500 pr-4 text-md">
                    Locke Carey is licensed as a Fire Engineering House of Expertise and is authorized to certify the related mechanical, electrical prior to approval by civil defense.
                    The company has built up an impressive, broad based client list which includes architects, developers, construction companies, government departments, project managers, consulting engineers, lawyers, building owners, managers and occupiers.
                    Using our experience we are able to bring added value to any project or commission we work on to achieve optimum benefit for our clients, whilst maintaining the required levels of fire safety. 
                    Our intention is not just to meet our client's expectations, but to exceed them. Hence we strongly believe our professional expertise and experience enable us to act as independent third party consultants in all matters related to fire safety.
                    </p>

                </div>

                <div class="relative mt-14">
                    <div class="relative w-full rounded-3xl bg-white shadow-md h-48 md:h-96">
                        <img src="./images/about.png" alt="header" class="rounded-3xl bg-cover w-full h-48 md:h-96" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-red-500 grid grid-cols-1 md:grid-cols-2 gap-4 text-center md:text-left py-4 px-4 md:py-20 md:px-8">
        <div>
            <h1 class="font-semibold text-white capitalize text-xl lg:text-2xl">Our Mission</h1>
            
            <p class="max-w-2xl mt-4 text-gray-100 text-md">
                In LockeCarey, our mission is to offer professional level of consultancy, design and management for all clients and to serve as a leader in a professional way.
            </p>
        </div>

        <div class="mt-4 md:mt-0">
            <h1 class="text-xl font-semibold text-white capitalize lg:text-2xl">Our Vision</h1>
            
            <p class="max-w-2xl mt-4 text-gray-100 text-md">
                Our vision is to use consistent quality assessment and improvment strategies throughout a qualified environment.
            </p>
        </div>
    </section>

    <section class="flex flex-col md:flex-row md:items-center px-4 py-8 mx-auto">
        <div class="relative mt-16 mb-8">
            <div class="relative w-full rounded-3xl shadow-md h-48 md:h-96">
                <img src="./images/people.jpg" alt="header" class="rounded-3xl bg-cover w-full h-48 md:h-96" />
            </div>
        </div>
        <div class="text-gray-800 md:ml-8 md:w-1/2 mt-10">
            <h1 class="font-bold text-2xl md:text-3xl md:my-1 text-center">Our People</h1>
            <div class="flex justify-center mx-auto mb-6">
                <span class="inline-block w-40 h-1 bg-red-600 rounded-full"></span>
                <span class="inline-block w-3 h-1 mx-1 bg-red-600 rounded-full"></span>
                <span class="inline-block w-1 h-1 bg-red-600 rounded-full"></span>
            </div>
            <p class="mb-4 md:text-left px-4 md:px-0 text-md">
               Our People are key to the delivery of our strategy. Hence, they are 100% involved in the planning and direction of thier own work.
               LockeCarey has a team of highly experienced engineers who are able to determine the nature and type of systems required and to provide detailed system design drawings and schedule of equipment suitable for tender purposes. We also have qualified engineers to carry out site inspection during installation of systems on completion on behalf of the civil defense.
            </p>
        </div>
    </section>

    <div class="relative bg-red-500 text-black-500 pt-8 pb-6">
        <div class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
            style="height: 80px;">
            <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none"
                version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                <polygon class="text-red-500 fill-current" points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
    </div>

    <section class="md:px-8">
        <h1 class="font-bold text-2xl md:text-3xl md:my-1 text-center mt-6 md:mt-8">Services</h1>
        <div class="flex justify-center mx-auto mb-6">
            <span class="inline-block w-40 h-1 bg-red-600 rounded-full"></span>
            <span class="inline-block w-3 h-1 mx-1 bg-red-600 rounded-full"></span>
            <span class="inline-block w-1 h-1 bg-red-600 rounded-full"></span>
        </div>
        <div class="grid grid-cols-1 gap-8 mt-8 xl:mt-12 xl:gap-12 md:grid-cols-2 lg:grid-cols-3 py-2 px-4 md:text-center">
            <div class="w-full">
                <div class="flex flex-col items-center p-8 space-y-3 border-2 border-gray-100 rounded-md shadow-md">
                    <div href="#" class="items-center inline-flex p-2 text-red-500 capitalize transition-colors duration-200 transform">
                        <img src="./images/services/no3.jpg" alt="" class="h-60 w-72 rounded-md" />
                    </div>
                    <h1 class="font-bold text-gray-800">Fire Safety Design</h1>
                    <p class="text-left">
                        Fire safety is one of many aspects which must be considered when preparing
                        designs for increasingly complex new buildings or planning refurbishment to
                        existing buildings...
                        <a href="/fire-safety-design" class="text-blue-500 font-semibold">Read More</a>
                    </p>
                </div>
            </div>
            <div class="w-full">
                <div class="flex flex-col items-center p-8 space-y-3 border-2 border-gray-100 rounded-md shadow-md">
                    <div href="#" class="items-center inline-flex p-2 text-red-500 capitalize transition-colors duration-200 transform">
                        <img src="./images/services/no8.jpg" alt="" class="h-0 w-72 rounded-md" />
                    </div>
                    <h1 class="font-bold text-gray-800">Fire Safety Engineering</h1>
                    <p class="text-left">
                        Locke Carey consulting has the resources ...
                        <a href="/fire-safety-engineering" class="text-blue-500 font-semibold">Read More</a>
                    </p>
                </div>
            </div>
            <div class="w-full">
                <div class="flex flex-col items-center p-8 space-y-3 border-2 border-gray-100 rounded-md shadow-md">
                    <div href="#" class="items-center inline-flex p-2 text-red-500 capitalize transition-colors duration-200 transform">
                        <img src="./images/services/no4.jpg" alt="" class="md:mb-8 h-60 w-72 rounded-md" />
                    </div>
                    <h1 class="font-bold text-gray-800">Façade and Roofing System Engineering Assessment and Inspection Services</h1>
                    <p class="text-left">
                        Locke Carey is an approved Fire Consultant by the Authorities to undertake
                        review of the facade and roofing ...
                        <a href="/facade-and-roofing" class="text-blue-500 font-semibold">Read More</a>
                    </p>
                </div>
            </div>
            <div class="w-full">
                <div class="flex flex-col items-center p-8 space-y-3 border-2 border-gray-100 rounded-md shadow-md">
                    <div href="#" class="mb-20 items-center inline-flex p-2 text-red-500 capitalize transition-colors duration-200 transform">
                        <img src="./images/services/no5.jpg" alt="" class="w-72 rounded-md" />
                    </div>
                    <h1 class="font-bold text-gray-800">Fire Safety Management</h1>
                    <p class="text-left">
                        Effective fire safety management is a key element in the overall fire safety of
                        building and its occupants. Managers plan effectively to combat the potentially... 
                        <a href="/fire-safety-management" class="text-blue-500 font-semibold">Read More</a>
                    </p>
                </div>
            </div>
            <div class="w-full">
                <div class="flex flex-col items-center p-8 space-y-3 border-2 border-gray-100 rounded-md shadow-md">
                    <div href="#" class="items-center inline-flex p-2 text-red-500 capitalize transition-colors duration-200 transform">
                        <img src="./images/services/CFD1.png" alt="" class="lg:mb-8 h-60 w-72 rounded-md" />
                    </div>
                    <h1 class="font-bold text-gray-800">Smoke CFD & Evacuation Modelling</h1>
                    <p class="text-left">
                        As buildings become more complex and multi-faceted it is becoming more difficult to predict the impact that a fire would have on the building and its occupants, this can lead to wide spread over ...
                        <a href="/smoke-cfd" class="text-blue-500 font-semibold">Read More</a>
                    </p>
                </div>
            </div>
            <div class="w-full">
                <div class="flex flex-col items-center p-8 space-y-3 border-2 border-gray-100 rounded-md shadow-md">
                    <div href="#" class="items-center inline-flex p-2 text-red-500 capitalize transition-colors duration-200 transform">
                        <img src="./images/services/inspection.jpeg" alt="" class="h-60 w-72 rounded-md" />
                    </div>
                    <h1 class="font-bold text-gray-800">Fire Safety Inspection & on Site Work</h1>
                    <p class="text-left">
                        1. Inspection work
                        Site Supervision and handing over inspection: Conduct monthly
                        inspection for the passive and active fire protection systems for each
                        building individually ...
                        <a href="/fire-safety-inspection" class="text-blue-500 font-semibold">Read More</a>
                    </p>
                </div>
            </div>
            <div></div>
            <div class="w-full">
                <div class="flex flex-col items-center p-8 space-y-3 border-2 border-gray-100 rounded-md shadow-md">
                    <div href="#" class="items-center inline-flex p-2 text-red-500 capitalize transition-colors duration-200 transform">
                        <img src="./images/services/hot-smoke-test.png" alt="" class="h-60 w-full rounded-md" />
                    </div>
                    <h1 class="font-bold text-gray-800">Hot Smoke Test</h1>
                    <p class="text-left">
                        Hot Smoke test used to  verify the quality of the build and evaluates the smoke system installation. 
                        This method of testing should be doen for New Projects and whenever there is  change in the building.....
                        <a href="/hot-smoke-test" class="text-blue-500 font-semibold">Read More</a>
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection

<style>
    .wave 
    {
        position: absolute;
        left: 0;
        bottom: 0;
        width: 100%;
        height: 100px;
        background-image: url('./images/wave.png');
        background-size: 1000px 100px;
    }

    .wave1 
    {
        animation: animate 30s linear infinite;
        z-index: 1000;
        opacity: 1;
        animation-delay: 0%;
        bottom: 0;
    }

    @keyframes animate 
    {
        0% 
        {
            background-position-x: 0;
        }
        100% 
        {
            background-position-x: 1000px;
        }
    }

    .wave2 
    {
        animation: animate2 15s linear infinite;
        z-index: 999;
        opacity: 0.5;
        animation-delay: -5s;
        bottom: 10px;
    }

    .wave3
    {
        animation: animate2 30s linear infinite;
        z-index: 998;
        opacity: 0.2;
        animation-delay: -2s;
        bottom: 15px;
    }

    .wave4
    {
        animation: animate2 5s linear infinite;
        z-index: 997;
        opacity: 0.2;
        animation-delay: -2s;
        bottom: 15px;
    }

    @keyframes animate 
    {
        0% 
        {
            background-position-x: 0;
        }
        100% 
        {
            background-position-x: 1000px;
        }
    }
    
    @keyframes animate2
    {
        0% 
        {
            background-position-x: 0;
        }
        100% 
        {
            background-position-x: 1000px;
        }
    }

    @keyframes animate3
    {
        0% 
        {
            background-position-x: 0;
        }
        100% 
        {
            background-position-x: 1000px;
        }
    }

    blockquote {
        background:
            linear-gradient(to right, #d3d3d3 6px, transparent 4px) 0 100%,
            linear-gradient(to left, #d3d3d3 6px, transparent 4px) 100% 0,
            linear-gradient(to bottom, #d3d3d3 6px, transparent 4px) 100% 0,
            linear-gradient(to top, #d3d3d3 6px, transparent 4px) 0 100%;
        background-repeat: no-repeat;
        background-size: 20px 20px;
    }

    /* -- create the quotation marks -- */
    blockquote:before,
    blockquote:after {
        font-family: FontAwesome;
        position: absolute;
        color: #000000;
        font-size: 34px;
    }

    blockquote:before {
        content: "\f10d";
        top: -12px;
        margin-right: -20px;
        right: 100%;
    }

    blockquote:after {
        content: "\f10e";
        margin-left: -20px;
        left: 100%;
        top: auto;
        bottom: -20px;
    }

    do {
        white-space: nowrap;
    }

</style>