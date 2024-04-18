<div class="py-5 mx-10 mt-6 bg-white shadow-xl rounded-xl mb-6">
    <div class="flex items-center justify-between mx-5 mb-5">
        <div class="relative w-1/3 ml-10 lg:ml-20">
            <input wire:model="search"
                class="w-full px-4 py-2 pr-10 bg-gray-100 border-transparent rounded-full focus:border-transparent focus:ring-0 focus:outline-none focus:bg-gray-200"
                type="text" placeholder="Search Users">
            <div class="absolute inset-y-0 right-0 flex items-center pr-4">
                <i class="fa-solid fa-magnifying-glass"></i>
            </div>
        </div>
        @can('create users')
            <a href="{{ route('users.create') }}"
                class="flex-shrink-0 px-2 py-1 text-sm text-white bg-blue-500 border-4 border-blue-500 rounded hover:bg-blue-700 hover:border-blue-700">
                New User
            </a>
        @endcan
    </div>
    <div class="flex flex-wrap justify-end mr-4">
        <div>
            {{ $users->links() }}
        </div>
    </div>

    <div class="p-5">
        @if ($users->count())
            <?php
            $contador = 0;
            ?>

            <table class="table">
                <thead>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Rol</th>
                    <th>Actions</th>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td data-label="Id">{{ $user->id }}</td>
                            <td data-label="Name">{{ $user->name }}</td>
                            <td data-label="Email">{{ $user->email }}</td>

                            <td data-label="Rol">
                                @foreach ($user->getRoleNames() as $role)
                                    {{ $role }}
                                @endforeach
                            </td>

                            <td class="flex items-center justify-center">

                                @can('edit users')
                                    <a href="{{ route('users.edit', $user) }}"
                                        class="mr-2 text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </a>
                                @endcan

                                @can('delete users')
                                    <form action="{{ route('users.destroy', $user) }}" method="POST"
                                        onsubmit="return confirm('Are you sure to delete?')">
                                        @csrf
                                        <button type="submit"
                                            class="mr-2 text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                    </form>
                                @endcan

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <div class="mt-8 text-red-800">
                <strong class="text-primary-dark dark:text-light"> There is not genders</strong>
            </div>
        @endif
    </div>

</div>
