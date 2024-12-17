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
                            <!-- Voucher -->
                                <div class="flex justify-between items-center border-b py-4">
                                    <!-- Bagian Kiri: Gambar dan Deskripsi -->
                                    <div class="flex items-center gap-6 w-2/3">
                                        <h1 class="text-xl sm:text-2xl font-medium text-white">
                                            quibusdam   </h1>
                                    </div>

                                    <!-- Harga di Sebelah Kanan -->
                                    <p class="text-md md:text-xl font-semibold">IDR 34234
                                        </p>
                                </div>

                            <div class="flex justify-between items-center mt-8">
                                <p class="text-xl sm:text-3xl font-black">TOTAL</p>
                                <p class="text-xl sm:text-3xl font-black">IDR 34234
                                    </p>
                            </div>

                            <a href=""><button id="cart-button"
                                    class="mt-8 w-full bg-amber-300 text-black px-4 py-2 text-sm font-bold rounded hover:bg-amber-400 transition">
                                    Pay
                                </button>
                            </a>

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
        var snapToken = button.getAttribute('data-snap-token');
        window.snap.embed(snapToken, {
            embedId: 'snap-container'
        });

    });
</script>

</html>
