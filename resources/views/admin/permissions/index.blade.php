<x-admin-layout>

    <div class="py-12 w-full">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-2">
                <div class="flex justify-end p-2">
                    <a href="" class="px-4 py-2 bg-green-700 hover:bg-green-500 rounded-md">Create Permission</a>
                </div>
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Name
                                </th>
                                {{-- <th scope="col" class="px-6 py-3">
                                    Title
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Status
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Role
                                </th> --}}
                                <th scope="col" class="px-6 py-3">
                                    Actions
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($permissions as $permission)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                        {{-- <img class="w-10 h-10 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="Jese image"> --}}
                                        <div class="pl-3">
                                            <div class="text-base font-semibold">{{ $permission->name }}</div>
                                        </div>  
                                    </th>
                                    <td class="px-6 py-4">
                                        <a href="">Edit</a>
                                        <a href="">Delete</a>
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

