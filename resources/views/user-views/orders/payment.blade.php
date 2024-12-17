<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&family=Cormorant+SC:wght@300;400;500;600;700&family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Great+Vibes&display=swap"
        rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js"
        data-client-key="{{ config('midtrans.clientKey') }}"></script>
</head>

<body>
    <div class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            <div class="bg-neutral-950 text-white h-full p-6 sm:p-10">
                <h2 class="font-title2 text-3xl md:text-4xl font-bold text-amber-300 mt-2 mb-4">Payment</h2>
                <div class="mt-5 px-4 lg:px-24">
                    <!-- Content Section -->
                    <div class="flex flex-col md:flex-row h-auto sm:h-screen">
                        <!-- Left Section -->
                        <div class="w-max lg:w-1/2 bg-neutral-800 bg-opacity-90 p-6 rounded-lg shadow-lg m-5">
                            <div class="flex items-center gap-4 mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-white">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                                </svg>

                                <h2 class="text-2xl sm:text-3xl font-semibold text-white">Order {{ $orders->id }}</h2>
                            </div>
                            <!-- Item Order -->
                            @foreach ($orders->menus as $order)
                                @php
                                    // dd($order->menu_orders->where('order_id', $orders->id));

                                    $quantity = $order->menu_orders->where('order_id', $orders->id)->first()->quantity;
                                    $price_per_item = $order->price * $quantity;
                                @endphp
                                <div class="flex justify-between items-center border-b py-4">
                                    <!-- Bagian Kiri: Gambar dan Deskripsi -->
                                    <div class="flex items-center gap-6 w-2/3">
                                        <img src="images/tuna.jpg" alt="Tuna Sushi"
                                            class="h-20 w-20 object-cover rounded-lg">
                                        <div>
                                            <h1 class="text-lg sm:text-sm font-medium text-white">
                                                {{ $order->name }}</h1>
                                            <p class="text-gray-400 text-sm sm:text-base">
                                                {{ $quantity }}
                                                x</p>
                                        </div>
                                    </div>

                                    <!-- Harga di Sebelah Kanan -->
                                    <p class="text-md md:text-xl font-semibold">IDR
                                        {{ number_format($price_per_item, 0, ',', '.') }}</p>
                                </div>
                            @endforeach

                            <div class="flex justify-between items-center mt-6">
                                <p class="text-lg sm:text-2xl font-semibold">Subtotal</p>
                                <p class="text-lg sm:text-2xl font-bold">IDR
                                    {{ number_format($orders->sub_total_price, 0, ',', '.') }}</p>
                            </div>

                            <div class="flex justify-between items-center mt-6 border-b">
                                <p class="text-lg sm:text-2xl font-semibold">Voucher</p>
                                <p class="text-lg sm:text-2xl font-semibold">{{ $orders->voucher->discount }}%</p>
                            </div>

                            <div class="flex justify-between items-center mt-8">
                                <p class="text-xl sm:text-3xl font-black">TOTAL</p>
                                <p class="text-xl sm:text-3xl font-black">RP
                                    {{ number_format($orders->total_price, 0, ',', '.') }}</p>
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
                        <div id="snap-container" class="w-full lg:w-1/2 p-6 shadow-lg mt-6 lg:mt-0">
                            <!-- API Content Goes Here -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

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

</html>
