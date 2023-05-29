<x-admin-layout>

    <div class="py-12 w-full">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-2">
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    <div class="flex justify-center">
                                        Name
                                    </div>
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    <div class="flex justify-center">
                                        Email
                                    </div>
                                </th>
                                {{-- <th scope="col" class="px-6 py-3">
                                    Status
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Role
                                </th> --}}
                                <th scope="col" class="px-6 py-3">
                                    <div class="flex justify-center">
                                        Actions
                                    </div>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <td scope="row" class="px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                        <div class="flex justify-center pl-3">
                                            <div class="text-base font-semibold">{{ $user->name }}</div>
                                        </div>  
                                    </td>
                                    <td scope="row" class="px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                        <div class="flex justify-center pl-3">
                                            <div class="text-base font-semibold">{{ $user->email }}</div>
                                        </div>  
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="flex justify-center">
                                            <div class="flex space-x-1">
                                                <a href="" class="px-4 py-2 bg-blue-500 hover:bg-blue-700 text-white rounded-md">Roles</a>
                                                <a href="" class="px-4 py-2 bg-blue-500 hover:bg-blue-700 text-white rounded-md">Permissions</a>
                                                <form class="cursor-pointer px-4 py-2 bg-red-500 hover:bg-red-700 text-white rounded-md" method="POST"
                                                 action="{{ route('admin.users.destroy', $user->id) }}"
                                                 onsubmit="return confirm('Are you sure you want to delete this role?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit">Delete</button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                    {{-- <td class="px-6 py-4">
                                        React Developer
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="flex items-center">
                                            <div class="h-2.5 w-2.5 rounded-full bg-green-500 mr-2"></div> Online
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        Admin
                                    </td>
                                    <td class="px-6 py-4">
                                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit user</a>
                                    </td> --}}
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>                  
            </div>
        </div>
    </div>
</x-admin-layout>

