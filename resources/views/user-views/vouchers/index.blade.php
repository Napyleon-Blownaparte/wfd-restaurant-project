<x-app-layout>
    <div class="bg-black text-white">
        <div class="flex flex-col md:flex-row">

            <!-- Left Section -->
            <div class="md:w-1/2 w-full h-auto md:h-[calc(100vh-4rem)] md:sticky md:top-[4rem] flex items-center justify-center bg-cover bg-center p-10 relative"
                style="background-image: url('/images/home.jpg');">
                <div class="absolute inset-0 bg-black bg-opacity-50"></div>
                <div class="relative text-center">
                    <h2 class="font-title1 text-3xl md:text-4xl mb-3">Check Out</h2>
                    <h1 class="font-title2 text-amber-300 text-5xl md:text-6xl font-extrabold mb-6">Our Vouchers</h1>
                </div>
            </div>

            <!-- Right Section -->
            <div class="md:w-1/2 w-full p-5 md:p-8 mt-5 md:mt-10 overflow-y-auto">

                <div class="mb-10">
                    <h3 class="text-yellow-400 text-3xl font-bold mb-5">Available Coupons</h3>
                    <div class="space-y-6">

                        @foreach ($vouchers as $voucher)
                            <div class="flex items-center justify-between border-b border-gray-700 pb-4">
                                <div class="flex items-center">
                                    <div class="ml-4">
                                        <h4 class="text-lg font-bold">{{ $voucher->name }}</h4>
                                        <p class="text-sm text-gray-300">{{ $voucher->description }} Discount:
                                            {{ $voucher->discount }}</p>
                                        <p class="text-sm text-gray-400">Valid until:
                                            {{ \Carbon\Carbon::parse($voucher->end_date)->format('M d, Y') }}</p>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <p class="text-lg font-semibold text-yellow-400">RP
                                        {{ number_format($voucher->price, 0, ',', '.') }}</p>
                                    <a href="{{ route('user.vouchers.payment', $voucher->id) }}"><button
                                            class="bg-yellow-400 text-black px-4 py-2 rounded-full mt-2 hover:bg-yellow-500"
                                            id="pay-button">
                                            Buy Now
                                        </button></a>
                                    <input type="hidden" id="data" value="{{ $voucher }}">
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
