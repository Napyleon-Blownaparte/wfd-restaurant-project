
<nav x-data="{ open: false, scrolled: false }" x-on:scroll.window="scrolled = window.scrollY > 0"
    :class="scrolled ? 'bg-black bg-opacity-50 backdrop-blur-md border-b border-gray-700' : 'bg-transparent'"
    class="fixed top-0 left-0 w-full z-50 transition duration-300 ease-in-out">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <!-- Logo -->
            <div class="flex items-center">
                <a href="{{ '/home' }}" class="flex items-center">
                    <img src="{{ asset('path-to-your-logo.png') }}" alt="Logo" class="h-8 w-8 rounded-full">
                    <span class="ml-2 text-white font-bold text-lg">Sushi</span>
                </a>
            </div>

            <!-- Navigation Links -->
            @if(!Auth::check() || auth()->user()->is_admin == false)
            <div class="hidden md:flex space-x-8">
                <a href="#home" class="text-white text-lg font-navbar hover:text-amber-500 transition">Home</a>
                <a href="{{ route('user.menus.index') }}" class="text-white text-lg font-navbar hover:text-amber-500 transition">Menu</a>
                <a href="#about" class="text-white text-lg font-navbar hover:text-amber-500 transition">About</a>
                <a href="#contact" class="text-white text-lg font-navbar hover:text-amber-500 transition">Contact</a>
            </div>
            @elseif(auth()->user()->is_admin == true)
            <div class="hidden md:flex space-x-8">
                <a href="{{ route('admin.menu-categories.menus.index', 1) }}" class="text-white text-lg font-navbar hover:text-amber-500 transition">Our Menu</a>
                <a href="{{ route('admin.vouchers.index') }}" class="text-white text-lg font-navbar hover:text-amber-500 transition">Vouchers</a>
                <a href="{{ route('admin.orders.index') }}" class="text-white text-lg font-navbar hover:text-amber-500 transition">Orders</a>
            </div>
            @endif



            <!-- Settings Dropdown -->


            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <!-- Basket with Notification -->
                <div class="relative mr-8">
                    <a href="{{ route('user.orders.create') }}" class="text-white hover:text-amber-500">
                        <!-- Basket Icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                          </svg>                          
                    </a>
                    <!-- Notification Badge -->
                    @if (session('cart') && count((array) session('cart')) > 0)
                        <div
                            class="absolute top-0 right-0 -mt-1 -mr-2 bg-red-600 text-white text-xs font-bold rounded-full h-5 w-5 flex items-center justify-center">
                            {{ count((array) session('cart')) }}
                        </div>
                    @endif


                </div>
                @auth
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button
                                class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-white hover:text-amber-500 focus:outline-none transition ease-in-out duration-150">
                                <div>{{ Auth::user()->name }}</div>
                                <svg class="ml-1 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <x-dropdown-link :href="route('profile.edit')">
                                {{ __('Profile') }}
                            </x-dropdown-link>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault(); this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                @else
                    <a href="{{ route('login') }}"
                        class="font-navbar font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log
                        in</a>

                    <a href="{{ route('register') }}"
                        class="font-navbar ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                @endauth
            </div>




            <!-- Hamburger Menu (Mobile) -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = !open"
                    class="inline-flex items-center justify-center p-2 rounded-md text-white hover:text-yellow-500 hover:bg-gray-700 focus:outline-none transition">
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden">
        @if(!Auth::check() || auth()->user()->is_admin == false)
        <div class="pt-2 pb-3 space-y-1">
            <a href="#home"
                class="block text-white hover:bg-gray-700 px-3 py-2 rounded-md text-base font-medium">Home</a>
            <a href="#menu"
                class="block text-white hover:bg-gray-700 px-3 py-2 rounded-md text-base font-medium">Menu</a>
            <a href="#about"
                class="block text-white hover:bg-gray-700 px-3 py-2 rounded-md text-base font-medium">About</a>
            <a href="#contact"
                class="block text-white hover:bg-gray-700 px-3 py-2 rounded-md text-base font-medium">Contact</a>
        </div>
        @elseif(auth()->user()->is_admin == true)
        <div class="pt-2 pb-3 space-y-1">
            <a href="{{ route('admin.menu-categories.menus.index', 1) }}" class="block text-white hover:bg-gray-700 px-3 py-2 rounded-md text-base font-medium">Our Menu</a>
            <a href="{{ route('admin.vouchers.index') }}" class="block text-white hover:bg-gray-700 px-3 py-2 rounded-md text-base font-medium">Vouchers</a>
            <a href="{{ route('admin.orders.index') }}" class="block text-white hover:bg-gray-700 px-3 py-2 rounded-md text-base font-medium">Orders</a>
        </div>
        @endif

        <!-- Responsive Settings Options -->

        <div class="pt-4 pb-1 border-t border-gray-700">
            @auth
                <div class="px-4">
                    <div class="font-medium text-base text-white">{{ Auth::user()->name }}</div>
                    <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                </div>
                <div class="mt-3 space-y-1">
                    <a href="{{ route('profile.edit') }}"
                        class="block text-white hover:bg-gray-700 px-3 py-2 rounded-md text-base font-medium">Profile</a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a href="{{ route('logout') }}"
                            class="block text-white hover:bg-gray-700 px-3 py-2 rounded-md text-base font-medium"
                            onclick="event.preventDefault(); this.closest('form').submit();">
                            Log Out
                        </a>
                    </form>
                </div>
            @else
                <div class="space-y-1">
                    <a href="{{ route('login') }}"
                        class="block text-white hover:bg-gray-700 px-3 py-2 rounded-md text-base font-medium">Log
                        in</a>


                </div>
                <div class="space-y-1">
                    <a href="{{ route('register') }}"
                        class="block text-white hover:bg-gray-700 px-3 py-2 rounded-md text-base font-medium">Register</a>
                </div>
            @endauth
        </div>




    </div>
</nav>
