<nav class="flex items-center md:justify-between px-4 py-2 bg-white border-t-4 border-b-4 border-red-500">
    <div class="flex justify-between items-center">
        <a href="/">
            <img src="../images/logo.png" class="h-24" />
        </a>
    </div>
    <ul class="flex items-center transition-all ease-in duration-500 ml-2">
        <li class="my-2 md:my-0">
            <a href="/" class="py-2 px-2 md:px-4 font-semibold text-sm md:text-base text-red-500 rounded-md hover:underline transition-colors duration-200">Home</a>
        </li>
        <li class="my-2 md:my-0">
            <a href="/project" class="py-2 px-2 md:px-4 font-semibold text-sm md:text-base text-red-500 rounded-md hover:underline transition-colors duration-200">Projects</a>
        </li>
        <li class="my-2 md:my-0">
            <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
            <div>
                <div @click.away="open = false" class="" x-data="{ open: false }">
                    <button @click="open = !open" class="flex text-gray-900 bg-gray-200 items-center text-sm font-semibold text-center rounded-lg hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                        <span class="py-2 px-2 md:px-4 font-semibold text-sm md:text-base text-red-500 rounded-md hover:underline transition-colors duration-200">Services</span>
                        <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1 text-red-500"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                    <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full md:max-w-screen-sm md:w-screen mt-2 origin-top-right">
                        <div class="flex flex-col px-2 pt-2 pb-4 bg-white rounded-md shadow-lg text-red-500 font-semibold">
                            <a class="mt-2" href="/fire-safety-design">
                                Fire Safety Design
                            </a>
                            <a class="mt-2" href="/fire-safety-engineering">
                                Fire Safety Engineering
                            </a>
                            <a class="mt-2" href="/facade-and-roofing">
                                Façade and Roofing System
                            </a>
                            <a class="mt-2" href="/fire-safety-management">
                                Fire Safety Management
                            </a>
                            <a class="mt-2" href="/smoke-cfd">
                                Smoke CFD & Evacuation Modelling
                            </a>
                            <a class="mt-2" href="/fire-safety-inspection">
                                Fire Safety Inspection & on Site Work
                            </a>
                            <a class="mt-2" href="/hot-smoke-test">
                                Hot Smoke Test
                            </a>
                        </div>
                    </div>
                </div>    
            </div>
        </li>
        <li class="my-2 md:my-0">
            <a href="/client" class="py-2 px-2 md:px-4 font-semibold text-sm md:text-base text-red-500 rounded-md hover:underline transition-colors duration-200">Clients</a>
        </li>
        <li class="my-2 md:my-0">
            <a href="/contact" class="py-2 px-2 md:px-4 bg-red-600 text-white hover:bg-red-400 hover:text-white font-bold rounded-md">Contact</a>
        </li>
    </ul>
</nav>