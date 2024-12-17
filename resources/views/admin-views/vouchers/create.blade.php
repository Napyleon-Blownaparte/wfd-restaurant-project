<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Voucher') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    {{-- START FORM --}}
                    <form action="{{ route('admin.vouchers.store') }}" method="POST">
                        @csrf

                        <!-- Name -->
                        <div class="mb-4">
                            <x-input-label for="name" :value="__('Name')" class="block text-gray-700" />
                            <x-text-input id="name" type="text" name="name" :value="old('name')" autofocus
                                placeholder="Enter voucher name, e.g., 'Holiday Discount'"
                                class="mt-1 block w-full p-2 border border-gray-300 rounded-md" />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>

                        <!-- Description -->
                        <div class="mb-4">
                            <x-input-label for="description" :value="__('Description')" class="block text-gray-700" />
                            <textarea id="description" name="description" rows="4"
                                placeholder="Enter a brief description of the voucher"
                                class="mt-1 block w-full p-2 border border-gray-300 rounded-md">{{ old('description') }}</textarea>
                            <x-input-error :messages="$errors->get('description')" class="mt-2" />
                        </div>

                        <!-- Start Date -->
                        <div class="mb-4">
                            <x-input-label for="start_date" :value="__('Start Date')" class="block text-gray-700" />
                            <x-text-input id="start_date" type="date" name="start_date" :value="old('start_date')"
                                class="mt-1 block w-full p-2 border border-gray-300 rounded-md" />
                            <x-input-error :messages="$errors->get('start_date')" class="mt-2" />
                        </div>

                        <!-- End Date -->
                        <div class="mb-4">
                            <x-input-label for="end_date" :value="__('End Date')" class="block text-gray-700" />
                            <x-text-input id="end_date" type="date" name="end_date" :value="old('end_date')"
                                class="mt-1 block w-full p-2 border border-gray-300 rounded-md" />
                            <x-input-error :messages="$errors->get('end_date')" class="mt-2" />
                        </div>

                        <!-- Discount -->
                        <div class="mb-4">
                            <x-input-label for="discount" :value="__('Discount (%)')" class="block text-gray-700" />
                            <x-text-input id="discount" type="number" name="discount" :value="old('discount')" min="0"
                                placeholder="Enter discount percentage, e.g., '20'"
                                class="mt-1 block w-full p-2 border border-gray-300 rounded-md" />
                            <x-input-error :messages="$errors->get('discount')" class="mt-2" />
                        </div>

                        <!-- Price -->
                        <div class="mb-4">
                            <x-input-label for="price" :value="__('Price (Rp)')" class="block text-gray-700" />
                            <x-text-input id="price" type="number" name="price" :value="old('price')" min="0"
                                placeholder="Enter price, e.g., '50000'"
                                class="mt-1 block w-full p-2 border border-gray-300 rounded-md" />
                            <x-input-error :messages="$errors->get('price')" class="mt-2" />
                        </div>

                        <!-- Submit Button -->
                        <div class="flex justify-end">
                            <button type="submit"
                                style="background-color: #251F4F; color: white; padding: 0.5rem 1rem; border-radius: 0.375rem; border: none; cursor: pointer;"
                                class="hover:bg-blue-950 focus:outline-none focus:ring-2 focus:ring-blue-900">
                                {{ __('Create Voucher') }}
                            </button>
                        </div>
                    </form>
                    {{-- END FORM --}}

                </div>
            </div>
        </div>
    </div>

</x-app-layout>
