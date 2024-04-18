<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit User
        </h2>
    </x-slot>

    <div class="py-5 shadow-xl mt-6 lg:mx-36 mx-10 bg-white rounded-xl">

        <div class="p-5">
            <form method="POST" action="{{ route('users.update', $user) }}">
                @csrf
                <div class="grid lg:grid-cols-2 grid-cols-1 gap-4">
                    <!-- Name -->
                    <div class="mb-4 col-span-1">
                        <x-label for="name" :value="__('Name:')" />

                        <x-input id="name" class="block mt-1 w-full" type="text" name="name"
                            value="{{ $user->name }}" autofocus />
                        @error('name')
                            <p class="text-red-500">You need to enter the username</p>
                        @enderror
                    </div>

                    <!-- Email -->
                    <div class="mb-4 col-span-1">
                        <x-label for="email" :value="__('Email:')" />

                        <x-input id="email" class="block mt-1 w-full" type="text" name="email"
                            value="{{ $user->email }}" />
                        @error('email')
                            <p class="text-red-500">You need to enter the Email</p>
                        @enderror
                    </div>
                </div>

                <div class="grid lg:grid-cols-3 grid-cols-1 gap-4">
                    <!-- Password -->
                    <div class="mb-4 col-span-1">
                        <x-label for="password" :value="__('Password:')" />

                        <x-input id="password" class="block mt-1 w-full" type="password" name="password" />
                        @error('password')
                            <p class="text-red-500">You need to enter the password</p>
                        @enderror
                    </div>

                    <!-- Role -->
                    <div class="mb-4 col-span-1">
                        <x-label for="role" :value="__('Roles:')" />

                        <select name="role" id="role" class="block mt-1 w-full rounded-lg border-gray-300"
                            :value="old('role')">
                            <option value="">-- Choose a Role --</option>
                            @foreach ($roles as $role)
                                <option value="{{ $role->name }}"
                                    {{ $user->roles->first()->name === $role->name ? 'selected' : '' }}>
                                    {{ $role->name }}
                                </option>
                            @endforeach
                        </select>

                        @error('role')
                            <p class="text-red-500">You need to enter the Role</p>
                        @enderror
                    </div>
                </div>


                @can('store users')
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
