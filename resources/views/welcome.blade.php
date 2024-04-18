<x-guest-layout >
    <header>
        <nav class="bg-white border-gray-200 px-4 lg:px-6 py-2.5 dark:bg-gray-800">
            <div class="flex flex-wrap items-center justify-between max-w-screen-xl mx-auto">
                <a href="#" class="flex items-center">
                    <div class="w-12 h-12 overflow-hidden rounded-full sm:w-12 sm:h-12">
                        <img src="{{asset('images/logo.png')}}" alt="Flowbite Logo" class="object-cover w-full h-full" />
                    </div>
                    <span class="self-center ml-2 text-xl font-semibold whitespace-nowrap dark:text-white">ReadConnect</span>
                </a>


                <div class="flex items-center lg:order-2">
                    @if (Route::has('login'))

                        @auth
                            <a href="{{ url('/dashboard') }}"
                                class="text-white bg-blue-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}"
                                class="text-gray-800 dark:text-white hover:bg-gray-50 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 dark:hover:bg-gray-700 focus:outline-none dark:focus:ring-gray-800">Log
                                in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}"
                                    class="text-white bg-blue-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">Register</a>
                            @endif
                        @endauth

                    @endif
                    <button data-collapse-toggle="mobile-menu-2" type="button"
                        class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                        aria-controls="mobile-menu-2" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
                <div class="items-center justify-between hidden w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
                    <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                        <li>
                            <a href="#home"
                                class="block py-2 pl-3 pr-4 text-blue-700 rounded lg:bg-transparent lg:text-primary-700 lg:p-0 dark:text-white"
                                aria-current="page">Home</a>
                        </li>
                        <li>
                            <a href="#company"
                                class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Company</a>
                        </li>
                        <li>
                            <a href="#features"
                                class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Features</a>
                        </li>
                        <li>
                            <a href="#team"
                                class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Team</a>
                        </li>
                        <li>
                            <a href="#contact"
                                class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <section id="home" class="bg-white dark:bg-gray-900">
        <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
            <div class="mr-auto place-self-center lg:col-span-7">
                <h1 class="max-w-2xl mb-4 text-4xl font-extrabold leading-none md:text-5xl xl:text-6xl dark:text-white">
                    Soy Desarrollador de software</h1>
                <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">From
                    The Virtual Library: Explore, Learn and Discover with Our Online Library.</p>

            </div>
            <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
                <img src="{{asset('/images/landing_img.png')}}" alt="mockup">
            </div>
        </div>
    </section>


    <section id="features" class="bg-gray-50 dark:bg-gray-800">
        <div class="max-w-screen-xl px-4 py-8 mx-auto sm:py-16 lg:px-6">
            <div class="max-w-screen-md mb-8 lg:mb-16">
                <h2 class="mb-4 text-4xl font-extrabold text-gray-900 dark:text-white">Unleashing the
                    Power of Virtual
                    Libraries</h2>
                <p class="text-gray-500 sm:text-xl dark:text-gray-400">How Online Libraries are Revolutionizing the Way
                    We Learn, Access Information, Expand Our Knowledge, and Shape Our World</p>
            </div>
            <div class="space-y-8 md:grid md:grid-cols-2 lg:grid-cols-3 md:gap-12 md:space-y-0">
                <div>
                    <div
                        class="flex items-center justify-center w-10 h-10 mb-4 bg-orange-100 rounded-full lg:h-12 lg:w-12 dark:bg-orange-900">
                        <i class="text-orange-400 fa-solid fa-swatchbook"></i>
                    </div>
                    <h3 class="mb-2 text-xl font-bold dark:text-white">Access to a vast collection of books
                    </h3>
                    <p class="text-gray-500 dark:text-gray-400">WA virtual library provides access to an extensive
                        collection of books
                        on a wide range of topics. Users can easily search for and find books they are interested in,
                        without
                        having to physically visit a library.
                </div>
                <div>
                    <div
                        class="flex items-center justify-center w-10 h-10 mb-4 bg-yellow-100 rounded-full lg:h-12 lg:w-12 dark:bg-yellow-900">
                        <i class="text-yellow-500 fa-solid fa-circle-dollar-to-slot"></i>
                    </div>
                    <h3 class="mb-2 text-xl font-bold dark:text-white">Cost-effective</h3>
                    <p class="text-gray-500 dark:text-gray-400">Many virtual libraries offer free access to their
                        collection of books, making it a cost-effective option for users.

                    </p>
                </div>
                <div>
                    <div
                        class="flex items-center justify-center w-10 h-10 mb-4 rounded-full bg-lime-100 lg:h-12 lg:w-12 dark:bg-lime-900">
                        <i class="fa-solid fa-leaf text-lime-600"></i>
                    </div>
                    <h3 class="mb-2 text-xl font-bold dark:text-white">Eco-friendly</h3>
                    <p class="text-gray-500 dark:text-gray-400">A virtual library reduces the need for physical books,
                        which means fewer resources are used in the production and transportation of books. This makes
                        it an eco-friendly option for users.</p>
                </div>
                <div>
                    <div
                        class="flex items-center justify-center w-10 h-10 mb-4 bg-blue-100 rounded-full lg:h-12 lg:w-12 dark:bg-blue-900">
                        <i class="text-blue-600 fa-solid fa-desktop"></i>
                    </div>
                    <h3 class="mb-2 text-xl font-bold dark:text-white">User-friendly interface</h3>
                    <p class="text-gray-500 dark:text-gray-400">Many virtual libraries have a user-friendly interface
                        that allows users to
                        easily search for and find the books they need.</p>
                </div>
                <div>
                    <div
                        class="flex items-center justify-center w-10 h-10 mb-4 bg-yellow-100 rounded-full lg:h-12 lg:w-12 dark:bg-yellow-900">
                        <i class="text-yellow-600 fa-solid fa-hand-pointer"></i>
                    </div>
                    <h3 class="mb-2 text-xl font-bold dark:text-white">Interactive features</h3>
                    <p class="text-gray-500 dark:text-gray-400">Some virtual libraries offer interactive features, such
                        as discussion forums and
                        book clubs, which allow users to connect with other readers and discuss their favorite books.
                    </p>
                </div>
                <div>
                    <div
                        class="flex items-center justify-center w-10 h-10 mb-4 bg-red-100 rounded-full lg:h-12 lg:w-12 dark:bg-red-900">
                        <i class="text-red-600 fa-brands fa-phoenix-framework"></i>
                    </div>
                    <h3 class="mb-2 text-xl font-bold dark:text-white">Availability of rare books</h3>
                    <p class="text-gray-500 dark:text-gray-400">A virtual library may have access to rare or
                        hard-to-find books
                        that are not available in physical libraries, making it a valuable resource for researchers
                        and scholars.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white dark:bg-gray-900">
        <div class="items-center max-w-screen-xl gap-16 px-4 py-8 mx-auto lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
            <div class="font-light text-gray-500 sm:text-lg dark:text-gray-400">
                <h2 id="company" class="mb-4 text-4xl font-extrabold text-gray-900 dark:text-white">Unlocking
                    Knowledge, Empowering
                    Minds
                </h2>
                <p class="mb-4">Our company is dedicated to providing a comprehensive virtual library platform that
                    allows users
                    to access a wealth of knowledge and information from anywhere in the world. We believe that by
                    unlocking
                    knowledge, we can empower minds and help people achieve their fullest potential. Our platform offers
                    a wide
                    range of virtual books, journals, and other educational resources that cater to a diverse range of
                    interests
                    and learning styles.</p>
                <p>We are committed to providing a seamless user experience and ensuring that our users have access to
                    the
                    information they need to succeed in their personal and professional pursuits.</p>
            </div>
            <div class="grid grid-cols-2 gap-4 mt-8">
                <img class="w-full rounded-lg"
                    src="https://cdn.discordapp.com/attachments/1008571139821412372/1070761038154322041/Walters3_mistic_book_ef419ab0-2430-4f2c-a065-097674e6af4b.png"
                    alt="office content 1">
                <img class="w-full mt-4 rounded-lg lg:mt-10"
                    src="https://cdn.discordapp.com/attachments/1021189063262351390/1058042361315348500/dmek_teenager_studiying_in_his_room_Big_Window_with_futuristic__dadfcdb5-7652-490d-a790-e76258273836.png"
                    alt="office content 2">
            </div>
        </div>
    </section>

    <section class="bg-white dark:bg-gray-900">
        <div class="max-w-screen-xl px-4 py-8 mx-auto lg:py-16 lg:px-6">
            <div class="max-w-screen-lg text-gray-500 sm:text-lg dark:text-gray-400">
                <h2 id="contact" class="mb-4 text-4xl font-bold text-gray-900 dark:text-white">Powering innovation
                    at companies worldwide</h2>
                <p class="mb-4 font-light">We'd love to hear from you! If you have any questions, suggestions, or
                    feedback about our virtual library, please don't hesitate to get in touch. You can reach us by
                    phone, email, or through the contact form below. Our dedicated team is always here to help and is
                    committed to providing you with the best possible experience.</p>
                <p class="mb-4 font-medium">If you have any questions or feedback, please don't hesitate to reach out
                    to us at <span class="text-blue-600">info@virtuallibrary.com</span> or give us a call at <span class="text-blue-600">+1 (555) 123-4567</span>. Our team is always happy to
                    assist you!</p>
            </div>
        </div>
    </section>

    <section class="bg-gray-50 dark:bg-gray-900">
        <div class="max-w-screen-xl px-4 py-8 mx-auto sm:py-16 lg:px-6">
            <div class="max-w-screen-sm mx-auto text-center">
                <h2 class="mb-4 text-4xl font-extrabold leading-tight text-gray-900 dark:text-white">Starting Using the
                    system</h2>
                <p class="mb-6 font-light text-gray-500 dark:text-gray-400 md:text-lg">Try now, the beta system, an try
                    the all funcionalities.</p>
                <a href="#"
                    class="text-white bg-blue-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">
                    Get Started!
                </a>
            </div>
        </div>
    </section>

    <x-footer />
</x-guest-layout>
