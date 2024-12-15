<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Menus show') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{ route('user.cart.store', $menu->id) }}" method="POST">
                        @csrf
                        <!-- Tambahkan name pada input -->
                        <input type="number" id="quantity" name="quantity" min="1" value="1">
                        <button type="submit">Add to cart</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
