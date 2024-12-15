<x-app-layout>
    <div class="bg-black text-white p-5">
        <div class="flex flex-col md:flex-row">

            <!-- Left Section -->
            <div class="hidden md:block md:w-1/2 w-full h-auto md:h-[calc(100vh-4rem)] md:sticky md:top-[4rem] items-center justify-center bg-cover bg-center p-10 relative"
                 style="background-image: url('/images/home.jpg');">
                <div class="absolute inset-0 bg-black bg-opacity-50"></div>
                <div class="relative text-center flex flex-col items-center justify-center h-full">
                    <h2 class="font-title1 text-3xl md:text-4xl mb-3">Check Out</h2>
                    <h1 class="font-title2 text-amber-300 text-5xl md:text-6xl font-extrabold mb-6">Your Cart</h1>
                </div>
            </div>

            <!-- Right Section -->
            <div class="md:w-1/2 w-full p-5 md:p-8 mt-5 md:mt-10 overflow-y-auto">
                <h3 class="text-amber-300 text-xl font-bold mb-6">Your Cart</h3>

                @if ($cart)
                    <form action="{{ route('user.orders.store') }}" method="POST" id="cartForm">
                        @csrf

                        <!-- Cart Items -->
                        <div class="space-y-6">
                            @foreach ($cart as $key => $item)
                                <div class="flex items-start justify-between py-4 border-b border-gray-700">
                                    <div class="flex items-start md:items-center">
                                        <img src="/path/to/item/image.jpg" alt="{{ $item['name'] }}" class="w-14 h-14 md:w-16 md:h-16 rounded-md">
                                        <div class="ml-3 md:ml-4">
                                            <h4 class="font-title3 text-base md:text-lg font-bold">{{ $item['name'] }}</h4>
                                            <p class="font-title3 text-sm text-gray-300">{{ $item['price'] }} per item</p>
                                        </div>
                                    </div>
                                    <div class="flex items-center space-x-4">
                                        <input type="number" name="cart[{{ $key }}][quantity]" value="{{ $item['quantity'] }}" min="1"
                                               class="border px-2 py-1 w-16 quantity-input text-black rounded-md"
                                               data-key="{{ $key }}">
                                        <p class="font-bold">${{ $item['quantity'] * $item['price'] }}</p>
                                        <a href="{{ '/user/destroy-cart/' . $key }}" class="text-red-500 hover:underline">Remove</a>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <!-- Subtotal -->
                        <div class="mt-6">
                            <p class="text-lg font-semibold">Subtotal: <span class="text-amber-300">${{
                                array_sum(array_map(fn($item) => $item['quantity'] * $item['price'], $cart)) }}</span></p>
                        </div>
                    </form>

                    <!-- Checkout Button -->
                    <div class="mt-8">
                        <form action="{{ route('user.orders.store') }}" method="POST">
                            @csrf
                            @foreach ($cart as $key => $item)
                                <input type="hidden" name="cart[{{ $key }}][key]" value="{{ $key }}">
                                <input type="hidden" name="cart[{{ $key }}][quantity]" value="{{ $item['quantity'] }}">
                                <input type="hidden" name="cart[{{ $key }}][price]" value="{{ $item['price'] }}">
                            @endforeach
                            <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded-md hover:bg-green-600 transition">
                                Checkout
                            </button>
                        </form>
                    </div>
                @else
                    <p class="text-gray-300">Your cart is empty.</p>
                @endif
            </div>
        </div>
    </div>

    <script>
        document.querySelectorAll('.quantity-input').forEach(input => {
            input.addEventListener('input', function() {
                document.getElementById('cartForm').submit(); // Submit the form when quantity is changed
            });
        });
    </script>

    <style>
        /* @media (max-width: 768px) {
            .p-5 {
                padding-top: 3rem !important;
            }
        } */
    </style>
</x-app-layout>
