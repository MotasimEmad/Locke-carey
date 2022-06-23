@extends('layouts.app_web')
@section('content')
    <div class="flex flex-col">
        <section class="position-relative w-full h-full overflow-hidden">
            @include('layouts.component.Nav')
        </section>
    
        <section class="text-center">
            <div class="relative flex justify-center mt-12">
                <div>
                    {{-- <div class="bg-blue-400 shadow-lg rounded-3xl absolute transform rotate-6 w-72 h-72"></div> --}}
                    {{-- <div class="bg-white shadow-lg rounded-3xl absolute transform -rotate-6 w-72 h-72"></div> --}}
                    <div href="#" class="inline-flex p-2 text-red-500 capitalize transition-colors duration-200 transform">
                        <img src="./images/services/no8.jpg" alt="header" class="h-72 w-full rounded-md" />
                    </div>
                </div>
            </div>
            <h1 class="font-bold text-gray-800 md:text-2xl mt-10">Fire Safety Engineering</h1>
            <p class="text-left px-4 pt-6 pb-2">
                Locke Carey consulting has the resources to provide a comprehensive fire safety
                engineering service for our clients utilizing their practical experience and knowledge our engineers make the maximum use of the latest fire engineering tools
                and techniques available to obtain the desired outcome.
                </br> Current fire safety standards and technical guidance, which support fire safety
                legislation, necessarily attempt to set out standard solutions that can be universally applied. This approach is clearly not applicable to all buildings that due to
                their age, size, complexity or the use of an innovative approach to their design or
                construction are not able to satisfy the accepted criteria.
                </br> When using fire engineering, it is generally preferable to adopt a holistic
                approach to a project. However, in many opportunities, it can be used to justify
                individual components of a scheme such as:
                <ol class="text-left px-4">
                    <li>1. Unusual means of escape arrangements.</li>
                    <li>2. Reductions in structure fire resistance.</li>
                    <li>3. Increase in fire compartment sizes.</li>
                    <li>4. Smoke control strategies.</li>
                    <li>5. Arrangements for fire service access and facilities.</li>
                    <li>6. Reduced separation between buildings.</li>
                </ol>
            </p>
        </section>
    </div>
@endsection