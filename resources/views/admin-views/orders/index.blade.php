<x-app-layout>
    <div class="mt-16">
        <!-- Sidebar -->
        <div class="sm:flex sm:flex-col bg-gradient-to-b from-black to-gray-800 text-white sm:w-full sm:mt-4">
            <div class="p-6 border-b border-gray-700 flex items-center justify-between">
                <h2 class="text-xl font-bold">Order Status</h2>
            </div>
            <nav class="flex p-4 overflow-hidden scrollbar-hide relative">
                <ul class="flex sm:flex-row sm:space-x-4 sm:overflow-x-auto overflow-hidden pl-4 pr-4 ">
                    <li>
                        <form method="GET" action="{{ route('admin.orders.index') }}">
                            <input type="hidden" name="order_status" value="pending">
                            <button type="submit"
                                class="block w-full text-left py-2 px-4 rounded hover:bg-gray-700 whitespace-nowrap">
                                Order Received
                            </button>
                        </form>
                    </li>
                    <li>
                        <form method="GET" action="{{ route('admin.orders.index') }}">
                            <input type="hidden" name="order_status" value="preparing">
                            <button type="submit"
                                class="block w-full text-left py-2 px-4 rounded hover:bg-gray-700 whitespace-nowrap">
                                Preparing
                            </button>
                        </form>
                    </li>
                    <li>
                        <form method="GET" action="{{ route('admin.orders.index') }}">
                            <input type="hidden" name="order_status" value="ready">
                            <button type="submit"
                                class="block w-full text-left py-2 px-4 rounded hover:bg-gray-700 whitespace-nowrap">
                                Ready to Serve
                            </button>
                        </form>
                    </li>
                    <li>
                        <form method="GET" action="{{ route('admin.orders.index') }}">
                            <input type="hidden" name="order_status" value="completed">
                            <button type="submit"
                                class="block w-full text-left py-2 px-4 rounded hover:bg-gray-700 whitespace-nowrap">
                                Completed
                            </button>
                        </form>
                    </li>
                </ul>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="flex-1 p-8 bg-gray-100">

                <!-- Filters -->
                <form method="GET" action="{{ route('admin.orders.index') }}">
                    <div class="mb-6 flex items-center space-x-4">
                        <!-- Periode Filter -->
                        <button type="submit" name="period" value="today"
                            class="py-2 px-4 bg-gray-800 text-white rounded hover:bg-gray-700 {{ request('period') == 'today' ? 'bg-gray-600' : '' }}">
                            Today
                        </button>
                        <button type="submit" name="period" value="this_week"
                            class="py-2 px-4 bg-gray-800 text-white rounded hover:bg-gray-700 {{ request('period') == 'this_week' ? 'bg-gray-600' : '' }}">
                            This Week
                        </button>
                        <input type="date" name="start_date" value="{{ request('start_date') }}"
                            class="py-2 px-4 border rounded">
                        <input type="date" name="end_date" value="{{ request('end_date') }}"
                            class="py-2 px-4 border rounded">
                        <button type="submit" name="period" value="custom"
                            class="py-2 px-4 bg-blue-500 text-white rounded hover:bg-blue-600">Filter</button>
                    </div>
                </form>

                @if ($orders->isEmpty())
                <div class=" mb-64">
                    <svg class="svg-icon text-slate-400 m-auto translate-y-20" width="200" height="200"
                        style="fill: currentColor;" viewBox="0 0 1024 1024" version="1.1"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M945.643909 899.025661 767.204891 720.555943c-1.134847-1.136893-2.585895-1.641383-3.815909-2.555196 58.732659-68.858274 94.376461-158.0302 94.376461-255.623935 0-217.74114-176.577624-394.350486-394.350486-394.350486-217.771839 0-394.350486 176.608324-394.350486 394.350486 0 34.792411 4.952802 68.322062 13.406335 100.464109 10.219759-15.58393 36.712133-52.364625 52.549843-59.237149-1.702782-13.532201-2.838651-27.220968-2.838651-41.22696 0-182.917006 148.31493-331.264683 331.264683-331.264683s331.263659 148.346653 331.263659 331.264683c0 143.771451-91.758844 265.811971-219.7284 311.643809-6.088672 25.960255-15.929808 50.720172-29.335119 73.747631 65.640999-14.005992 125.32124-44.097334 174.432775-86.301552 0.914836 1.199315 1.419326 2.648316 2.524496 3.784186l178.468694 178.375573c12.33391 12.396331 32.268938 12.396331 44.601824 0C958.007495 931.355997 958.007495 911.358547 945.643909 899.025661L945.643909 899.025661zM480.417189 541.360701c-45.421492-45.421492-105.827257-70.436212-170.111353-70.436212-64.284095 0-124.657114 25.01472-170.07963 70.436212-45.453215 45.422516-70.466911 105.826234-70.466911 170.109306 0 64.285119 25.013697 124.658138 70.466911 170.111353 45.453215 45.454238 105.857956 70.465888 170.111353 70.465888 0 0 0 0 0.030699 0 64.253396 0 124.659161-25.045419 170.07963-70.465888 45.422516-45.388746 70.437236-105.826234 70.437236-170.111353C550.853401 647.217634 525.837658 586.812893 480.417189 541.360701zM435.815365 836.979536c-33.530674 33.531698-78.100776 51.982932-125.477806 51.982932l0 0c-47.408753 0-92.010577-18.48398-125.509529-51.982932-33.529651-33.529651-51.982932-78.099752-51.982932-125.509529 0-47.408753 18.453281-91.977831 51.982932-125.506459 33.529651-33.532721 78.069053-51.953256 125.477806-51.953256 47.409776 0 91.978854 18.453281 125.509529 51.953256 33.529651 33.529651 51.981908 78.097706 51.981908 125.506459C487.797273 758.911506 469.345016 803.450908 435.815365 836.979536zM420.895561 600.914052c-12.33391-12.335956-32.268938-12.335956-44.601824 0l-65.988924 65.986877-65.9879-65.986877c-12.332886-12.335956-32.267914-12.335956-44.600801 0-12.33391 12.332886-12.33391 32.266891 0 44.601824l65.986877 65.985854-65.986877 65.9879c-12.33391 12.332886-12.33391 32.267914 0 44.601824 6.15007 6.151094 14.226003 9.242502 22.299889 9.242502 8.075933 0 16.150842-3.091408 22.300912-9.242502l65.9879-65.986877 65.988924 65.986877c6.15007 6.151094 14.224979 9.242502 22.299889 9.242502 8.075933 0 16.150842-3.091408 22.300912-9.242502 12.33391-12.33391 12.33391-32.268938 0-44.601824l-65.986877-65.9879 65.986877-65.985854C433.196725 633.212666 433.196725 613.246939 420.895561 600.914052L420.895561 600.914052z" />
                    </svg>
                    <p class="text-slate-500 text-center translate-y-[6em]">Pencarian tidak ditemukan :(</p>
                </div>
            @else

                <!-- Orders List -->
                @foreach ($orders as $order)
                    <div class="bg-white shadow rounded-lg p-6 mb-4">
                        <div class="mb-4">
                            <h3 class="text-lg font-bold">Customer Name: {{ $order->user->name }}</h3>
                            <hr class="my-2">
                        </div>

                        <div class="mb-4">
                            <p class="text-sm text-gray-600">Order DateTime: {{ $order->created_at }}</p>
                        </div>

                        <ul class="mb-4">
                            @foreach ($order->menu_orders as $menu_order)
                                <li class="flex justify-between py-2">
                                    <span>{{ $menu_order->menu->name }} <span>x
                                            {{ $menu_order->quantity }}</span></span>
                                    <span>Rp
                                        {{ number_format($menu_order->menu->price * $menu_order->quantity, 0, ',', '.') }}</span>
                                </li>
                            @endforeach
                        </ul>

                        <div class="flex justify-between font-bold text-lg">
                            <span>Total</span>
                            <span>Rp {{ number_format($order->total_price, 0, ',', '.') }}</span>
                        </div>

                        <div class="mt-4">
                            <button
                                class="w-full py-2 px-4 bg-green-500 text-white rounded hover:bg-green-600">Done</button>
                        </div>
                    </div>
                @endforeach
                <div class="mt-6">
                    {{ $orders->links() }}
                </div>
            @endif


        </div>
    </div>
</x-app-layout>
