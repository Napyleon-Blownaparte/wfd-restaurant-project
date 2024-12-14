<x-app-layout>
    <div class="bg-black text-white">
        <div class="flex flex-col md:flex-row h-screen">

            <!-- Left Section -->
            <div class="md:w-1/2 flex items-center justify-center bg-cover bg-center p-10 relative"
                 style="background-image: url('/images/home.jpg');">
                <div class="absolute inset-0 bg-black bg-opacity-50"></div>
                <div class="relative text-center">
                    <h2 class="font-title1 text-4xl mb-3">Check Out</h2>
                    <h1 class="font-title2 text-amber-300 text-6xl font-extrabold mb-6">Our Menus</h1>
                </div>
            </div>

            <!-- Right Section -->
            <div class="md:w-1/2 p-8 overflow-y-auto">

                <!-- Category -->
                @foreach($categories as $category)
                    <div class="mb-10">
                        <h3 class="font-title3 text-amber-300 text-3xl font-bold mb-5">{{$category->name}}</h3>
                        <div class="space-y-6">

                            <!-- Menu -->
                            @foreach($category->menus as $menu)
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center">
                                        <img src={{asset('storage/' . $menu->image)}} alt={{$menu->name}} class="w-16 h-16 rounded-md">
                                        <div class="ml-4">
                                            <h4 class="font-title3 text-lg font-bold">{{$menu->name}}</h4>
                                            <p class="font-title3 text-sm text-gray-300">{{$menu->description}}</p>
                                        </div>
                                    </div>
                                    <p class="font-title3 text-lg font-semibold">{{$menu->price}}</p>
                                </div>
                            @endforeach

                        </div>
                    </div>
                @endforeach
                
            </div>
        </div>
    </div>
</x-app-layout>
