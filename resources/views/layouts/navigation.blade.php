
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
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" x="40px" y="40px" viewBox="0 0 256 256"
                            width="32" height="32" enable-background="new 0 0 256 256" xml:space="preserve">
                            <metadata> Svg Vector Icons : http://www.onlinewebfonts.com/icon </metadata>
                            <g>
                                <g>
                                    <path fill="#FFFFFF"
                                        d="M69,216.5h29.5V187H69V216.5z M78.8,196.8h9.8v9.8h-9.8V196.8z" />
                                    <path fill="#FFFFFF"
                                        d="M69,177.2h29.5v-29.5H69V177.2z M78.8,157.5h9.8v9.8h-9.8V157.5z" />
                                    <path fill="#FFFFFF"
                                        d="M191.9,59.2h-5.4c-2.3-11.2-12.2-19.7-24.1-19.7h-4.9c0-16.3-13.2-29.5-29.5-29.5c-16.3,0-29.5,13.2-29.5,29.5h-4.9c-11.9,0-21.8,8.5-24.1,19.7h-5.4c-13.6,0-24.6,11-24.6,24.6v137.6c0,13.6,11,24.6,24.6,24.6h127.8c13.6,0,24.6-11,24.6-24.6V83.8C216.5,70.2,205.5,59.2,191.9,59.2z M128,24.7c8.1,0,14.8,6.6,14.8,14.8s-6.6,14.8-14.8,14.8c-8.1,0-14.8-6.6-14.8-14.8S119.9,24.7,128,24.7z M206.7,221.4c0,8.2-6.5,14.8-14.7,14.8H64.1c-8.1,0-14.7-6.6-14.7-14.8V83.8c0-8.2,6.6-14.8,14.7-14.8H69v19.7h118V69h4.9c8.1,0,14.7,6.6,14.7,14.8V221.4z" />
                                    <path fill="#FFFFFF" d="M118.2,118.2H187v9.8h-68.8V118.2z" />
                                    <path fill="#FFFFFF" d="M118.2,157.5H187v9.8h-68.8V157.5z" />
                                    <path fill="#FFFFFF" d="M118.2,196.8H187v9.8h-68.8V196.8z" />
                                    <path fill="#FFFFFF"
                                        d="M69,137.8h29.5v-29.5H69V137.8z M78.8,118.2h9.8v9.8h-9.8V118.2z" />
                                </g>
                            </g>
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
