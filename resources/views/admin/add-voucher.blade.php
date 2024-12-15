<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://cdn.tailwindcss.com"></script>
<x-app-layout>
    <div class="mt-16">
       <!-- Sidebar -->
    <div class="sm:flex sm:flex-col bg-gradient-to-b from-black to-gray-800 text-white sm:w-full sm:mt-4 p-6 border-b border-gray-700 flex justify-between">
        <h2 class="text-xl font-bold">Vouchers</h2>
    </div>

        <!-- Main Content -->
        <div class="flex-1 p-8 bg-gray-100">
            <div class="flex sm:justify-end justify-center mb-6">
                <button id="add-voucher-btn" class="px-4 py-2 bg-amber-400 text-black hover:bg-amber-500 rounded">Add Voucher</button>
            </div>


            <!-- Card 1 -->
                <div class="bg-white shadow rounded-lg overflow-hidden relative mb-4">
                    <button class="absolute top-2 right-2 w-10 h-10 bg-gray-200 hover:bg-gray-300 rounded-full flex items-center justify-center edit-card-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#000000">
                            <path d="M200-200h57l391-391-57-57-391 391v57Zm-80 80v-170l528-527q12-11 26.5-17t30.5-6q16 0 31 6t26 18l55 56q12 11 17.5 26t5.5 30q0 16-5.5 30.5T817-647L290-120H120Zm640-584-56-56 56 56Zm-141 85-28-29 57 57-29-28Z"/>
                        </svg>
                    </button>
                    <img src="https://via.placeholder.com/300x200" alt="voucher Image" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="font-bold text-lg">VALENTINES DAY SPECIAL</h3>
                        <div class="flex space-x-1">
                            <p>Description:</p>
                            <p class="text-gray-600">Couples get 10% off of any couple set.</p>
                        </div>
                        <div class="flex space-x-1">
                            <p>Eligible Date:</p>
                            <p class="text-gray-600">14-02-2024 until 14-02-2024</p>
                        </div>
                        <div class="flex space-x-1">
                            <p>Discount (%):</p>
                            <p class="text-gray-600">10</p>
                        </div>
                        <div class="flex space-x-1">
                            <p>Price:</p>
                            <p class="text-gray-600">Rp 143</p>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="bg-white shadow rounded-lg overflow-hidden relative mb-4">
                    <button class="absolute top-2 right-2 w-10 h-10 bg-gray-200 hover:bg-gray-300 rounded-full flex items-center justify-center edit-card-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#000000">
                            <path d="M200-200h57l391-391-57-57-391 391v57Zm-80 80v-170l528-527q12-11 26.5-17t30.5-6q16 0 31 6t26 18l55 56q12 11 17.5 26t5.5 30q0 16-5.5 30.5T817-647L290-120H120Zm640-584-56-56 56 56Zm-141 85-28-29 57 57-29-28Z"/>
                        </svg>
                    </button>
                    <img src="https://via.placeholder.com/300x200" alt="voucher Image" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="font-bold text-lg">VALENTINES DAY SPECIAL</h3>
                        <div class="flex space-x-1">
                            <p>Description:</p>
                            <p class="text-gray-600">Couples get 10% off of any couple set.</p>
                        </div>
                        <div class="flex space-x-1">
                            <p>Eligible Date:</p>
                            <p class="text-gray-600">14-02-2024 until 14-02-2024</p>
                        </div>
                        <div class="flex space-x-1">
                            <p>Discount (%):</p>
                            <p class="text-gray-600">10</p>
                        </div>
                        <div class="flex space-x-1">
                            <p>Price:</p>
                            <p class="text-gray-600">Rp 143</p>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="bg-white shadow rounded-lg overflow-hidden relative mb-4">
                    <button class="absolute top-2 right-2 w-10 h-10 bg-gray-200 hover:bg-gray-300 rounded-full flex items-center justify-center edit-card-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#000000">
                            <path d="M200-200h57l391-391-57-57-391 391v57Zm-80 80v-170l528-527q12-11 26.5-17t30.5-6q16 0 31 6t26 18l55 56q12 11 17.5 26t5.5 30q0 16-5.5 30.5T817-647L290-120H120Zm640-584-56-56 56 56Zm-141 85-28-29 57 57-29-28Z"/>
                        </svg>
                    </button>
                    <img src="https://via.placeholder.com/300x200" alt="voucher Image" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="font-bold text-lg">VALENTINES DAY SPECIAL</h3>
                        <div class="flex space-x-1">
                            <p>Description:</p>
                            <p class="text-gray-600">Couples get 10% off of any couple set.</p>
                        </div>
                        <div class="flex space-x-1">
                            <p>Eligible Date:</p>
                            <p class="text-gray-600">14-02-2024 until 14-02-2024</p>
                        </div>
                        <div class="flex space-x-1">
                            <p>Discount (%):</p>
                            <p class="text-gray-600">10</p>
                        </div>
                        <div class="flex space-x-1">
                            <p>Price:</p>
                            <p class="text-gray-600">Rp 143</p>
                        </div>
                    </div>
                </div>
        </div>
