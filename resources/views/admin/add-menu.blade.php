<x-app-layout>
    <div class="flex mt-16">
        <!-- Sidebar -->
        <div class="w-64 bg-gradient-to-b from-black to-gray-800 text-white flex flex-col fixed h-full">
            <div class="p-6 border-b border-gray-700 flex items-center justify-between">
                <h2 class="text-xl font-bold">Categories</h2>
                <button class="flex items-center justify-center w-8 h-8 rounded hover:bg-gray-700">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#5f6368">
                        <path d="M0 0h24v24H0V0z" fill="none"/>
                        <path d="M18 13h-5v5c0 .55-.45 1-1 1s-1-.45-1-1v-5H6c-.55 0-1-.45-1-1s.45-1 1-1h5V6c0-.55.45-1 1-1s1 .45 1 1v5h5c.55 0 1 .45 1 1s-.45 1-1 1z"/>
                    </svg>
                </button>
            </div>
            <nav class="flex-1 p-4 overflow-y-auto scrollbar-hide">
                <ul>
                    <li>
                        <button class="block w-full text-left py-2 px-4 rounded hover:bg-gray-700">A</button>
                    </li>
                    <li>
                        <button class="block w-full text-left py-2 px-4 rounded hover:bg-gray-700">B</button>
                    </li>
                    <li>
                        <button class="block w-full text-left py-2 px-4 rounded hover:bg-gray-700">C</button>
                    </li>
                    <li>
                        <button class="block w-full text-left py-2 px-4 rounded hover:bg-gray-700">D</button>
                    </li>
                </ul>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="flex-1 ml-64 p-8 bg-gray-100">
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-2xl font-bold">Category A</h1>
                <button class="px-4 py-2 bg-amber-400 text-black hover:bg-amber-500 rounded">Add Menu</button>
            </div>
            <div class="grid grid-cols-3 gap-6">
                <!-- Card 1 -->
                <div class="bg-white shadow rounded-lg overflow-hidden">
                    <img src="https://via.placeholder.com/300x200" alt="Menu Image" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="font-bold text-lg">Menu 1</h3>
                        <p class="text-gray-600 text-sm">Delicious description here.</p>
                        <p class="text-gray-800 font-bold mt-2">$10</p>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="bg-white shadow rounded-lg overflow-hidden">
                    <img src="https://via.placeholder.com/300x200" alt="Menu Image" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="font-bold text-lg">Menu 2</h3>
                        <p class="text-gray-600 text-sm">Delicious description here.</p>
                        <p class="text-gray-800 font-bold mt-2">$12</p>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="bg-white shadow rounded-lg overflow-hidden">
                    <img src="https://via.placeholder.com/300x200" alt="Menu Image" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="font-bold text-lg">Menu 3</h3>
                        <p class="text-gray-600 text-sm">Delicious description here.</p>
                        <p class="text-gray-800 font-bold mt-2">$15</p>
                    </div>
                </div>
                <!-- Card 4 -->
                <div class="bg-white shadow rounded-lg overflow-hidden">
                    <img src="https://via.placeholder.com/300x200" alt="Menu Image" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="font-bold text-lg">Menu 4</h3>
                        <p class="text-gray-600 text-sm">Delicious description here.</p>
                        <p class="text-gray-800 font-bold mt-2">$8</p>
                    </div>
                </div>
                <!-- Card 5 -->
                <div class="bg-white shadow rounded-lg overflow-hidden">
                    <img src="https://via.placeholder.com/300x200" alt="Menu Image" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="font-bold text-lg">Menu 5</h3>
                        <p class="text-gray-600 text-sm">Delicious description here.</p>
                        <p class="text-gray-800 font-bold mt-2">$9</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>

<style>
    .scrollbar-hide::-webkit-scrollbar {
        display: none;
    }
    
    .scrollbar-hide {
        -ms-overflow-style: none; 
        scrollbar-width: none;  
    }
    </style>
