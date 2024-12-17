<x-app-layout>
    <div class="bg-black text-white">
        <div class="flex justify-center items-center min-h-screen px-4 sm:px-0">
            <div class="bg-gray-800 rounded-lg shadow-md w-full max-w-sm sm:max-w-md p-6">
                <h2 class="font-title3 text-2xl sm:text-3xl md:text-4xl mb-4 text-center">Add to Cart</h2>
                <form action="{{ route('user.cart.store', $menu->id) }}" method="POST" class="space-y-4">
                    @csrf
                    <div class="flex flex-col sm:flex-row sm:items-center sm:space-x-4 space-y-2 sm:space-y-0">
                        <label for="quantity" class="text-lg font-bold">Quantity:</label>
                        <input 
                            type="number" 
                            id="quantity" 
                            name="quantity" 
                            min="0" 
                            value="1"
                            class="w-full sm:w-20 bg-gray-900 text-white px-3 py-2 rounded-lg border border-gray-700 focus:ring-2 focus:ring-amber-300 focus:outline-none">
                    </div>
                    <button 
                        type="submit" 
                        class="w-full bg-amber-300 text-black px-4 py-2 text-lg font-bold rounded-lg hover:bg-amber-400 transition">
                        Add to Cart
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
