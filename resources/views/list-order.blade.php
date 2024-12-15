<x-app-layout>
    <div class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">  
            <div class="bg-neutral-950 text-white h-screen p-6 sm:p-10">
                <h2 class="font-title2 text-3xl md:text-4xl font-bold text-amber-300 mt-10 mb-4">List Order</h2>
                <div class="mt-5 px-4 lg:px-24">
                    <!-- Content Section -->
                    <div class="h-auto sm:h-screen items-center">
                        <div class="w-full bg-neutral-800 bg-opacity-90 p-6 rounded-lg shadow-lg m-5">
                            <div class="flex flex-col md:flex-row items-center gap-4 mb-4 md:text-left">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-white">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                                </svg>
                                <h2 class="text-xl sm:text-2xl font-semibold text-white">Order 1</h2>
                            </div>
                            <!-- Item Order -->
                            <div class="flex flex-col lg:flex-row justify-between items-center border-b py-4">
                                <!-- Bagian Kiri: Jumlah Item -->
                                <div class="flex flex-row gap-6 w-full lg:w-1/4 justify-between lg:justify-start">
                                    <div class="flex flex-row w-full justify-between items-center">
                                        <h1 class="text-md md:text-xl font-medium text-white">Item Quantities</h1>
                                        <p class="text-gray-400 text-sm sm:text-base">5</p>
                                    </div>  
                                </div>
                                
                                <!-- Total di Sebelah Kanan -->
                                <div class="flex flex-row w-full lg:w-auto justify-between">
                                    <p class="text-md md:text-xl font-semibold mr-4">Subtotal</p>
                                    <p class="text-md md:text-xl font-semibold">IDR 149.000</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
