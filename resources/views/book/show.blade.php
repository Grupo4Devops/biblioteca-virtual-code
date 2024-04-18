<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            See book
        </h2>
    </x-slot>
    <div class="py-5 shadow-xl mt-6 lg:mx-10 mx-10 bg-white rounded-xl grid grid-cols-12 mb-6">
        <div class="col-span-8 px-10 py-8">
            <div class="grid grid-cols-12 items-center">
                <div class="col-span-1 mx-1">
                    <img src="{{ asset($books->image) }}" width="100vh" />
                </div>
                <div class="col-span-11 mx-1">
                    <x-section-title>
                        <x-slot name="title">
                            <h1 class="text-3xl font-medium text-gray-900">{{ $books->title }}</h1>
                        </x-slot>
                        <x-slot name="description">
                            {{ $books->description }}
                            <x-label>
                                Autor:
                                {{ $books->author }}
                            </x-label>
                        </x-slot>
                        <x-slot name="aside">
                            <x-label>
                                Publicado por:
                                {{ $books->publisher }}
                                en
                                {{ $books->year_published }}
                            </x-label>
                        </x-slot>
                    </x-section-title>
                </div>
            </div>
            <div class="mt-8">
                <embed src="{{ $books->file }}" type="application/pdf" width="100%" height="600px"
                    style="margin-top: 2rem" />
            </div>
        </div>
        <div class="col-span-4 rounded-lg bg-gray-100 px-4 py-5">
            <h2 class="text-2xl font-medium text-gray-900 mb-5 inline-block">Reseñas</h2>
            <div class="mt-5">
                <div class="bg-white rounded-lg shadow-lg p-5 mb-5" style="overflow-y: auto; max-height: 600px;">
                    @foreach ($reviews as $review)
                        <div class="border-b border-gray-200 py-4">
                            <p class="text-gray-500">{{ $review->date }}</p>
                            <p class="text-lg font-medium mb-2">{{ $review->comment }}</p>
                            <div class="flex items-center">
                                @for ($i = 0; $i < $review->rating; $i++)
                                    <svg class="h-5 w-5 fill-current text-yellow-500 mr-1" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M19.159,7.24c-0.175-0.539-0.722-0.881-1.295-0.776l-5.732,0.828L10.91,2.68c-0.28-0.539-1.078-0.539-1.358,0   l-1.222,4.954L2.136,6.464c-0.573-0.105-1.119,0.237-1.295,0.776l-1.04,3.37c-0.176,0.539,0.132,1.118,0.655,1.266l4.842,1.676   L5.051,17.51c-0.175,0.538,0.132,1.117,0.655,1.266l3.861,1.118c0.263,0.105,0.542,0.105,0.805,0.001l3.861-1.118   c0.523-0.152,0.829-0.729,0.655-1.267l-1.524-4.954l4.842-1.676c0.523-0.148,0.831-0.727,0.655-1.266L19.159,7.24z" />
                                    </svg>
                                @endfor
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <x-button onclick="mostrarModal()"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Agregar Reseña
            </x-button>
            <div class="fixed z-10 inset-0 overflow-y-auto modal hidden">
                <div class="flex items-center justify-center min-h-screen px-4">
                    <div class="fixed z-10 inset-0 transition-opacity">
                        <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                    </div>
                    <div class="bg-white rounded-lg shadow-xl z-20 p-6 sm:mx-10 sm:w-full max-w-2xl">
                        <div class="sm:flex sm:items-start sm:justify-between">
                            <h3 class="text-lg leading-6 font-medium text-gray-900 mb-4 sm:mb-0">
                                Agregar Reseña
                            </h3>
                            <div class="mt-3 sm:mt-0 sm:ml-4">
                                <button onclick="ocultarModal()"
                                    class="text-gray-500 hover:text-gray-700 focus:outline-none">
                                    <span class="sr-only">Cerrar</span>
                                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="mt-6">
                            <form method="POST" action="{{ route('reviews.store', [$books->id]) }}">
                                @csrf
                                <div class="mb-4">
                                    <label for="comment" class="block text-gray-700 font-bold mb-2">
                                        Comentario
                                    </label>
                                    <textarea name="comment" id="comment"
                                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                        rows="4" placeholder="Escribe tu comentario aquí"></textarea>
                                </div>
                                <div class="mb-4">
                                    <label for="rating" class="block text-gray-700 font-bold mb-2">
                                        Calificación
                                    </label>
                                    <div class="container">
                                        <div class="star-box">
                                            <input type="radio" name="rating" id="rate1" value="1">
                                            <label for="rate1" class="fa fa-star"></label>

                                            <input type="radio" name="rating" id="rate2" value="2">
                                            <label for="rate2" class="fa fa-star"></label>

                                            <input type="radio" name="rating" id="rate3" value="3">
                                            <label for="rate3" class="fa fa-star"></label>

                                            <input type="radio" name="rating" id="rate4" value="4">
                                            <label for="rate4" class="fa fa-star"></label>

                                            <input type="radio" name="rating" id="rate5" value="5">
                                            <label for="rate5" class="fa fa-star"></label>
                                        </div>
                                        <span class="rate-text"></span>
                                    </div>
                                    <div class="flex justify-end mt-6">
                                        <x-button type="submit"
                                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                            Guardar
                                        </x-button>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<link rel="stylesheet" href="{{ asset('css/calificacion.css') }}" type="text/css">
<script src="{{ asset('js/calificacion.js') }}" type="text/javascript"></script>
<script>
    const modal = document.querySelector('.modal')

    function mostrarModal() {
        modal.classList.remove('hidden')

    }

    function ocultarModal() {
        modal.classList.add('hidden')
    }
</script>
