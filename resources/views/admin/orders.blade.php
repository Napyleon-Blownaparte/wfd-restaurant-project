<x-app-layout>
    <div class="flex mt-16">
        <!-- Sidebar -->
        <div class="w-64 bg-gradient-to-b from-black to-gray-800 text-white flex flex-col fixed h-full">
            <div class="p-6 border-b border-gray-700 flex items-center justify-between">
                <h2 class="text-xl font-bold">Order Status</h2>
            </div>
            <nav class="flex-1 p-4 overflow-y-auto scrollbar-hide">
                <ul>
                    <li>
                        <button class="block w-full text-left py-2 px-4 rounded hover:bg-gray-700">Order Received</button>
                    </li>
                    <li>
                        <button class="block w-full text-left py-2 px-4 rounded hover:bg-gray-700">Preparing</button>
                    </li>
                    <li>
                        <button class="block w-full text-left py-2 px-4 rounded hover:bg-gray-700">Ready to Serve</button>
                    </li>
                    <li>
                        <button class="block w-full text-left py-2 px-4 rounded hover:bg-gray-700">Completed</button>
                    </li>
                </ul>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="flex-1 ml-64 p-8 bg-gray-100">
            <!-- Filters -->
            <div class="mb-6 flex items-center space-x-4">
                <button class="py-2 px-4 bg-gray-800 text-white rounded hover:bg-gray-700">Today</button>
                <button class="py-2 px-4 bg-gray-800 text-white rounded hover:bg-gray-700">This Week</button>
                <input type="date" class="py-2 px-4 border rounded">
            </div>

            <!-- Order Card 1 -->
            <div class="bg-white shadow rounded-lg p-6 mb-4">
                <div class="mb-4">
                    <h3 class="text-lg font-bold">Customer Name: John Doe</h3>
                    <hr class="my-2">
                </div>

                <div class="mb-4">
                    <p class="text-sm text-gray-600">Order DateTime: 2024-12-12 14:30</p>
                </div>

                <ul class="mb-4">
                    <li class="flex justify-between py-2">
                        <span>Spaghetti Carbonara x2</span>
                        <span>Rp 20.000</span>
                    </li>
                    <li class="flex justify-between py-2">
                        <span>Caesar Salad x1</span>
                        <span>Rp 20.000</span>
                    </li>
                    <li class="flex justify-between py-2">
                        <span>Orange Juice x3</span>
                        <span>Rp 20.000</span>
                    </li>
                </ul>

                <div class="flex justify-between font-bold text-lg">
                    <span>Total</span>
                    <span>Rp 60.000</span>
                </div>

                <div class="mt-4">
                    <button class="w-full py-2 px-4 bg-green-500 text-white rounded hover:bg-green-600">Done</button>
                </div>
            </div>
            
            <!-- Order Card 2 -->
            <div class="bg-white shadow rounded-lg p-6 mb-4">
                <div class="mb-4">
                    <h3 class="text-lg font-bold">Customer Name: John Doe</h3>
                    <hr class="my-2">
                </div>

                <div class="mb-4">
                    <p class="text-sm text-gray-600">Order DateTime: 2024-12-12 14:30</p>
                </div>

                <ul class="mb-4">
                    <li class="flex justify-between py-2">
                        <span>Spaghetti Carbonara x2</span>
                        <span>Rp 20.000</span>
                    </li>
                    <li class="flex justify-between py-2">
                        <span>Caesar Salad x1</span>
                        <span>Rp 20.000</span>
                    </li>
                    <li class="flex justify-between py-2">
                        <span>Orange Juice x3</span>
                        <span>Rp 20.000</span>
                    </li>
                </ul>

                <div class="flex justify-between font-bold text-lg">
                    <span>Total</span>
                    <span>Rp 60.000</span>
                </div>

                <div class="mt-4">
                    <button class="w-full py-2 px-4 bg-green-500 text-white rounded hover:bg-green-600">Done</button>
                </div>
            </div>
            
        </div>
        
    </div>
</x-app-layout>