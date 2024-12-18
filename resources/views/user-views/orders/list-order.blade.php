<x-app-layout>
    <div class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            <div class="bg-neutral-950 text-white h-full p-6 sm:p-10">
                <h2 class="font-title2 text-3xl md:text-4xl font-bold text-amber-300 mt-10 mb-4">List Order</h2>
                <div class="mt-5 px-4 lg:px-24">
                    <div class="h-auto sm:h-screen">
                        @foreach ($orders as $order)
                            <a href="{{ route('user.orders.payment', $order->id) }}">
                                <div
                                    class="w-full bg-neutral-800 bg-opacity-90 p-6 rounded-lg shadow-lg mb-6 hover:bg-neutral-700 transition">
                                    <div
                                        class="flex flex-col md:flex-row justify-between items-start md:items-center mb-4">
                                        <div class="flex items-center gap-4">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-amber-400">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                                            </svg>
                                            <h2 class="text-xl sm:text-2xl font-semibold text-white">Order
                                                {{ $order->id }}</h2>
                                        </div>
                                        <p class="text-gray-400 text-sm sm:text-base">Order Date:
                                            {{ $order->created_at->format('d M Y, H:i') }}</p>
                                    </div>

                                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 border-b border-gray-700 pb-4">
                                        <div class="flex justify-between">
                                            <span class="text-md font-medium text-gray-300">Nama User:</span>
                                            <span
                                                class="text-md font-semibold text-white">{{ $order->user->name }}</span>
                                        </div>
                                        <div class="flex justify-between">
                                            <span class="text-md font-medium text-gray-300">Subtotal:</span>
                                            <span class="text-md font-semibold text-white">IDR
                                                {{ number_format($order->sub_total_price, 0, ',', '.') }}</span>
                                        </div>
                                        <div class="flex justify-between">
                                            <span class="text-md font-medium text-gray-300">Voucher:</span>
                                            <span
                                                class="text-md font-semibold text-white">{{ $order->voucher->name ?? '-' }}</span>
                                        </div>
                                        <div class="flex justify-between">
                                            <span class="text-md font-medium text-gray-300">Item Quantities:</span>
                                            <span
                                                class="text-md font-semibold text-white">{{ $order->menu_orders->sum('quantity') }}</span>
                                        </div>
                                    </div>

                                    <div class="flex flex-col lg:flex-row justify-between items-center pt-4">
                                        <div class="flex flex-col gap-2">
                                            <p class="text-md font-medium text-gray-300">Order Status:
                                                @php
                                                    $statusColors = [
                                                        'Pending' => 'text-red-400',
                                                        'Preparing' => 'text-yellow-400',
                                                        'Ready' => 'text-blue-400',
                                                        'Completed' => 'text-green-400',
                                                    ];
                                                @endphp
                                                <span
                                                    class="font-semibold {{ $statusColors[$order->order_status] ?? 'text-white' }}">
                                                    {{ ucfirst($order->order_status) }}
                                                </span>
                                            </p>
                                            <p class="text-md font-medium text-gray-300">Payment Status:
                                                <span
                                                    class="font-semibold {{ $order->payment_status == 'Paid' ? 'text-green-400' : 'text-red-400' }}">
                                                    {{ ucfirst($order->payment_status) }}
                                                </span>
                                            </p>
                                        </div>
                                        <div class="flex items-center mt-4 lg:mt-0">
                                            <p class="text-xl font-semibold text-white mr-4">Total:</p>
                                            <p class="text-xl font-bold text-amber-300">IDR
                                                {{ number_format($order->total_price, 0, ',', '.') }}</p>
                                        </div>
                                    </div>

                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
