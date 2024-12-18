<x-app-layout>
    <div class="bg-neutral-950 text-white">
        <!-- Home Section -->
        <div class="relative h-screen flex flex-col items-center justify-center bg-cover bg-center" style="background-image: url('images/home.jpg');">
            <div class="absolute inset-0 bg-black opacity-50"></div>
            <div class="z-10 w-11/12 sm:w-3/4 md:w-1/2 text-center">
                <p class="font-title1 text-2xl sm:text-3xl">Best Sushi In Town</p>
                <h1 class="font-title2 text-amber-300 text-3xl sm:text-4xl md:text-5xl font-bold mt-4">
                    TASTE THE RICH FLAVOR OF HIGH QUALITY SUSHI
                </h1>
                <p class="font-title3 mt-4 text-gray-300 text-sm sm:text-base max-w-xs sm:max-w-sm md:max-w-md mx-auto">
                    We only use the five-star quality for our menu, Come and get the richness in every food we serve.
                </p>
                <a href="{{ route('user.menus.index') }}" class="mt-8 inline-block font-title3 bg-amber-400 text-black py-3 px-6 rounded-3xl hover:bg-amber-500 text-sm sm:text-base">
                    Order Menu
                </a>
            </div>
        </div>

        <!-- Special Menu Section -->
        <div class="bg-black bg-opacity-60 py-12">
            <div class="text-center text-white">
                <p class="font-title1 text-gray-300 text-2xl">Special Menu</p>
                <h2 class="font-title2 text-3xl md:text-4xl font-bold text-amber-300 mt-2 mb-4">TODAY'S SPECIAL</h2>
                <p class="font-title3 text-gray-300 max-w-lg mx-auto text-sm md:text-base">
                    Special menu oftenly comes different every day, this is our special food for today.
                </p>
            </div>

            <!-- Card Section -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 mt-10 px-4 lg:px-32">
            <!-- Card 1 -->
            <div class="bg-neutral-800 bg-opacity-90 rounded-lg overflow-hidden shadow-lg flex flex-col">
                <img src="images/tuna.jpg" alt="Tuna Sushi" class="w-full h-48 object-cover">
                <div class="p-4 sm:p-6 text-center flex-grow flex flex-col">
                    <h3 class="font-title2 text-lg sm:text-xl font-bold text-amber-300">Tuna Sushi</h3>
                    <p class="font-title3 text-gray-300 mt-2 text-sm md:text-base">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ut imperdiet lectus.
                    </p>
                    <div class="flex justify-center items-center mt-4 text-amber-300">
                        <span class="text-sm sm:text-lg font-title3">★★★★★</span>
                    </div>
                    <a href="#" class="block bg-amber-300 font-title3 text-black mt-4 sm:mt-6 py-2 rounded-lg hover:bg-amber-500 transition text-sm sm:text-base">
                        Order Now
                    </a>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="bg-neutral-800 bg-opacity-90 rounded-lg overflow-hidden shadow-lg flex flex-col">
                <img src="images/salmon.jpg" alt="Salmon Sushi" class="w-full h-48 object-cover">
                <div class="p-4 sm:p-6 text-center flex-grow flex flex-col">
                    <h3 class="font-title2 text-lg sm:text-xl font-bold text-amber-300">Salmon Sushi</h3>
                    <p class="font-title3 text-gray-300 mt-2 text-sm md:text-base">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ut imperdiet lectus.
                    </p>
                    <div class="flex justify-center items-center mt-4 text-amber-300">
                        <span class="text-sm sm:text-lg font-title3">★★★★★</span>
                    </div>
                    <a href="#" class="block bg-amber-300 font-title3 text-black mt-4 sm:mt-6 py-2 rounded-lg hover:bg-amber-500 transition text-sm sm:text-base">
                        Order Now
                    </a>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="bg-neutral-800 bg-opacity-90 rounded-lg overflow-hidden shadow-lg flex flex-col">
                <img src="images/sashimi.jpg" alt="Sashimi Bowl" class="w-full h-48 object-cover">
                <div class="p-4 sm:p-6 text-center flex-grow flex flex-col">
                    <h3 class="font-title2 text-lg sm:text-xl font-bold text-amber-300">Sashimi Bowl</h3>
                    <p class="font-title3 text-gray-300 mt-2 text-sm md:text-base">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ut imperdiet lectus.
                    </p>
                    <div class="flex justify-center items-center mt-4 text-amber-300">
                        <span class="text-sm sm:text-lg font-title3">★★★★★</span>
                    </div>
                    <a href="#" class="block bg-amber-300 font-title3 text-black mt-4 sm:mt-6 py-2 rounded-lg hover:bg-amber-500 transition text-sm sm:text-base">
                        Order Now
                    </a>
                </div>
            </div>
        </div>


        <!-- About Section -->
        <div class="max-w-7xl mx-auto mt-10 grid grid-cols-1 lg:grid-cols-2 gap-8 px-4 sm:px-6 lg:px-12">
            <!-- Images Section -->
            <div class="grid grid-cols-3 gap-4">
                <div class="col-span-2">
                    <img src="/images/sushi-chef.jpg" alt="Chef in kitchen" class="w-full h-full object-cover rounded-lg">
                </div>
                <div class="grid grid-rows-2 gap-4">
                    <img src="/images/sushi-make.jpg" alt="Making food" class="w-full h-full object-cover rounded-lg">
                    <img src="/images/sushi-flambe.jpg" alt="Cooking with fire" class="w-full h-full object-cover rounded-lg">
                </div>
            </div>

            <!-- Text Content Section -->
            <div class="flex flex-col justify-center">
                <p class="text-2xl font-title1 text-gray-300">About Us</p>
                <h2 class="text-3xl md:text-4xl font-title2 font-bold text-amber-300 mt-2">Our Story</h2>
                <p class="mt-4 font-title3 text-gray-300 text-sm md:text-base">
                    A journey for making successful luxury restaurant with the best services.
                </p>
                <p class="mt-4 font-title3 text-gray-300 text-sm md:text-base">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer feugiat urna id leo euismod rhoncus. Aliquam erat volutpat. Nulla id aliquam neque, at dignissim quam. Praesent et lacus accumsan, consequat nisl a, mattis sapien.
                </p>
                <p class="mt-4 font-title3 text-gray-300 text-sm md:text-base">
                    Nam sodales ullamcorper aliquet. Phasellus ut pretium libero, vitae imperdiet purus. Sed sed tincidunt velit. Aliquam vitae ipsum molestie, vehicula nisi quis, finibus leo.
                </p>
            </div>
        </div>

        <!-- Contact Section -->
        <div class="relative mt-20 bg-cover h-full bg-center h-screen" style="background-image: url('images/contact.jpg');">
            <div class="absolute inset-0 bg-black bg-opacity-50"></div>
            <div class="relative z-10 flex flex-col items-center justify-center h-full text-center px-4">
                <h1 class="font-title2 text-3xl md:text-5xl font-bold text-amber-300 mb-6">
                    WE ARE READY TO OFFER<br>THE BEST DINING EXPERIENCES
                </h1>
                <div class="flex flex-col items-center font-title3 text-gray-300 text-sm md:text-base space-y-2 mb-8">
                    <div class="flex items-center">
                        <svg class="w-6 h-6 text-amber-300 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                            <path fill-rule="evenodd" d="m11.54 22.351.07.04.028.016a.76.76 0 0 0 .723 0l.028-.015.071-.041a16.975 16.975 0 0 0 1.144-.742 19.58 19.58 0 0 0 2.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 0 0-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 0 0 2.682 2.282 16.975 16.975 0 0 0 1.145.742ZM12 13.5a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" clip-rule="evenodd" />
                          </svg>
                        Siwalankerto Street, Jawa Timur, Surabaya, 12345
                    </div>
                    <div class="flex items-center">
                        <svg class="w-6 h-6 text-amber-300 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                            <path fill-rule="evenodd" d="M1.5 4.5a3 3 0 0 1 3-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 0 1-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 0 0 6.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 0 1 1.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 0 1-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5Z" clip-rule="evenodd" />
                          </svg>
                        (+62) 123-456-789
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
