<div class="flex flex-col items-center min-h-screen pt-6 bg-gray-100 sm:justify-center sm:pt-0">
    <div>
        <a href="#" class="flex items-center">
            <div class="w-32 h-32 overflow-hidden rounded-full sm:w-40 sm:h-40">
                <img src="{{ asset('images/logo.png') }}" alt="ReadConnect Logo" class="object-cover w-full h-full" />
            </div>
        </a>     
   
    </div>

    <div class="w-full px-6 py-4 mt-6 overflow-hidden bg-white shadow-md sm:max-w-md sm:rounded-lg">
        {{ $slot }}
    </div>
</div>
