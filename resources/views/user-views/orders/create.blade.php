<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Order create') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-xl font-bold">Your Cart</h3>

                    @if ($cart)
                        <form action="{{ route('user.orders.store') }}" method="POST" id="cartForm">
                            @csrf
                            @foreach ($cart as $key => $item)
                                <input type="hidden" name="cart[{{ $key }}][key]" value="{{ $key }}">
                                <div class="flex justify-between items-center py-4">
                                    <div class="w-1/2">{{ $item['name'] }}</div>
                                    <div class="w-1/6">
                                        <input type="number" name="cart[{{ $key }}][quantity]"
                                            value="{{ $item['quantity'] }}" min="1"
                                            class="border px-2 py-1 w-full quantity-input"
                                            data-key="{{ $key }}">
                                    </div>
                                    <div class="w-1/6">{{ $item['price'] }}</div>
                                    <div class="w-1/6">{{ $item['quantity'] * $item['price'] }}</div>
                                    <div class="w-1/6">
                                        <!-- Button to remove item -->
                                        <a href="{{ '/user/destroy-cart/' . $key }}" class="text-red-500">Remove</a>
                                    </div>
                                </div>
                            @endforeach
                        </form>

                        <div class="mt-4">
                            <p class="font-semibold">Sub Total:
                                {{ array_sum(array_map(fn($item) => $item['quantity'] * $item['price'], $cart)) }}
                            </p>
                        </div>

                        <div class="mt-4">
                            <!-- Checkout Button -->
                            <form action="{{ route('user.orders.store') }}" method="POST">
                                @csrf
                                <!-- Pass cart items to the order -->
                                @foreach ($cart as $key => $item)
                                    <input type="hidden" name="cart[{{ $key }}][key]" value="{{ $key }}">
                                    <input type="hidden" name="cart[{{ $key }}][quantity]" value="{{ $item['quantity'] }}">
                                    <input type="hidden" name="cart[{{ $key }}][price]" value="{{ $item['price'] }}">
                                @endforeach
                                <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">
                                    Checkout
                                </button>
                            </form>
                        </div>
                    @else
                        <p>Your cart is empty.</p>
                    @endif
                </div>
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
</x-app-layout>
