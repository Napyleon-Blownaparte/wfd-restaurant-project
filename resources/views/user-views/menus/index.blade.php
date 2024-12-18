<x-app-layout>
    <div class="bg-black text-white p-5">
        <div class="flex flex-col md:flex-row">

            <!-- Left Section -->
        <div class="hidden md:block md:w-1/2 w-full h-auto md:h-[calc(100vh-4rem)] md:sticky md:top-[4rem] items-center justify-center bg-cover bg-center p-10 pt-20 md:pt-0 relative"
            style="background-image: url('/images/home.jpg');">
            <div class="absolute inset-0 bg-black bg-opacity-50"></div>
            <div class="relative text-center flex flex-col items-center justify-center h-full">
            <h2 class="font-title1 text-3xl md:text-4xl mb-3">Check Out</h2>
            <h1 class="font-title2 text-amber-300 text-5xl md:text-6xl font-extrabold mb-6">Our Menus</h1>
            </div>
        </div>

            <!-- Right Section -->
            <div class="md:w-1/2 w-full p-5 md:p-8 mt-5 md:mt-10 overflow-y-auto min-h-screen">

                <!-- Category -->
                @foreach($categories as $category)
                    <div class="mb-8 md:mb-10">
                        <h3 class="font-title3 text-amber-300 text-2xl md:text-3xl font-bold mb-4 md:mb-5">{{$category->name}}</h3>
                        <div class="space-y-4 md:space-y-6">

                            <!-- Menu -->
                            @foreach($category->menus as $menu)
                            <a href="{{ route("user.menus.show", $menu->id) }}">
                                <div class="flex items-start md:items-center justify-between">
                                    <div class="flex items-start md:items-center">
                                        <img src={{asset('storage/' . $menu->image_url)}} alt={{$menu->name}} class="w-14 h-14 md:w-16 md:h-16 rounded-md">
                                        <div class="ml-3 md:ml-4">
                                            <h4 class="font-title3 text-base md:text-lg font-bold">{{$menu->name}}</h4>
                                            <p class="font-title3 text-sm text-gray-300">{{$menu->description}}</p>
                                        </div>
                                    </div>
                                    <div id="cart-button-{{ $menu->id }}" class="flex flex-col items-center gap-1">
                                        <span class="text-sm md:text-base font-semibold text-white">
                                            Rp {{ number_format($menu->price, 0, ',', '.') }}
                                        </span>
                                        <button
                                            class="bg-amber-300 text-black px-2 py-1 text-xs md:text-sm font-bold rounded hover:bg-amber-400 transition w-24 text-center">
                                            Add to Cart
                                        </button>
                                    </div>

                                </div>
                                </a>
                            @endforeach

                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
</x-app-layout>
