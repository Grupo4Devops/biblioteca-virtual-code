<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Generado por IA BEGIN -->
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="container mx-auto px-4 py-8">
                    <div class="flex justify-between items-center mb-8">
                        <h1 class="mb-2 text-3xl font-bold tracking-tight text-gray-900 dark:text-gray-900">Welcome to
                            the Virtual Library System</h1>
                        <a href="{{ route('books.index') }}"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Browse Books</a>
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
                        <div class="bg-white rounded-lg p-8 shadow">
                            <h2 class="text-xl font-bold mb-4">Library Catalog</h2>
                            <p class="text-gray-600">Browse our collection of books by subject or author.</p>
                            <a href="{{ route('books.index') }}"
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4 inline-block">View
                                Catalog</a>
                        </div>
                        <div class="bg-white rounded-lg p-8 shadow">
                            <h2 class="text-xl font-bold mb-4">User Account</h2>
                            <p class="text-gray-600">Create an account to borrow books, track your reading history, and
                                more.</p>
                            <a href="{{ route('profile.show') }}"
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4 inline-block">View
                                Account</a>
                        </div>
                        <div class="bg-white rounded-lg p-8 shadow">
                            <h2 class="text-xl font-bold mb-4">Reading Recommendations</h2>
                            <p class="text-gray-600">Get personalized reading recommendations based on your interests
                                and reading history.</p>
                            <a href="#recommendations"
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4 inline-block">Get
                                Recommendations</a>
                        </div>
                    </div>
                </div>
                <!-- Generado por IA END -->

                <div class="container mx-auto px-4 py-8">
                    <div class="relative w-full">
                        <!-- Carousel wrapper -->
                        <div class="relative h-56 overflow-hidden rounded-lg sm:h-64 xl:h-80 2xl:h-96">
                            <!-- Item 1 -->
                            <div id="carousel-item-1" class="hidden duration-700 ease-in-out">
                                <img src="{{ asset('/images/manybooks.png') }}"
                                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                    alt="...">
                                <div class="relative top-500 top-2/3 px-4 py-2 opacity-100 ">
                                    <h2 class="text-xl text-white font-bold text-center ">Read all time</h3>
                                        <h2 class="text-xs text-white font-semibold text-center ">Experience the joy of
                                            reading from anywhere, anytime</h3>
                                </div>
                            </div>
                            <!-- Item 2 -->
                            <div id="carousel-item-2" class="hidden duration-700 ease-in-out">
                                <img src="{{ asset('/images/homeRead.png') }}"
                                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                    alt="...">
                                <div class="relative top-500 top-2/3 px-4 py-2 opacity-100 ">
                                    <h2 class="text-xl text-white font-bold text-center ">In your home</h3>
                                        <h2 class="text-xs text-white font-semibold text-center ">Explore endless
                                            possibilities with virtual books</h3>
                                </div>
                            </div>
                            <!-- Item 3 -->
                            <div id="carousel-item-3" class="hidden duration-700 ease-in-out">
                                <img src="{{ asset('/images/imagination.png') }}"
                                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                    alt="...">
                                <div class="relative top-500 top-2/3 px-4 py-2 opacity-100 ">
                                    <h2 class="text-xl text-white font-bold text-center ">Be Creative</h3>
                                        <h2 class="text-xs text-white font-semibold text-center ">Discover the power of
                                            imagination through virtual books</h3>
                                </div>
                            </div>
                            <!-- Item 4 -->
                            <div id="carousel-item-4" class="hidden duration-700 ease-in-out">
                                <img src="{{ asset('/images/literatureBooks.png') }}"
                                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                    alt="...">
                                <div class="relative top-500 top-2/3 px-4 py-2 opacity-100 ">
                                    <h2 class="text-xl text-white font-bold text-center ">Just one click</h3>
                                        <h2 class="text-xs text-white font-semibold text-center ">Expand your mind with
                                            the click of a button</h3>
                                </div>
                            </div>
                        </div>
                        <!-- Slider indicators -->
                        <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
                            <button id="carousel-indicator-1" type="button" class="w-3 h-3 rounded-full"
                                aria-current="true" aria-label="Slide 1"></button>
                            <button id="carousel-indicator-2" type="button" class="w-3 h-3 rounded-full"
                                aria-current="false" aria-label="Slide 2"></button>
                            <button id="carousel-indicator-3" type="button" class="w-3 h-3 rounded-full"
                                aria-current="false" aria-label="Slide 3"></button>
                            <button id="carousel-indicator-4" type="button" class="w-3 h-3 rounded-full"
                                aria-current="false" aria-label="Slide 4"></button>
                        </div>
                        <!-- Slider controls -->
                        <button id="data-carousel-prev" type="button"
                            class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none">
                            <span
                                class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 19l-7-7 7-7"></path>
                                </svg>
                                <span class="hidden">Previous</span>
                            </span>
                        </button>
                        <button id="data-carousel-next" type="button"
                            class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none">
                            <span
                                class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7">
                                    </path>
                                </svg>
                                <span class="hidden">Next</span>
                            </span>
                        </button>
                    </div>
                </div>
                <div class="container mx-auto px-4 py-8">
                    <div class="flex justify-between items-center mb-8">
                        <h1 id="recommendations" class="text-3xl font-bold">Reading Recommendations</h1>
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 gap-8">
                        <div class="bg-white">
                            <h2 class="text-xl font-bold mb-4">Recommendations</h2>
                            <video class="w-full rounded-lg" controls>
                                <source src="https://flowbite.com/docs/videos/flowbite.mp4" type="video/mp4">
                            </video>
                        </div>
                        <div class="bg-white pt-8">
                            <h2 class="text-xl font-bold mb-4">Benefits Virtual Books</h2>
                            <ol
                                class="relative text-gray-500 border-l border-gray-200 dark:border-gray-700 dark:text-gray-400">
                                <li class="mb-10 ml-6">
                                    <span
                                        class="absolute flex items-center justify-center w-8 h-8 bg-blue-400 rounded-full -left-4 ring-4 ring-white dark:ring-blue-900 dark:bg-blue-900">
                                        <i class="fa-solid fa-swatchbook text-blue-50"></i>
                                    </span>
                                    <h3 class="font-medium leading-tight text-blue-500">Convenience</h3>
                                    <p class="text-sm">You can carry thousands of books on a single device.</p>
                                </li>
                                <li class="mb-10 ml-6">
                                    <span
                                        class="absolute flex items-center justify-center w-8 h-8 bg-orange-400 rounded-full -left-4 ring-4 ring-white dark:ring-orange-900 dark:bg-orange-900">
                                        <i class="fa-solid fa-house-laptop text-orange-50"></i>
                                    </span>
                                    <h3 class="font-medium leading-tight text-orange-400">Accessibility</h3>
                                    <p class="text-sm">People with disabilities can enjoy virtual books with
                                        features such as text-to-speech.</p>
                                </li>
                                <li class="mb-10 ml-6">
                                    <span
                                        class="absolute flex items-center justify-center w-8 h-8 bg-purple-400 rounded-full -left-4 ring-4 ring-white dark:ring-purple-900 dark:bg-purple-900">
                                        <i class="fa-brands fa-searchengin text-purple-50"></i>
                                    </span>
                                    <h3 class="font-medium leading-tight text-purple-400">Searchability</h3>
                                    <p class="text-sm">You can easily search for specific content within a
                                        virtual book.</p>
                                </li>
                                <li class="ml-6">
                                    <span
                                        class="absolute flex items-center justify-center w-8 h-8 bg-lime-500 rounded-full -left-4 ring-4 ring-white dark:ring-lime-900 dark:bg-lime-700">
                                        <i class="fa-solid fa-leaf text-lime-50"></i>
                                    </span>
                                    <h3 class="font-medium leading-tight text-lime-600">Environmental-friendly</h3>
                                    <p class="text-sm">EVirtual books save trees and reduce carbon
                                        emissions.</p>
                                </li>
                            </ol>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
        <script>
            const items = [{
                    position: 0,
                    el: document.getElementById('carousel-item-1')
                },
                {
                    position: 1,
                    el: document.getElementById('carousel-item-2')
                },
                {
                    position: 2,
                    el: document.getElementById('carousel-item-3')
                },
                {
                    position: 3,
                    el: document.getElementById('carousel-item-4')
                },
            ];

            const options = {
                defaultPosition: 1,
                interval: 3000,

                indicators: {
                    activeClasses: 'bg-white dark:bg-gray-800',
                    inactiveClasses: 'bg-white/50 dark:bg-gray-800/50 hover:bg-white dark:hover:bg-gray-800',
                    items: [{
                            position: 0,
                            el: document.getElementById('carousel-indicator-1')
                        },
                        {
                            position: 1,
                            el: document.getElementById('carousel-indicator-2')
                        },
                        {
                            position: 2,
                            el: document.getElementById('carousel-indicator-3')
                        },
                        {
                            position: 3,
                            el: document.getElementById('carousel-indicator-4')
                        },
                    ]
                },


            };

            const carousel = new Carousel(items, options);
            carousel.cycle()
            const $prevButton = document.getElementById('data-carousel-prev');
            const $nextButton = document.getElementById('data-carousel-next');

            $prevButton.addEventListener('click', () => {
                carousel.prev();
            });

            $nextButton.addEventListener('click', () => {
                carousel.next();
            });
        </script>
    @endpush

</x-app-layout>
