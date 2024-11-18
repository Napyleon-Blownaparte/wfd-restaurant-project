<x-app-layout>
    <x-slot name="body" class="bg-black text-white">
        <div class="relative h-screen flex flex-col items-center justify-center bg-cover bg-center" style="background-image: url('/path/to/your/image.jpg');">
            <!-- Overlay -->
            <div class="absolute inset-0 bg-black opacity-50"></div>
    
            <!-- Content -->
            <header class="absolute top-0 left-0 right-0 flex justify-between items-center p-6 z-10">
                <div class="text-yellow-500 font-bold text-lg">DMR Sushi</div>
                <nav class="space-x-6 text-lg">
                    <a href="#" class="hover:text-yellow-500">Menu</a>
                    <a href="#" class="hover:text-yellow-500">Fine Dining</a>
                    <a href="#" class="hover:text-yellow-500">About</a>
                    <a href="#" class="hover:text-yellow-500">Contact</a>
                </nav>
                <a href="#" class="bg-yellow-500 text-black py-2 px-4 rounded hover:bg-yellow-600">Reservation</a>
            </header>
    
            <div class="z-10 text-center">
                <p class="text-yellow-500 text-sm">Best Sushi In Town</p>
                <h1 class="text-5xl font-bold mt-4">Taste the Rich Flavor of High Quality Sushi</h1>
                <p class="mt-4 text-gray-300 text-lg">We only use the five-star quality for our menu. Come and get the richness in every food we serve.</p>
                <a href="#" class="mt-8 inline-block bg-yellow-500 text-black py-3 px-6 rounded hover:bg-yellow-600">Go to Menu</a>
            </div>
        </div>
    </x-slot>
    
</x-app-layout>