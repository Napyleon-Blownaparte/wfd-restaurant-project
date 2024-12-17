<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Menu Category') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    {{-- START HERE --}}
                    <form action="{{ route('admin.menu-categories.update', $menuCategory->id) }}" method="POST">
                        @csrf
                        @method('PUT')  {{-- Menandakan ini adalah request PUT untuk update data --}}

                        <!-- Name -->
                        <div class="mb-4">
                            <x-input-label for="name" :value="__('Name')" class="block text-gray-700" />
                            <x-text-input id="name" type="text" name="name" :value="old('name', $menuCategory->name)" autofocus
                                placeholder="Enter category name, e.g., 'Burgers'"
                                class="mt-1 block w-full p-2 border border-gray-300 rounded-md" />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>

                        <button type="submit"
                            style="background-color: #251F4F; color: white; padding: 0.5rem 1rem; border-radius: 0.375rem; border: none; cursor: pointer;"
                            class="hover:bg-blue-950 focus:outline-none focus:ring-2 focus:ring-blue-900 flex items-center justify-center gap-2">
                            Update Menu Category
                        </button>
                    </form>
                    {{-- END HERE --}}

                </div>
            </div>
        </div>
    </div>

</x-app-layout>
