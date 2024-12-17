<x-app-layout>

    <div class="py-12 bg-gradient-to-b from-black to-gray-800 h-screen">
        <div class="max-w-7xl mx-auto mt-8 sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    {{-- START HERE --}}
                    <form action="{{ route('admin.menus.update', $menu->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <!-- Name -->
                        <div class="mb-4">
                            <x-input-label for="name" :value="__('Name')" class="block text-gray-700" />
                            <x-text-input id="name" type="text" name="name" :value="old('name', $menu->name)" autofocus
                                placeholder="Enter menu name, e.g., 'Cheese Burger'"
                                class="mt-1 block w-full p-2 border border-gray-300 rounded-md" />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>

                        <!-- Description -->
                        <div class="mb-4">
                            <x-input-label for="description" :value="__('Description')" class="block text-gray-700" />
                            <textarea id="description" name="description" rows="4" placeholder="Enter a brief description of the menu item"
                                class="mt-1 block w-full p-2 border border-gray-300 rounded-md">{{ old('description', $menu->description) }}</textarea>
                            <x-input-error :messages="$errors->get('description')" class="mt-2" />
                        </div>

                        <!-- Price -->
                        <div class="mb-4">
                            <x-input-label for="price" :value="__('Price')" class="block text-gray-700" />
                            <x-text-input id="price" type="number" name="price" :value="old('price', $menu->price)" autofocus
                                placeholder="Enter the price, e.g., 15000"
                                class="mt-1 block w-full p-2 border border-gray-300 rounded-md" />
                            <x-input-error :messages="$errors->get('price')" class="mt-2" />
                        </div>

                        <!-- Image -->
                        <div class="mb-4">
                            <x-input-label for="image_url" :value="__('Menu Image')" class="block text-gray-700" />
                            <input type="file" id="image_url" name="image_url" accept="image/*"
                                class="mt-1 block w-full p-2 border border-gray-300 rounded-md" />
                            <p class="text-sm text-gray-500">Upload Image (Max: 2MB)</p>
                            <x-input-error :messages="$errors->get('image_url')" class="mt-2" />
                        </div>

                        <button type="submit"
                            style="background-color: #251F4F; color: white; padding: 0.5rem 1rem; border-radius: 0.375rem; border: none; cursor: pointer;"
                            class="hover:bg-blue-950 focus:outline-none focus:ring-2 focus:ring-blue-900 flex items-center justify-center gap-2">
                            Update Menu
                        </button>
                    </form>

                    {{-- DELETE BUTTON --}}
                    <form action="{{ route('admin.menus.destroy', $menu->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this menu?')"
                        class="mt-4">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                            style="background-color: #FF4D4D; color: white; padding: 0.5rem 1rem; border-radius: 0.375rem; border: none; cursor: pointer;"
                            class="hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-900 flex items-center justify-center gap-2">
                            Delete Menu
                        </button>
                    </form>
                    {{-- END HERE --}}

                </div>
            </div>
        </div>
    </div>

</x-app-layout>
