<x-admin-layout>

    <div class="py-12 w-full">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-2">
                <div class="flex p-2">
                    <a href="{{ route('admin.permissions.index') }}" class="px-4 py-2 bg-green-700 hover:bg-green-500 text-slate-100 rounded-md">Permission Index</a>
                </div>
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10 px-4 py-2">
                        <form method="POST" action="{{ route('admin.permissions.update', $permission) }}">
                            @csrf
                            @method('PUT')
                          <div class="sm:col-span-6">
                            <label for="name" class="block text-sm font-medium text-gray-700"> Permission Name </label>
                            <div class="mt-1">
                              <input type="text" id="name" name="name" class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" 
                              value="{{ $permission->name }}"/>
                            </div>
                            @error('name')
                                <span class="text-red-400 text-sm">{{ $message }}</span>
                            @enderror
                          </div>
                          <div class="sm:col-span-6 pt-5">
                            <button type="submit" class="px-4 py-2 bg-blue-500 hover:bg-blue-700 text-slate-100 rounded-md">Update</button>
                          </div>
                        </form>
                      </div>
                </div>                  
            </div>
        </div>
    </div>
</x-admin-layout>

