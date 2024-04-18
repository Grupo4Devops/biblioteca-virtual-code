<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Create Book
        </h2>
    </x-slot>

    <div class="py-5 shadow-xl mt-6 lg:mx-36 mx-10 bg-white rounded-xl">

        <div class="p-5">
            <form method="POST" action="{{ route('books.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="grid lg:grid-cols-2 grid-cols-1 gap-4">
                    <!-- Title -->
                    <div class="mb-4 col-span-1">
                        <x-label for="title" :value="__('Title:')" />

                        <x-input id="title" class="block mt-1 w-full" type="text" name="title"
                            :value="old('title')" autofocus />
                        @error('title')
                            <p class="text-red-500">You need to enter the title</p>
                        @enderror
                    </div>

                    <!-- Author -->
                    <div class="mb-4 col-span-1">
                        <x-label for="author" :value="__('Author:')" />

                        <x-input id="author" class="block mt-1 w-full" type="text" name="author"
                            :value="old('author')" />
                        @error('author')
                            <p class="text-red-500">You need to enter the author</p>
                        @enderror
                    </div>
                </div>

                <div class="grid lg:grid-cols-3 grid-cols-1 gap-4">
                    <!-- Publisher -->
                    <div class="mb-4 col-span-1">
                        <x-label for="publisher" :value="__('Publisher:')" />

                        <x-input id="publisher" class="block mt-1 w-full" type="text" name="publisher"
                            :value="old('publisher')" />
                        @error('publisher')
                            <p class="text-red-500">You need to enter the publisher</p>
                        @enderror
                    </div>

                    <!-- Year Published -->
                    <div class="mb-4 col-span-1">
                        <x-label for="year_published" :value="__('Year Published:')" />

                        <x-input id="year_published" class="block mt-1 w-full" type="number" name="year_published"
                            :value="old('year_published')" />

                        @error('year_published')
                            <p class="text-red-500">You need to enter the year published</p>
                        @enderror
                    </div>

                    <!-- Gender -->
                    <div class="mb-4 col-span-1">
                        <x-label for="gender_id" :value="__('Gender:')" />

                        <select name="gender_id" id="gender_id" class="block mt-1 w-full rounded-lg border-gray-300">
                            <option value="">-- Choose a Gender --</option>
                            @foreach ($genders as $gender)
                                <option value="{{ $gender->id }}">{{ $gender->name }}</option>
                            @endforeach
                        </select>

                        @error('gender_id')
                            <p class="text-red-500">You need to enter the year published</p>
                        @enderror
                    </div>
                </div>

                <!-- Description -->
                <div class="mb-4">
                    <x-label for="description" :value="__('Description:')" />

                    <textarea id="description" name="description" rows="3" class="form-input rounded-md shadow-sm mt-1 block w-full">{{ old('description') }}</textarea>

                    @error('description')
                        <p class="text-red-500">You need to enter the description</p>
                    @enderror
                </div>

                <div class="grid lg:grid-cols-2 grid-cols-1 gap-4">

                    <!-- Image -->
                    <div class="mb-4 col-span-1">
                        <x-label for="file" :value="__('Image:')" />

                        <div class="flex items-center justify-center w-full mt-1">
                            <label for="image"
                                class="flex flex-col items-center justify-center h-32 w-full border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                                <div class="flex flex-col items-center justify-center">
                                    <svg aria-hidden="true" class="w-10 h-10 mb-3 text-gray-400" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12">
                                        </path>
                                    </svg>
                                    <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span
                                            class="font-semibold">Click to upload</span> or drag and drop</p>
                                    <p class="text-xs text-gray-500 dark:text-gray-400">PDF</p>
                                </div>
                                <input id="image" name="image" type="file" class="hidden" />
                            </label>
                        </div>

                        @error('image')
                            <p class="text-red-500">You need to enter the image</p>
                        @enderror
                    </div>

                    <!-- File -->
                    <div class="mb-4 col-span-1">
                        <x-label for="file" :value="__('File:')" />

                        <div class="flex items-center justify-center w-full mt-1">
                            <label for="file"
                                class="flex flex-col items-center justify-center h-32 w-full border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                                <div class="flex flex-col items-center justify-center">
                                    <svg aria-hidden="true" class="w-10 h-10 mb-3 text-gray-400" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12">
                                        </path>
                                    </svg>
                                    <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span
                                            class="font-semibold">Click to upload</span> or drag and drop</p>
                                    <p class="text-xs text-gray-500 dark:text-gray-400">PDF</p>
                                </div>
                                <input id="file" name="file" type="file" class="hidden" />
                            </label>
                        </div>

                        @error('file')
                            <p class="text-red-500">You need to enter the file</p>
                        @enderror
                    </div>
                </div>

                @can('store books')
                    <div class="flex items-center justify-end mt-4">
                        <button class="text-white bg-black rounded-lg px-3 py-2 hover:bg-gray-800" type="submit">
                            CREATE
                        </button>
                    </div>
                @endcan
            </form>
        </div>
    </div>
</x-app-layout>
