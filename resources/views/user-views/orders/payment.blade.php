<x-app-layout>
    <div class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            <div class="bg-neutral-950 text-white min-h-screen p-6 sm:p-10">
                <!-- Header -->
                <div class="mb-6 mt-10">
                    <h2 class="font-title2 text-3xl md:text-4xl font-bold text-amber-300">Order Details</h2>
                </div>

                <!-- Main Content -->
                <div class="mt-5 px-4 lg:px-24">
                    <div class="flex flex-col md:flex-row gap-6">
                        <!-- Left Section -->
                        <div class="w-full md:w-1/2 bg-neutral-800 bg-opacity-90 p-4 sm:p-6 rounded-lg shadow-lg">
                            <div class="flex items-center gap-4 mb-6">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor"
                                    class="w-6 h-6 sm:w-8 sm:h-8 text-amber-300">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                                </svg>
                                <h2 class="text-xl sm:text-2xl md:text-3xl font-semibold text-white">Order
                                    #{{ $orders->id }}</h2>
                            </div>

                            <!-- Order Info -->
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 border-b pb-4">
                                <div class="flex justify-between">
                                    <span class="text-sm sm:text-base text-gray-300">User Name:</span>
                                    <span
                                        class="text-sm sm:text-base text-white font-semibold">{{ $orders->user->name }}</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-sm sm:text-base text-gray-300">Order Date:</span>
                                    <span
                                        class="text-sm sm:text-base text-white font-semibold">{{ $orders->created_at->format('d M Y, H:i') }}</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-sm sm:text-base text-gray-300">Last Updated:</span>
                                    <span
                                        class="text-sm sm:text-base text-white font-semibold">{{ $orders->updated_at->format('d M Y, H:i') }}</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-sm sm:text-base text-gray-300">Table Number:</span>
                                    <span
                                        class="text-sm sm:text-base text-white font-semibold">{{ $orders->table_number ?? '-' }}</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-sm sm:text-base text-gray-300">Voucher Name:</span>
                                    <span
                                        class="text-sm sm:text-base text-white font-semibold">{{ $orders->voucher->name ?? '-' }}</span>
                                </div>
                            </div>

                            <!-- Menu Items -->
                            <div class="mt-4 space-y-4">
                                @foreach ($orders->menus as $order)
                                    @php
                                        $quantity = $order->menu_orders->where('order_id', $orders->id)->first()
                                            ->quantity;
                                        $price_per_item = $order->price * $quantity;
                                    @endphp
                                    <div
                                        class="flex flex-col sm:flex-row justify-between items-start sm:items-center bg-neutral-700 p-4 rounded-lg">
                                        <div class="flex items-center gap-4">
                                            <img src="images/tuna.jpg" alt="Item Image"
                                                class="h-16 w-16 object-cover rounded-lg">
                                            <div>
                                                <h3 class="text-base sm:text-lg font-medium text-white">
                                                    {{ $order->name }}</h3>
                                                <p class="text-sm text-gray-400">x{{ $quantity }}</p>
                                            </div>
                                        </div>
                                        <p class="text-sm sm:text-lg font-semibold text-amber-300 mt-2 sm:mt-0">IDR
                                            {{ number_format($price_per_item, 0, ',', '.') }}</p>
                                    </div>
                                @endforeach
                            </div>

                            <!-- Payment Summary -->
                            <div class="mt-6 space-y-4 border-t pt-4">
                                <div class="flex justify-between">
                                    <span class="text-sm sm:text-base text-gray-300">Subtotal:</span>
                                    <span class="text-sm sm:text-base text-white font-semibold">IDR
                                        {{ number_format($orders->sub_total_price, 0, ',', '.') }}</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-sm sm:text-base text-gray-300">Total Price:</span>
                                    <span class="text-sm sm:text-base text-white font-semibold">IDR
                                        {{ number_format($orders->total_price, 0, ',', '.') }}</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-sm sm:text-base text-gray-300">Payment Date:</span>
                                    <span class="text-sm sm:text-base text-white font-semibold">
                                        {{ $orders->payment_date_time ? \Carbon\Carbon::parse($orders->payment_date_time)->format('d M Y, H:i') : '-' }}
                                    </span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-sm sm:text-base text-gray-300">Payment Status:</span>
                                    <span
                                        class="text-sm sm:text-base font-semibold {{ $orders->payment_status == 'Paid' ? 'text-green-400' : 'text-red-400' }}">
                                        {{ ucfirst($orders->payment_status) }}
                                    </span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-sm sm:text-base text-gray-300">Order Status:</span>
                                    @php
                                        $statusColors = [
                                            'Pending' => 'text-red-400',
                                            'Preparing' => 'text-yellow-400',
                                            'Ready' => 'text-blue-400',
                                            'Completed' => 'text-green-400',
                                        ];
                                    @endphp
                                    <span
                                        class="text-sm sm:text-base font-semibold {{ $statusColors[$orders->order_status] ?? 'text-white' }}">
                                        {{ ucfirst($orders->order_status) }}
                                    </span>
                                </div>
                            </div>

                            <button id="cart-button"
                                class="mt-8 w-full bg-amber-300 text-black px-4 py-2 text-sm font-bold rounded hover:bg-amber-400 transition">
                                Checkout
                            </button>

                            <input type="hidden" id="snap-token" value="{{ $orders->snap_token }}">
                            <form id="form_submit" action="{{ route('user.orders.status', $orders->id) }}"
                                method="POST">
                                @csrf
                                <input id="json_callback" name="json" type="hidden">
                            </form>
                        </div>

                        <!-- Right Section -->
                        <div id="snap-container" class="w-full md:w-1/2 p-4 sm:p-6 shadow-lg rounded-lg mt-6 md:mt-0">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js"
        data-client-key="{{ config('midtrans.clientKey') }}"></script>
    <script type="text/javascript">
        var payButton = document.getElementById('cart-button');
        payButton.addEventListener('click', function() {
            var snapToken = document.getElementById('snap-token').value;
            window.snap.embed(snapToken, {
                embedId: 'snap-container',
                onSuccess: function(result) {
                    console.log(result);
                    send_response_to_form(result);
                },
                onPending: function(result) {
                    console.log(result);
                    send_response_to_form(result);
                },
                onError: function(result) {
                    console.log(result);
                    send_response_to_form(result);
                },
                onClose: function() {
                    alert('you closed the popup without finishing the payment');
                    send_response_to_form(result);
                }
            });
        });

        function send_response_to_form(result) {
            document.getElementById('json_callback').value = JSON.stringify(result);
            document.getElementById('form_submit').submit();
        }
    </script>
</x-app-layout>