</div>



<!-- Add Voucher Modal -->
<div id="add-voucher-modal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
    <div class="bg-white rounded-lg shadow-lg w-full max-w-sm p-6 mx-4">
        <button id="close-voucher-modal-btn" class="absolute top-2 right-2 w-8 h-8 bg-gray-200 hover:bg-gray-300 rounded-full flex items-center justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#000000">
                <path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z" />
            </svg>
        </button>
        <h2 class="text-xl font-bold mb-4 text-center">Add New Voucher</h2>
        <input type="file" id="voucher-image" class="w-full border border-gray-300 rounded px-3 py-2 mb-4" placeholder="Voucher Image">
        <input type="text" id="voucher-name" class="w-full border border-gray-300 rounded px-3 py-2 mb-4" placeholder="Voucher Name">
        <textarea id="voucher-description" class="w-full border border-gray-300 rounded px-3 py-2 mb-4" placeholder="Description"></textarea>
        <div class="flex space-x-2">
            <p class="mt-2">Start Date:</p>
            <input id="start-date" type="date" class="py-2 px-4 border rounded mb-4">
        </div>
        <div class="flex space-x-3">
            <p class="mt-2">End Date:</p>
            <input id="end-date" type="date" class="py-2 px-4 border rounded mb-4">
        </div>
        <input type="text" id="voucher-discount" class="w-full border border-gray-300 rounded px-3 py-2 mb-4" placeholder="Discount (%)">
        <div class="flex items-center mb-4">
            <span class="text-gray-500 mr-2">Rp</span>
            <input type="number" id="voucher-price" class="w-full border border-gray-300 rounded px-3 py-2" placeholder="Price">
        </div>
        <div class="flex flex-col sm:flex-row justify-end space-y-2 sm:space-y-0 sm:space-x-2">
            <button id="save-voucher-btn" class="px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600 w-full sm:w-auto">Save</button>
            <button id="cancel-voucher-btn" class="px-4 py-2 bg-gray-300 text-black rounded hover:bg-gray-400 w-full sm:w-auto">Cancel</button>
        </div>
    </div>
</div>

