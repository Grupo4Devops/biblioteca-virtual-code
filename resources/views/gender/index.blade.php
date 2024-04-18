<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Genders's List
        </h2>
    </x-slot>

    @livewire('gender.gender-index')

    <link rel="stylesheet" href="{{ asset('css/tabla.css') }}" type="text/css">

</x-app-layout>
