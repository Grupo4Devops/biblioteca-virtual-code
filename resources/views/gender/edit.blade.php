<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Gender:
            <strong> {{ $gender->name }}</strong>
        </h2>
    </x-slot>
    <div class="py-5 shadow-xl mt-6 lg:mx-36 mx-10 bg-white rounded-xl mb-6">

        <div class="p-5">
            <form method="POST" action="{{ route('genders.update', $gender) }}">
                @csrf
                <div class="grid lg:grid-cols-2 grid-cols-1 gap-4">
                    <!-- Name -->
                    <div class="mb-4 col-span-1">
                        <x-label for="name" :value="__('Name:')" />

                        <x-input value="{{ $gender->name }}" id="name" class="block mt-1 w-full" type="text"
                            name="name" autofocus />
                        @error('name')
                            <p class="text-red-500">You need to enter the name</p>
                        @enderror
                    </div>

                </div>

                <div class="flex items-center justify-end mt-4">
                    @can('edit genders')
                        <button class="text-white bg-black rounded-lg px-3 py-2 hover:bg-gray-800" type="submit">
                            EDIT
                        </button>
                    @endcan
                </div>
            </form>
        </div>
    </div>

</x-app-layout>
