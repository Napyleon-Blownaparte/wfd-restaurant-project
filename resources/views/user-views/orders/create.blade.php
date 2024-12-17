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

                    <!-- Menu -->
                    <div class="space-y-6">
                        @foreach ($cart as $key => $item)
                            @php
                                $menu = App\Models\Menu::find($key);
                            @endphp
                            <div class="flex items-start justify-between py-4 border-b border-gray-700">
                                <div class="flex items-start md:items-center">
                                    <img src="{{ asset('storage/' . $menu->image_url) }}" alt="{{ $item['name'] }}"
                                        class="w-14 h-14 md:w-16 md:h-16 rounded-md">
                                    <div class="ml-3 md:ml-4">
                                        <h4 class="font-title3 text-base md:text-lg font-bold">{{ $item['name'] }}
                                        </h4>
                                        <p class="font-title3 text-sm text-gray-300">{{ $item['price'] }} per item
                                        </p>
                                    </div>
                                </div>
                                <form action="{{ route('user.cart.update') }}" method="POST" id="cartForm">
                                    @csrf
                                    <div class="flex items-center space-x-4">
                                        <input type="number" name="cart[{{ $key }}][quantity]"
                                            value="{{ $item['quantity'] }}" min="1"
                                            class="border px-2 py-1 w-16 quantity-input text-black rounded-md"
                                            data-key="{{ $key }}">
                                        <p class="font-bold">${{ $item['quantity'] * $item['price'] }}</p>
                                    </div>
                                </form>
                                <form action="{{ route('user.cart.destroy', $key) }}" method="POST">
                                    @csrf
                                    @method('DELETE') <!-- This tells Laravel to treat the form as a DELETE request -->
                                    <button type="submit" class="text-red-600 font-semibold hover:text-red-800">
                                        Remove
                                    </button>
                                </form>


                            </div>
                        @endforeach

                    </div>


                    <!-- Subtotal -->
                    <div class="mt-6">
                        <p class="text-lg font-semibold">
                            Subtotal: <span id="subtotal" class="text-amber-300">${{ array_sum(array_map(fn($item) => $item['quantity'] * $item['price'], $cart)) }}</span>
                        </p>
                    </div>
                    

                    <!-- Checkout Button -->
                    <div class="mt-8">

                        <form action="{{ route('user.orders.store') }}" method="POST" id="checkoutForm">
                            @csrf
                            @foreach ($cart as $key => $item)
                                <input type="hidden" name="cart[{{ $key }}][key]" value="{{ $key }}">
                                <input type="hidden" name="cart[{{ $key }}][quantity]" value="{{ $item['quantity'] }}">
                                <input type="hidden" name="cart[{{ $key }}][price]" value="{{ $item['price'] }}">
                            @endforeach

                            @if ($cart && $vouchers->isNotEmpty())
                                <div class="mt-6">
                                    <label for="voucher" class="block text-gray-300 font-semibold mb-2">Select Voucher</label>
                                    <select name="voucher_id" id="voucher" class="border px-3 py-2 rounded-md text-black w-full">
                                        <option value="">-- Choose a Voucher --</option>
                                        @foreach ($vouchers as $voucher)
                                            <option value="{{ $voucher->id }}">
                                                {{ $voucher->name }} - Discount: {{ $voucher->discount }}%
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            @endif

                            <div class="mt-4">
                                <p class="text-lg font-semibold">
                                    Total after Discount: 
                                    <span id="total-after-discount" class="text-amber-300">${{ array_sum(array_map(fn($item) => $item['quantity'] * $item['price'], $cart)) }}</span>
                                </p>
                            </div>
                            
                            

                            <button type="submit"
                                class="bg-green-500 text-white px-4 py-2 rounded-md hover:bg-green-600 transition mt-4">
                                Place Order
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

        document.addEventListener('DOMContentLoaded', function () {
        const subtotalElement = document.getElementById('subtotal');
        const totalAfterDiscountElement = document.getElementById('total-after-discount');
        const voucherDropdown = document.getElementById('voucher');

        // Ambil nilai subtotal dari elemen
        const subtotal = parseFloat(subtotalElement.textContent.replace('$', ''));

        // Event listener untuk mengubah total setelah diskon
        voucherDropdown.addEventListener('change', function () {
            const selectedOption = voucherDropdown.options[voucherDropdown.selectedIndex];
            const discountMatch = selectedOption.text.match(/(\d+)%/); // Ambil angka dari diskon (e.g. 20%)
            const discountPercentage = discountMatch ? parseFloat(discountMatch[1]) : 0;

            // Hitung total setelah diskon
            const discountAmount = subtotal * (discountPercentage / 100);
            const totalAfterDiscount = subtotal - discountAmount;

            // Tampilkan hasil
            totalAfterDiscountElement.textContent = `$${totalAfterDiscount.toFixed(2)}`;
        });
    });
    </script>
</x-app-layout>
