<x-app-layout>
    <div class="bg-black text-white">
        <div class="flex flex-col md:flex-row">

            <!-- Left Section -->
            <div class="md:w-1/2 w-full h-auto md:h-[calc(100vh-4rem)] md:sticky md:top-[4rem] flex items-center justify-center bg-cover bg-center p-10 relative"
                 style="background-image: url('/images/home.jpg');">
                <div class="absolute inset-0 bg-black bg-opacity-50"></div>
                <div class="relative text-center">
                    <h2 class="font-title1 text-3xl md:text-4xl mb-3">Check Out</h2>
                    <h1 class="font-title2 text-amber-300 text-5xl md:text-6xl font-extrabold mb-6">Our Menus</h1>
                </div>
            </div>

            <!-- Right Section -->
            <div class="md:w-1/2 w-full p-5 md:p-8 mt-5 md:mt-10 overflow-y-auto">

                <!-- Cart Button -->
                <div class="mb-8">
                    <button
                        id="cart-button"
                        class="bg-amber-300 text-black px-4 py-2 text-sm font-bold rounded hover:bg-amber-400 transition">
                        View Cart (0)
                    </button>
                </div>

                <!-- Category -->
                @foreach($categories as $category)
                    <div class="mb-8 md:mb-10">
                        <h3 class="font-title3 text-amber-300 text-2xl md:text-3xl font-bold mb-4 md:mb-5">{{$category->name}}</h3>
                        <div class="space-y-4 md:space-y-6">

                            <!-- Menu -->
                            @foreach($category->menus as $menu)
                                <div class="flex items-start md:items-center justify-between">
                                    <div class="flex items-start md:items-center">
                                        <img src={{asset('storage/' . $menu->image)}} alt={{$menu->name}} class="w-14 h-14 md:w-16 md:h-16 rounded-md">
                                        <div class="ml-3 md:ml-4">
                                            <h4 class="font-title3 text-base md:text-lg font-bold">{{$menu->name}}</h4>
                                            <p class="font-title3 text-sm text-gray-300">{{$menu->description}}</p>
                                        </div>
                                    </div>
                                    <div id="cart-button-{{ $menu->id }}" class="flex items-center space-x-4">
                                        <button
                                            class="bg-amber-300 text-black px-3 py-1 text-sm font-bold rounded hover:bg-amber-400 transition"
                                            onclick="addToCart({{ $menu->id }}, '{{ $menu->name }}', {{ $menu->price }})">
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

    <!-- Modal -->
    <div id="cart-modal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden">
        <div class="bg-gray-900 text-white rounded-lg w-11/12 md:w-1/2 p-6 relative">
            <button
                class="absolute top-4 right-4 text-gray-400 hover:text-white"
                onclick="toggleCartModal(false)">
                &times;
            </button>
            <h3 class="text-lg font-bold mb-4">Your Cart</h3>
            <ul id="cart-items" class="space-y-4"></ul>
        </div>
    </div>
</x-app-layout>

<script>
    const cart = {};

    function renderCart() {
        const cartButton = document.getElementById('cart-button');
        const cartItems = document.getElementById('cart-items');
        const totalItems = Object.values(cart).reduce((sum, item) => sum + item.quantity, 0);

        cartButton.textContent = `View Cart (${totalItems})`;

        cartItems.innerHTML = '';
        if (totalItems === 0) {
            cartItems.innerHTML = `<li class="text-gray-400">Your cart is empty.</li>`;
            return;
        }

        for (const [menuId, item] of Object.entries(cart)) {
            cartItems.innerHTML += `
                <li class="flex items-center justify-between">
                    <div>
                        <p class="font-bold">${item.name}</p>
                        <p class="text-sm text-gray-400">${item.price} x ${item.quantity}</p>
                    </div>
                    <div class="flex items-center space-x-2">
                        <button
                            class="bg-red-500 text-white px-2 py-1 rounded font-bold hover:bg-red-600 transition"
                            onclick="decrementCart(${menuId})">
                            -
                        </button>
                        <span class="text-white font-bold">${item.quantity}</span>
                        <button
                            class="bg-green-500 text-white px-2 py-1 rounded font-bold hover:bg-green-600 transition"
                            onclick="incrementCart(${menuId})">
                            +
                        </button>
                    </div>
                </li>
            `;
        }
    }

    function addToCart(menuId, name, price) {
        if (cart[menuId]) {
            cart[menuId].quantity += 1;
        } else {
            cart[menuId] = { name, price, quantity: 1 };
        }
        renderCart();
        renderCartButtons(menuId);
    }

    function incrementCart(menuId) {
        if (cart[menuId]) {
            cart[menuId].quantity += 1;
            renderCart();
            renderCartButtons(menuId);
        }
    }

    function decrementCart(menuId) {
        if (cart[menuId]) {
            cart[menuId].quantity -= 1;
            if (cart[menuId].quantity <= 0) {
                delete cart[menuId];
            }
            renderCart();
            renderCartButtons(menuId);
        }
    }

    function renderCartButtons(menuId) {
        const cartContainer = document.getElementById(`cart-button-${menuId}`);
        const quantity = cart[menuId]?.quantity || 0;

        if (quantity > 0) {
            cartContainer.innerHTML = `
                <div class="flex items-center space-x-2">
                    <button
                        class="bg-red-500 text-white px-2 py-1 rounded font-bold hover:bg-red-600 transition"
                        onclick="decrementCart(${menuId})">
                        -
                    </button>
                    <span class="text-white font-bold">${quantity}</span>
                    <button
                        class="bg-green-500 text-white px-2 py-1 rounded font-bold hover:bg-green-600 transition"
                        onclick="incrementCart(${menuId})">
                        +
                    </button>
                </div>
            `;
        } else {
            cartContainer.innerHTML = `
                <button
                    class="bg-amber-300 text-black px-3 py-1 text-sm font-bold rounded hover:bg-amber-400 transition"
                    onclick="addToCart(${menuId}, '${cart[menuId]?.name}', ${cart[menuId]?.price})">
                    Add to Cart
                </button>
            `;
        }
    }

    function toggleCartModal(show) {
        const modal = document.getElementById('cart-modal');
        if (show) {
            renderCart();
            modal.classList.remove('hidden');
        } else {
            modal.classList.add('hidden');
        }
    }

    document.getElementById('cart-button').addEventListener('click', () => toggleCartModal(true));
</script>
