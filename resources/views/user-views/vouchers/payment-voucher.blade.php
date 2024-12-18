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
            <div class="bg-neutral-950 text-white h-screen md:h-full p-6 sm:p-10">
                <h2 class="font-title2 text-3xl md:text-4xl font-bold text-amber-300 mt-2 mb-4">Voucher Payment</h2>
                <div class="mt-5 px-4 lg:px-24">
                    <!-- Content Section -->
                    <div class="flex flex-col md:flex-row h-max sm:h-screen">
                        <!-- Left Section -->
                        <div class="w-max lg:w-1/2 h-min bg-neutral-800 bg-opacity-90 p-6 rounded-lg shadow-lg m-5">
                            <div class="flex items-center gap-4 mb-4">
                                <h2 class="text-2xl sm:text-3xl font-semibold text-white">Voucher</h2>
                            </div>
                            @php
                                // dd($voucher_purchase->vouchers);
                            @endphp
                            <!-- Voucher -->
                            <div class="flex justify-between items-center border-b py-4">
                                <!-- Bagian Kiri: Gambar dan Deskripsi -->
                                <div class="flex items-center gap-6 w-2/3">
                                    <h1 class="text-xl sm:text-2xl font-medium text-white">
                                        {{ $voucher_purchase->vouchers->name }}</h1>
                                </div>

                                <!-- Harga di Sebelah Kanan -->
                                <p class="text-md md:text-xl font-semibold">IDR
                                    {{ number_format($voucher_purchase->vouchers->price, 0, ',', '.') }}
                                </p>
                            </div>

                            <div class="flex justify-between items-center mt-8">
                                <p class="text-xl sm:text-3xl font-black">TOTAL</p>
                                <p class="text-xl sm:text-3xl font-black">IDR
                                    {{ number_format($voucher_purchase->vouchers->price, 0, ',', '.') }}
                                </p>
                            </div>

                            <button id="cart-button"
                                class="mt-8 w-full bg-amber-300 text-black px-4 py-2 text-sm font-bold rounded hover:bg-amber-400 transition">
                                Pay
                            </button>

                            <input type="hidden" id="snap-token" value="{{ $voucher_purchase->snap_token }}">
                            <form id="form_submit" action="{{ route('user.vouchers.status', $voucher_purchase->id) }}"
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