<!-- Edit Voucher Modal -->
<div id="edit-voucher-modal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
    <div class="bg-white rounded-lg shadow-lg w-full max-w-sm p-6 mx-4">
        <button id="close-edit-voucher-modal-btn" class="absolute top-2 right-2 w-8 h-8 bg-gray-200 hover:bg-gray-300 rounded-full flex items-center justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#000000">
                <path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z" />
            </svg>
        </button>
        <h2 class="text-xl font-bold mb-4 text-center">Edit Voucher</h2>
        <input type="file" id="edit-voucher-image" class="w-full border border-gray-300 rounded px-3 py-2 mb-4">
        <input type="text" id="edit-voucher-name" class="w-full border border-gray-300 rounded px-3 py-2 mb-4" placeholder="Voucher Name">
        <textarea id="edit-voucher-description" class="w-full border border-gray-300 rounded px-3 py-2 mb-4" placeholder="Description"></textarea>
        <div class="flex space-x-2">
            <p class="mt-2">Start Date:</p>
            <input id="edit-start-date" type="date" class="py-2 px-4 border rounded mb-4">
        </div>
        <div class="flex space-x-3">
            <p class="mt-2">End Date:</p>
            <input id="edit-end-date" type="date" class="py-2 px-4 border rounded mb-4">
        </div>
        <input type="text" id="edit-voucher-discount" class="w-full border border-gray-300 rounded px-3 py-2 mb-4" placeholder="Discount (%)">
        <div class="flex items-center mb-4">
            <span class="text-gray-500 mr-2">Rp</span>
            <input type="number" id="edit-voucher-price" class="w-full border border-gray-300 rounded px-3 py-2" placeholder="Price">
        </div>
        <div class="flex flex-col sm:flex-row justify-end space-y-2 sm:space-y-0 sm:space-x-2">
            <button id="save-edit-voucher-btn" class="px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600 w-full sm:w-auto">Save</button>
            <button id="delete-voucher-btn" class="px-4 py-2 bg-red-500 text-white rounded hover:bg-red-600 w-full sm:w-auto">Delete</button>
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

<script>
    
    // Add Voucher Modal
    document.getElementById('add-voucher-btn').addEventListener('click', () => {
        document.getElementById('add-voucher-modal').classList.remove('hidden');
    });

    document.getElementById('close-voucher-modal-btn').addEventListener('click', () => {
        document.getElementById('add-voucher-modal').classList.add('hidden');
    });

    document.getElementById('cancel-voucher-btn').addEventListener('click', () => {
        document.getElementById('add-voucher-modal').classList.add('hidden');
    });

    document.getElementById('save-voucher-btn').addEventListener('click', () => {
        const voucherImage = document.getElementById('voucher-image').value;
        const voucherName = document.getElementById('voucher-name').value;
        const voucherDescription = document.getElementById('voucher-description').value;
        const voucherStartDate = document.getElementById('start-date').value;
        const voucherEndDate = document.getElementById('end-date').value;
        const voucherDiscount = document.getElementById('voucher-discount').value;
        const voucherPrice = document.getElementById('voucher-price').value;

        if (voucherImage && voucherName.trim() && voucherDescription.trim() && voucherStartDate && voucherEndDate && voucherDiscount && voucherPrice) {
            alert(`Voucher "${voucherName}" added successfully!`);
            document.getElementById('add-voucher-modal').classList.add('hidden');
        } else {
            alert('Please fill in all fields.');
        }
    });

    // Edit Voucher Modal
    document.querySelectorAll('.edit-card-btn').forEach(button => {
        button.addEventListener('click', () => {
            document.getElementById('edit-voucher-modal').classList.remove('hidden');
            document.getElementById('edit-voucher-name').value = 'VALENTINES DAY SPECIAL';
            document.getElementById('edit-voucher-description').value = 'Couples get 10% off of any couple set.';
            document.getElementById('edit-start-date').value = '2024-02-14';
            document.getElementById('edit-end-date').value = '2024-02-14';
            document.getElementById('edit-voucher-discount').value = '10';
            document.getElementById('edit-voucher-price').value = '143';
        });
    });

    document.getElementById('close-edit-voucher-modal-btn').addEventListener('click', () => {
        document.getElementById('edit-voucher-modal').classList.add('hidden');
    });

    document.getElementById('save-edit-voucher-btn').addEventListener('click', () => {
        alert('Voucher updated successfully!');
        document.getElementById('edit-voucher-modal').classList.add('hidden');
    });

    document.getElementById('delete-voucher-btn').addEventListener('click', () => {
        const confirmation = confirm('Are you sure you want to delete this voucher?');
        if (confirmation) {
            alert('Voucher deleted successfully!');
            document.getElementById('edit-voucher-modal').classList.add('hidden');
        }
    });
     
</script>