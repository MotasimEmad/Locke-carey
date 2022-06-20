@extends('layouts.app_web')
@section('content')
    <section class="position-relative w-full h-full overflow-hidden">
        @include('layouts.component.Nav')
    </section>

    <section class="bg-white py-20 lg:py-[120px] overflow-hidden relative z-10">
        <div class="container">
            <div class="flex flex-wrap justify-center lg:justify-between mx-4">
                <div class="w-full lg:w-1/2 xl:w-5/12 px-4 shadow-2xl">
                    <div class="bg-white relative rounded-lg p-8 sm:p-12">
                    <form action="{{ route('messages.store') }}" method="POST">
                        @csrf
                        <div class="mb-6">
                            <input
                            name="name"
                                type="text"
                                placeholder="Your Name"
                                class="
                                w-full
                                rounded
                                py-3
                                px-4
                                text-body-color text-base
                                border border-gray-100
                                outline-none
                                focus-visible:shadow-none
                                focus:border-primary
                                "
                                />
                                @error('name') <span class="error text-red-500">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-6">
                            <input
                            name="email"    
                                type="email"
                                placeholder="Your Email"
                                class="
                                w-full
                                rounded
                                py-3
                                px-4
                                text-body-color text-base
                                border border-gray-100
                                outline-none
                                focus-visible:shadow-none
                                focus:border-primary
                                "
                                />
                                @error('email') <span class="error text-red-500">{{ $message }}</span> @enderror
    
                        </div>
                        <div class="mb-6">
                            <input
                            name="subject"    
                                type="text"
                                placeholder="Subject"
                                class="
                                w-full
                                rounded
                                py-3
                                px-4
                                text-body-color text-base
                                border border-gray-100
                                outline-none
                                focus-visible:shadow-none
                                focus:border-primary
                                "
                                />
                                @error('subject') <span class="error text-red-500">{{ $message }}</span> @enderror
    
                        </div>
                        <div class="mb-6">
                            <textarea
                            name="message"    
                                rows="6"
                                placeholder="Your Message"
                                class="
                                w-full
                                rounded
                                py-3
                                px-4
                                text-body-color text-base
                                border border-gray-100
                                resize-none
                                outline-none
                                focus-visible:shadow-none
                                focus:border-primary
                                "
                                ></textarea>
                                @error('message') <span class="error text-red-500">{{ $message }}</span> @enderror
    
                        </div>
                        <div>
                            <button
                                type="submit"
                                class="
                                w-full
                                text-white
                                bg-red-500
                                rounded-md
                                p-3
                                transition
                                hover:bg-red-400
                                "
                                >
                            Send Message
                            </button>
                        </div>
                    </form>
                    <div>
                        <span class="absolute -right-10 top-[90px] z-[-1]">
                            <svg
                                width="34"
                                height="134"
                                viewBox="0 0 34 134"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                                >
                                <circle
                                cx="31.9993"
                                cy="132"
                                r="1.66667"
                                transform="rotate(180 31.9993 132)"
                                fill="#2424ff"
                                />
                                <circle
                                cx="31.9993"
                                cy="117.333"
                                r="1.66667"
                                transform="rotate(180 31.9993 117.333)"
                                fill="#2424ff"
                                />
                                <circle
                                cx="31.9993"
                                cy="102.667"
                                r="1.66667"
                                transform="rotate(180 31.9993 102.667)"
                                fill="#2424ff"
                                />
                                <circle
                                cx="31.9993"
                                cy="88"
                                r="1.66667"
                                transform="rotate(180 31.9993 88)"
                                fill="#2424ff"
                                />
                                <circle
                                cx="31.9993"
                                cy="73.3333"
                                r="1.66667"
                                transform="rotate(180 31.9993 73.3333)"
                                fill="#2424ff"
                                />
                                <circle
                                cx="31.9993"
                                cy="45"
                                r="1.66667"
                                transform="rotate(180 31.9993 45)"
                                fill="#2424ff"
                                />
                                <circle
                                cx="31.9993"
                                cy="16"
                                r="1.66667"
                                transform="rotate(180 31.9993 16)"
                                fill="#2424ff"
                                />
                                <circle
                                cx="31.9993"
                                cy="59"
                                r="1.66667"
                                transform="rotate(180 31.9993 59)"
                                fill="#2424ff"
                                />
                                <circle
                                cx="31.9993"
                                cy="30.6666"
                                r="1.66667"
                                transform="rotate(180 31.9993 30.6666)"
                                fill="#2424ff"
                                />
                                <circle
                                cx="31.9993"
                                cy="1.66665"
                                r="1.66667"
                                transform="rotate(180 31.9993 1.66665)"
                                fill="#2424ff"
                                />
                                <circle
                                cx="17.3333"
                                cy="132"
                                r="1.66667"
                                transform="rotate(180 17.3333 132)"
                                fill="#2424ff"
                                />
                                <circle
                                cx="17.3333"
                                cy="117.333"
                                r="1.66667"
                                transform="rotate(180 17.3333 117.333)"
                                fill="#2424ff"
                                />
                                <circle
                                cx="17.3333"
                                cy="102.667"
                                r="1.66667"
                                transform="rotate(180 17.3333 102.667)"
                                fill="#2424ff"
                                />
                                <circle
                                cx="17.3333"
                                cy="88"
                                r="1.66667"
                                transform="rotate(180 17.3333 88)"
                                fill="#2424ff"
                                />
                                <circle
                                cx="17.3333"
                                cy="73.3333"
                                r="1.66667"
                                transform="rotate(180 17.3333 73.3333)"
                                fill="#2424ff"
                                />
                                <circle
                                cx="17.3333"
                                cy="45"
                                r="1.66667"
                                transform="rotate(180 17.3333 45)"
                                fill="#2424ff"
                                />
                                <circle
                                cx="17.3333"
                                cy="16"
                                r="1.66667"
                                transform="rotate(180 17.3333 16)"
                                fill="#2424ff"
                                />
                                <circle
                                cx="17.3333"
                                cy="59"
                                r="1.66667"
                                transform="rotate(180 17.3333 59)"
                                fill="#2424ff"
                                />
                                <circle
                                cx="17.3333"
                                cy="30.6666"
                                r="1.66667"
                                transform="rotate(180 17.3333 30.6666)"
                                fill="#2424ff"
                                />
                                <circle
                                cx="17.3333"
                                cy="1.66665"
                                r="1.66667"
                                transform="rotate(180 17.3333 1.66665)"
                                fill="#2424ff"
                                />
                                <circle
                                cx="2.66536"
                                cy="132"
                                r="1.66667"
                                transform="rotate(180 2.66536 132)"
                                fill="#2424ff"
                                />
                                <circle
                                cx="2.66536"
                                cy="117.333"
                                r="1.66667"
                                transform="rotate(180 2.66536 117.333)"
                                fill="#2424ff"
                                />
                                <circle
                                cx="2.66536"
                                cy="102.667"
                                r="1.66667"
                                transform="rotate(180 2.66536 102.667)"
                                fill="#2424ff"
                                />
                                <circle
                                cx="2.66536"
                                cy="88"
                                r="1.66667"
                                transform="rotate(180 2.66536 88)"
                                fill="#2424ff"
                                />
                                <circle
                                cx="2.66536"
                                cy="73.3333"
                                r="1.66667"
                                transform="rotate(180 2.66536 73.3333)"
                                fill="#2424ff"
                                />
                                <circle
                                cx="2.66536"
                                cy="45"
                                r="1.66667"
                                transform="rotate(180 2.66536 45)"
                                fill="#2424ff"
                                />
                                <circle
                                cx="2.66536"
                                cy="16"
                                r="1.66667"
                                transform="rotate(180 2.66536 16)"
                                fill="#2424ff"
                                />
                                <circle
                                cx="2.66536"
                                cy="59"
                                r="1.66667"
                                transform="rotate(180 2.66536 59)"
                                fill="#2424ff"
                                />
                                <circle
                                cx="2.66536"
                                cy="30.6666"
                                r="1.66667"
                                transform="rotate(180 2.66536 30.6666)"
                                fill="#2424ff"
                                />
                                <circle
                                cx="2.66536"
                                cy="1.66665"
                                r="1.66667"
                                transform="rotate(180 2.66536 1.66665)"
                                fill="#2424ff"
                                />
                            </svg>
                        </span>
                        <span class="absolute -left-7 -bottom-7 z-[-1]">
                            <svg
                                width="107"
                                height="134"
                                viewBox="0 0 107 134"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                                >
                                <circle
                                cx="104.999"
                                cy="132"
                                r="1.66667"
                                transform="rotate(180 104.999 132)"
                                fill="#2424ff"
                                />
                                <circle
                                cx="104.999"
                                cy="117.333"
                                r="1.66667"
                                transform="rotate(180 104.999 117.333)"
                                fill="#2424ff"
                                />
                                <circle
                                cx="104.999"
                                cy="102.667"
                                r="1.66667"
                                transform="rotate(180 104.999 102.667)"
                                fill="#2424ff"
                                />
                                <circle
                                cx="104.999"
                                cy="88"
                                r="1.66667"
                                transform="rotate(180 104.999 88)"
                                fill="#2424ff"
                                />
                                <circle
                                cx="104.999"
                                cy="73.3333"
                                r="1.66667"
                                transform="rotate(180 104.999 73.3333)"
                                fill="#2424ff"
                                />
                                <circle
                                cx="104.999"
                                cy="45"
                                r="1.66667"
                                transform="rotate(180 104.999 45)"
                                fill="#2424ff"
                                />
                                <circle
                                cx="104.999"
                                cy="16"
                                r="1.66667"
                                transform="rotate(180 104.999 16)"
                                fill="#2424ff"
                                />
                                <circle
                                cx="104.999"
                                cy="59"
                                r="1.66667"
                                transform="rotate(180 104.999 59)"
                                fill="#2424ff"
                                />
                                <circle
                                cx="104.999"
                                cy="30.6666"
                                r="1.66667"
                                transform="rotate(180 104.999 30.6666)"
                                fill="#2424ff"
                                />
                                <circle
                                cx="104.999"
                                cy="1.66665"
                                r="1.66667"
                                transform="rotate(180 104.999 1.66665)"
                                fill="#2424ff"
                                />
                                <circle
                                cx="90.3333"
                                cy="132"
                                r="1.66667"
                                transform="rotate(180 90.3333 132)"
                                fill="#2424ff"
                                />
                                <circle
                                cx="90.3333"
                                cy="117.333"
                                r="1.66667"
                                transform="rotate(180 90.3333 117.333)"
                                fill="#2424ff"
                                />
                                <circle
                                cx="90.3333"
                                cy="102.667"
                                r="1.66667"
                                transform="rotate(180 90.3333 102.667)"
                                fill="#2424ff"
                                />
                                <circle
                                cx="90.3333"
                                cy="88"
                                r="1.66667"
                                transform="rotate(180 90.3333 88)"
                                fill="#2424ff"
                                />
                                <circle
                                cx="90.3333"
                                cy="73.3333"
                                r="1.66667"
                                transform="rotate(180 90.3333 73.3333)"
                                fill="#2424ff"
                                />
                                <circle
                                cx="90.3333"
                                cy="45"
                                r="1.66667"
                                transform="rotate(180 90.3333 45)"
                                fill="#2424ff"
                                />
                                <circle
                                cx="90.3333"
                                cy="16"
                                r="1.66667"
                                transform="rotate(180 90.3333 16)"
                                fill="#2424ff"
                                />
                                <circle
                                cx="90.3333"
                                cy="59"
                                r="1.66667"
                                transform="rotate(180 90.3333 59)"
                                fill="#2424ff"
                                />
                                <circle
                                cx="90.3333"
                                cy="30.6666"
                                r="1.66667"
                                transform="rotate(180 90.3333 30.6666)"
                                fill="#2424ff"
                                />
                                <circle
                                cx="90.3333"
                                cy="1.66665"
                                r="1.66667"
                                transform="rotate(180 90.3333 1.66665)"
                                fill="#2424ff"
                                />
                                <circle
                                cx="75.6654"
                                cy="132"
                                r="1.66667"
                                transform="rotate(180 75.6654 132)"
                                fill="#2424ff"
                                />
                                <circle
                                cx="31.9993"
                                cy="132"
                                r="1.66667"
                                transform="rotate(180 31.9993 132)"
                                fill="#2424ff"
                                />
                                <circle
                                cx="75.6654"
                                cy="117.333"
                                r="1.66667"
                                transform="rotate(180 75.6654 117.333)"
                                fill="#2424ff"
                                />
                                <circle
                                cx="31.9993"
                                cy="117.333"
                                r="1.66667"
                                transform="rotate(180 31.9993 117.333)"
                                fill="#2424ff"
                                />
                                <circle
                                cx="75.6654"
                                cy="102.667"
                                r="1.66667"
                                transform="rotate(180 75.6654 102.667)"
                                fill="#2424ff"
                                />
                                <circle
                                cx="31.9993"
                                cy="102.667"
                                r="1.66667"
                                transform="rotate(180 31.9993 102.667)"
                                fill="#2424ff"
                                />
                                <circle
                                cx="75.6654"
                                cy="88"
                                r="1.66667"
                                transform="rotate(180 75.6654 88)"
                                fill="#2424ff"
                                />
                                <circle
                                cx="31.9993"
                                cy="88"
                                r="1.66667"
                                transform="rotate(180 31.9993 88)"
                                fill="#2424ff"
                                />
                                <circle
                                cx="75.6654"
                                cy="73.3333"
                                r="1.66667"
                                transform="rotate(180 75.6654 73.3333)"
                                fill="#2424ff"
                                />
                                <circle
                                cx="31.9993"
                                cy="73.3333"
                                r="1.66667"
                                transform="rotate(180 31.9993 73.3333)"
                                fill="#2424ff"
                                />
                                <circle
                                cx="75.6654"
                                cy="45"
                                r="1.66667"
                                transform="rotate(180 75.6654 45)"
                                fill="#2424ff"
                                />
                                <circle
                                cx="31.9993"
                                cy="45"
                                r="1.66667"
                                transform="rotate(180 31.9993 45)"
                                fill="#2424ff"
                                />
                                <circle
                                cx="75.6654"
                                cy="16"
                                r="1.66667"
                                transform="rotate(180 75.6654 16)"
                                fill="#2424ff"
                                />
                                <circle
                                cx="31.9993"
                                cy="16"
                                r="1.66667"
                                transform="rotate(180 31.9993 16)"
                                fill="#2424ff"
                                />
                                <circle
                                cx="75.6654"
                                cy="59"
                                r="1.66667"
                                transform="rotate(180 75.6654 59)"
                                fill="#2424ff"
                                />
                                <circle
                                cx="31.9993"
                                cy="59"
                                r="1.66667"
                                transform="rotate(180 31.9993 59)"
                                fill="#2424ff"
                                />
                                <circle
                                cx="75.6654"
                                cy="30.6666"
                                r="1.66667"
                                transform="rotate(180 75.6654 30.6666)"
                                fill="#2424ff"
                                />
                                <circle
                                cx="31.9993"
                                cy="30.6666"
                                r="1.66667"
                                transform="rotate(180 31.9993 30.6666)"
                                fill="#2424ff"
                                />
                                <circle
                                cx="75.6654"
                                cy="1.66665"
                                r="1.66667"
                                transform="rotate(180 75.6654 1.66665)"
                                fill="#2424ff"
                                />
                                <circle
                                cx="31.9993"
                                cy="1.66665"
                                r="1.66667"
                                transform="rotate(180 31.9993 1.66665)"
                                fill="#2424ff"
                                />
                                <circle
                                cx="60.9993"
                                cy="132"
                                r="1.66667"
                                transform="rotate(180 60.9993 132)"
                                fill="#2424ff"
                                />
                                <circle
                                cx="17.3333"
                                cy="132"
                                r="1.66667"
                                transform="rotate(180 17.3333 132)"
                                fill="#2424ff"
                                />
                                <circle
                                cx="60.9993"
                                cy="117.333"
                                r="1.66667"
                                transform="rotate(180 60.9993 117.333)"
                                fill="#2424ff"
                                />
                                <circle
                                cx="17.3333"
                                cy="117.333"
                                r="1.66667"
                                transform="rotate(180 17.3333 117.333)"
                                fill="#2424ff"
                                />
                                <circle
                                cx="60.9993"
                                cy="102.667"
                                r="1.66667"
                                transform="rotate(180 60.9993 102.667)"
                                fill="#2424ff"
                                />
                                <circle
                                cx="17.3333"
                                cy="102.667"
                                r="1.66667"
                                transform="rotate(180 17.3333 102.667)"
                                fill="#2424ff"
                                />
                                <circle
                                cx="60.9993"
                                cy="88"
                                r="1.66667"
                                transform="rotate(180 60.9993 88)"
                                fill="#2424ff"
                                />
                                <circle
                                cx="17.3333"
                                cy="88"
                                r="1.66667"
                                transform="rotate(180 17.3333 88)"
                                fill="#2424ff"
                                />
                                <circle
                                cx="60.9993"
                                cy="73.3333"
                                r="1.66667"
                                transform="rotate(180 60.9993 73.3333)"
                                fill="#2424ff"
                                />
                                <circle
                                cx="17.3333"
                                cy="73.3333"
                                r="1.66667"
                                transform="rotate(180 17.3333 73.3333)"
                                fill="#2424ff"
                                />
                                <circle
                                cx="60.9993"
                                cy="45"
                                r="1.66667"
                                transform="rotate(180 60.9993 45)"
                                fill="#2424ff"
                                />
                                <circle
                                cx="17.3333"
                                cy="45"
                                r="1.66667"
                                transform="rotate(180 17.3333 45)"
                                fill="#2424ff"
                                />
                                <circle
                                cx="60.9993"
                                cy="16"
                                r="1.66667"
                                transform="rotate(180 60.9993 16)"
                                fill="#2424ff"
                                />
                                <circle
                                cx="17.3333"
                                cy="16"
                                r="1.66667"
                                transform="rotate(180 17.3333 16)"
                                fill="#2424ff"
                                />
                                <circle
                                cx="60.9993"
                                cy="59"
                                r="1.66667"
                                transform="rotate(180 60.9993 59)"
                                fill="#2424ff"
                                />
                                <circle
                                cx="17.3333"
                                cy="59"
                                r="1.66667"
                                transform="rotate(180 17.3333 59)"
                                fill="#2424ff"
                                />
                                <circle
                                cx="60.9993"
                                cy="30.6666"
                                r="1.66667"
                                transform="rotate(180 60.9993 30.6666)"
                                fill="#2424ff"
                                />
                                <circle
                                cx="17.3333"
                                cy="30.6666"
                                r="1.66667"
                                transform="rotate(180 17.3333 30.6666)"
                                fill="#2424ff"
                                />
                                <circle
                                cx="60.9993"
                                cy="1.66665"
                                r="1.66667"
                                transform="rotate(180 60.9993 1.66665)"
                                fill="#2424ff"
                                />
                                <circle
                                cx="17.3333"
                                cy="1.66665"
                                r="1.66667"
                                transform="rotate(180 17.3333 1.66665)"
                                fill="#2424ff"
                                />
                                <circle
                                cx="46.3333"
                                cy="132"
                                r="1.66667"
                                transform="rotate(180 46.3333 132)"
                                fill="#2424ff"
                                />
                                <circle
                                cx="2.66536"
                                cy="132"
                                r="1.66667"
                                transform="rotate(180 2.66536 132)"
                                fill="#2424ff"
                                />
                                <circle
                                cx="46.3333"
                                cy="117.333"
                                r="1.66667"
                                transform="rotate(180 46.3333 117.333)"
                                fill="#2424ff"
                                />
                                <circle
                                cx="2.66536"
                                cy="117.333"
                                r="1.66667"
                                transform="rotate(180 2.66536 117.333)"
                                fill="#2424ff"
                                />
                                <circle
                                cx="46.3333"
                                cy="102.667"
                                r="1.66667"
                                transform="rotate(180 46.3333 102.667)"
                                fill="#ff2424"
                                />
                                <circle
                                cx="2.66536"
                                cy="102.667"
                                r="1.66667"
                                transform="rotate(180 2.66536 102.667)"
                                fill="#2424ff"
                                />
                                <circle
                                cx="46.3333"
                                cy="88"
                                r="1.66667"
                                transform="rotate(180 46.3333 88)"
                                fill="#2424ff"
                                />
                                <circle
                                cx="2.66536"
                                cy="88"
                                r="1.66667"
                                transform="rotate(180 2.66536 88)"
                                fill="#2424ff"
                                />
                                <circle
                                cx="46.3333"
                                cy="73.3333"
                                r="1.66667"
                                transform="rotate(180 46.3333 73.3333)"
                                fill="#2424ff"
                                />
                                <circle
                                cx="2.66536"
                                cy="73.3333"
                                r="1.66667"
                                transform="rotate(180 2.66536 73.3333)"
                                fill="#2424ff"
                                />
                                <circle
                                cx="46.3333"
                                cy="45"
                                r="1.66667"
                                transform="rotate(180 46.3333 45)"
                                fill="#2424ff"
                                />
                                <circle
                                cx="2.66536"
                                cy="45"
                                r="1.66667"
                                transform="rotate(180 2.66536 45)"
                                fill="#2424ff"
                                />
                                <circle
                                cx="46.3333"
                                cy="16"
                                r="1.66667"
                                transform="rotate(180 46.3333 16)"
                                fill="#2424ff"
                                />
                                <circle
                                cx="2.66536"
                                cy="16"
                                r="1.66667"
                                transform="rotate(180 2.66536 16)"
                                fill="#2424ff"
                                />
                                <circle
                                cx="46.3333"
                                cy="59"
                                r="1.66667"
                                transform="rotate(180 46.3333 59)"
                                fill="#2424ff"
                                />
                                <circle
                                cx="2.66536"
                                cy="59"
                                r="1.66667"
                                transform="rotate(180 2.66536 59)"
                                fill="#2424ff"
                                />
                                <circle
                                cx="46.3333"
                                cy="30.6666"
                                r="1.66667"
                                transform="rotate(180 46.3333 30.6666)"
                                fill="#2424ff"
                                />
                                <circle
                                cx="2.66536"
                                cy="30.6666"
                                r="1.66667"
                                transform="rotate(180 2.66536 30.6666)"
                                fill="#2424ff"
                                />
                                <circle
                                cx="46.3333"
                                cy="1.66665"
                                r="1.66667"
                                transform="rotate(180 46.3333 1.66665)"
                                fill="#2424ff"
                                />
                                <circle
                                cx="2.66536"
                                cy="1.66665"
                                r="1.66667"
                                transform="rotate(180 2.66536 1.66665)"
                                fill="#2424ff"
                                />
                            </svg>
                        </span>
                    </div>
                    </div>
                </div>
                <div class="lg:w-1/2 px-4">
                    
                    <section class="w-full max-w-2xl px-6 py-4 mx-auto bg-white rounded-md shadow-2xl mt-10 md:mt-0">
                        <h2 class="text-3xl font-semibold text-center text-gray-800">Get in touch</h2>
                        
                        <h2 class="text-3xl font-semibold text-center text-gray-800 mt-10">Dubai</h2>
                        <p class="text-center">Liberty Building | Office 209 | Al Garhoud</p>
                        <div class="grid grid-cols-1 gap-6 mt-6 sm:grid-cols-2 md:grid-cols-2 text-center">
    
                            <a href="#" class="flex flex-col items-center px-4 py-3 text-gray-700 transition-colors duration-200 transform rounded-md hover:bg-blue-200">
                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                                </svg>
    
                                <span class="mt-2">T: +971 (0)42831321</span>
                                <span class="mt-2">F: +971 (0)42831377</span>
                            </a>
    
                            <a href="#" class="flex flex-col items-center px-4 py-3 text-gray-700 transition-colors duration-200 transform rounded-md hover:bg-blue-200">
                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                                </svg>
    
                                <span class="mt-2">fire@lockecarey.com</span>
                            </a>
                        </div>
                        
                        <h2 class="text-3xl font-semibold text-center text-gray-800 mt-10">Abu Dhabi</h2>
                        <p class="text-center">C 54 Building | Office 601 | Al Nahyan Camp</p>
                        <div class="grid grid-cols-1 gap-6 mt-6 sm:grid-cols-2 md:grid-cols-2 text-center">
    
                            <a href="#" class="flex flex-col items-center px-4 py-3 text-gray-700 transition-colors duration-200 transform rounded-md hover:bg-blue-200">
                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                                </svg>
    
                                <span class="mt-2">T: +971 (0)26431831</span>
                                <span class="mt-2">F: +971 (0)26431832</span>
                            </a>
    
                            <a href="#" class="flex flex-col items-center px-4 py-3 text-gray-700 transition-colors duration-200 transform rounded-md hover:bg-blue-200">
                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                                </svg>
    
                                <span class="mt-2">abhabid@lockecarey.com</span>
                            </a>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>
    
@endsection