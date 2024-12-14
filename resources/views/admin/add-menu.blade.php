<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://cdn.tailwindcss.com"></script>
<x-app-layout>
    <div class="mt-16">
       <!-- Sidebar -->
<div class="sm:flex sm:flex-col bg-gradient-to-b from-black to-gray-800 text-white sm:w-full sm:mt-4">
    <div class="p-6 border-b border-gray-700 flex items-center justify-between">
        <h2 class="text-xl font-bold">Categories</h2>
        <button id="add-category-btn" class="flex items-center justify-center w-8 h-8 rounded hover:bg-gray-700">
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#5f6368">
                <path d="M0 0h24v24H0V0z" fill="none"/>
                <path d="M18 13h-5v5c0 .55-.45 1-1 1s-1-.45-1-1v-5H6c-.55 0-1-.45-1-1s.45-1 1-1h5V6c0-.55.45-1 1-1s1 .45 1 1v5h5c.55 0 1 .45 1 1s-.45 1-1 1z"/>
            </svg>
        </button>
    </div>
    <nav class="flex-1 p-4 overflow-hidden scrollbar-hide relative">
    <!-- Navigation Buttons -->
    <button id="scroll-left" class="absolute left-0 top-1/2 transform -translate-y-1/2 px-3 py-2 bg-gray-700 text-white rounded-full hidden">
        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="currentColor">
            <path d="M14 7l-5 5 5 5V7z"/>
        </svg>
    </button>
    <button id="scroll-right" class="absolute right-0 top-1/2 transform -translate-y-1/2 px-3 py-2 bg-gray-700 text-white rounded-full hidden">
        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="currentColor">
            <path d="M10 17l5-5-5-5v10z"/>
        </svg>
    </button>

    <!-- Categories List -->
    <ul id="category-list" class="flex sm:flex-row sm:space-x-4 sm:overflow-x-auto overflow-hidden pl-4 pr-4 scrollbar-hide">
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
        <!-- <li>
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
        </li> -->
    </ul>
</nav>

</div>



     

        <!-- Main Content -->
        <div class="flex flex-col sm:ml-0 p-8 bg-gray-100">
        <div class="flex flex-col sm:flex-row justify-between items-center mb-6">
    <h1 class="text-2xl font-bold">Category A</h1>
    <div class="flex sm:space-x-2 space-x-1">
        <button id="add-menu-btn" class="px-4 py-2 bg-amber-400 text-black hover:bg-amber-500 rounded">Add Menu</button>
        <button id="edit-category-btn" class="px-4 py-2 bg-blue-600 text-white hover:bg-blue-700 rounded">Edit Category</button>
        <button id="delete-category-btn" class="px-4 py-2 bg-red-600 text-white hover:bg-red-700 rounded">Delete Category</button>
    </div>
</div>

            <!-- Cards -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Card 1 -->
                <div class="bg-white shadow rounded-lg overflow-hidden relative">
                    <button class="absolute top-2 right-2 w-10 h-10 bg-gray-200 hover:bg-gray-300 rounded-full flex items-center justify-center edit-card-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#000000">
                            <path d="M200-200h57l391-391-57-57-391 391v57Zm-80 80v-170l528-527q12-11 26.5-17t30.5-6q16 0 31 6t26 18l55 56q12 11 17.5 26t5.5 30q0 16-5.5 30.5T817-647L290-120H120Zm640-584-56-56 56 56Zm-141 85-28-29 57 57-29-28Z"/>
                        </svg>
                    </button>
                    <img src="https://via.placeholder.com/300x200" alt="Menu Image" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="font-bold text-lg">Menu 1</h3>
                        <p class="text-gray-600 text-sm">Delicious description here.</p>
                        <p class="text-gray-800 font-bold mt-2">Rp 10</p>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="bg-white shadow rounded-lg overflow-hidden relative">
                    <button class="absolute top-2 right-2 w-10 h-10 bg-gray-200 hover:bg-gray-300 rounded-full flex items-center justify-center edit-card-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#000000">
                            <path d="M200-200h57l391-391-57-57-391 391v57Zm-80 80v-170l528-527q12-11 26.5-17t30.5-6q16 0 31 6t26 18l55 56q12 11 17.5 26t5.5 30q0 16-5.5 30.5T817-647L290-120H120Zm640-584-56-56 56 56Zm-141 85-28-29 57 57-29-28Z"/>
                        </svg>
                    </button>
                    <img src="https://via.placeholder.com/300x200" alt="Menu Image" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="font-bold text-lg">Menu 2</h3>
                        <p class="text-gray-600 text-sm">Delicious description here.</p>
                        <p class="text-gray-800 font-bold mt-2">Rp 10</p>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="bg-white shadow rounded-lg overflow-hidden relative">
                    <button class="absolute top-2 right-2 w-10 h-10 bg-gray-200 hover:bg-gray-300 rounded-full flex items-center justify-center edit-card-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#000000">
                            <path d="M200-200h57l391-391-57-57-391 391v57Zm-80 80v-170l528-527q12-11 26.5-17t30.5-6q16 0 31 6t26 18l55 56q12 11 17.5 26t5.5 30q0 16-5.5 30.5T817-647L290-120H120Zm640-584-56-56 56 56Zm-141 85-28-29 57 57-29-28Z"/>
                        </svg>
                    </button>
                    <img src="https://via.placeholder.com/300x200" alt="Menu Image" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="font-bold text-lg">Menu 3</h3>
                        <p class="text-gray-600 text-sm">Delicious description here.</p>
                        <p class="text-gray-800 font-bold mt-2">Rp 10</p>
                    </div>
                </div>
            </div>

            <!-- Add Category Modal -->
<div id="add-category-modal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
    <div class="bg-white rounded-lg shadow-lg w-full max-w-sm p-6 mx-4">
        <button id="close-modal-btn" class="absolute top-2 right-2 w-8 h-8 bg-gray-200 hover:bg-gray-300 rounded-full flex items-center justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#000000">
                <path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z" />
            </svg>
        </button>
        <h2 class="text-xl font-bold mb-4 text-center">Add New Category</h2>
        <input id="category-name" type="text" placeholder="Category Name" class="w-full border border-gray-300 rounded px-3 py-2 mb-4">
        <div class="flex flex-col sm:flex-row justify-end space-y-2 sm:space-y-0 sm:space-x-2">
            <button id="save-category-btn" class="px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600 w-full sm:w-auto">Save</button>
            <button id="cancel-category-btn" class="px-4 py-2 bg-gray-300 text-black rounded hover:bg-gray-400 w-full sm:w-auto">Cancel</button>
        </div>
    </div>
</div>


<!-- Add Menu Modal -->
<div id="add-menu-modal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
    <div class="bg-white rounded-lg shadow-lg w-full max-w-sm p-6 mx-4">
        <button id="close-menu-modal-btn" class="absolute top-2 right-2 w-8 h-8 bg-gray-200 hover:bg-gray-300 rounded-full flex items-center justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#000000">
                <path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z" />
            </svg>
        </button>
        <h2 class="text-xl font-bold mb-4 text-center">Add New Menu</h2>
        <input type="file" id="menu-image" class="w-full border border-gray-300 rounded px-3 py-2 mb-4" placeholder="Menu Image">
        <input type="text" id="menu-name" class="w-full border border-gray-300 rounded px-3 py-2 mb-4" placeholder="Menu Name">
        <textarea id="menu-description" class="w-full border border-gray-300 rounded px-3 py-2 mb-4" placeholder="Description"></textarea>
        <div class="flex items-center mb-4">
            <span class="text-gray-500 mr-2">Rp</span>
            <input type="number" id="menu-price" class="w-full border border-gray-300 rounded px-3 py-2" placeholder="Price">
        </div>
        <select id="menu-category" class="w-full border border-gray-300 rounded px-3 py-2 mb-4">
            <option value="">Select Category</option>
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
            <option value="D">D</option>
        </select>
        <div class="flex flex-col sm:flex-row justify-end space-y-2 sm:space-y-0 sm:space-x-2">
            <button id="save-menu-btn" class="px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600 w-full sm:w-auto">Save</button>
            <button id="cancel-menu-btn" class="px-4 py-2 bg-gray-300 text-black rounded hover:bg-gray-400 w-full sm:w-auto">Cancel</button>
        </div>
    </div>
</div>

<!-- Edit Menu Modal -->
<div id="edit-menu-modal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
    <div class="bg-white rounded-lg shadow-lg w-full max-w-sm p-6 mx-4">
        <button id="close-edit-menu-modal-btn" class="absolute top-2 right-2 w-8 h-8 bg-gray-200 hover:bg-gray-300 rounded-full flex items-center justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#000000">
                <path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z" />
            </svg>
        </button>
        <h2 class="text-xl font-bold mb-4 text-center">Edit Menu</h2>
        <input type="file" id="edit-menu-image" class="w-full border border-gray-300 rounded px-3 py-2 mb-4">
        <input type="text" id="edit-menu-name" class="w-full border border-gray-300 rounded px-3 py-2 mb-4" placeholder="Menu Name">
        <textarea id="edit-menu-description" class="w-full border border-gray-300 rounded px-3 py-2 mb-4" placeholder="Description"></textarea>
        <div class="flex items-center mb-4">
            <span class="text-gray-500 mr-2">Rp</span>
            <input type="number" id="edit-menu-price" class="w-full border border-gray-300 rounded px-3 py-2" placeholder="Price">
        </div>
        <select id="edit-menu-category" class="w-full border border-gray-300 rounded px-3 py-2 mb-4">
            <option value="">Select Category</option>
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
            <option value="D">D</option>
        </select>
        <div class="flex flex-col sm:flex-row justify-end space-y-2 sm:space-y-0 sm:space-x-2">
            <button id="save-edit-menu-btn" class="px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600 w-full sm:w-auto">Save</button>
            <button id="delete-menu-btn" class="px-4 py-2 bg-red-500 text-white rounded hover:bg-red-600 w-full sm:w-auto">Delete</button>
        </div>
    </div>
</div>

<!-- Edit Category Modal -->
<div id="edit-category-modal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center">
    <div class="bg-white rounded-lg p-6 shadow-lg w-full max-w-sm mx-4">
        <div class="flex justify-between items-center border-b pb-3 mb-4">
            <h3 class="text-xl font-bold">Edit Category</h3>
            <button id="close-edit-modal-btn" class="text-gray-600 hover:text-gray-900">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#000000">
                    <path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/>
                </svg>
            </button>
        </div>
        <div class="mb-4">
            <label for="edit-category-name" class="block text-sm font-medium text-gray-700">Category Name</label>
            <input type="text" id="edit-category-name" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
        </div>
        <div class="flex justify-end space-x-4">
            <button id="cancel-edit-btn" class="px-4 py-2 bg-gray-300 text-black rounded hover:bg-gray-400">Cancel</button>
            <button id="save-edit-btn" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Save</button>
        </div>
    </div>
</div>


<!-- Delete Categories Modal -->
<div id="delete-category-modal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
    <div class="bg-white rounded-lg shadow-lg w-full max-w-sm p-6 mx-4">
        <div class="flex justify-between items-center border-b pb-3 mb-4">
            <h3 class="text-xl font-bold text-red-600">Delete Category</h3>
            <button id="close-delete-modal-btn" class="text-gray-600 hover:text-gray-900">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#000000">
                    <path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/>
                </svg>
            </button>
        </div>
        <p class="mb-4 text-gray-700">To delete this category, type <span class="font-bold">CONFIRM</span> in the field below.</p>
        <input type="text" id="delete-confirmation" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-red-500 focus:border-red-500" placeholder="Type CONFIRM here">
        <div class="flex justify-end space-x-4 mt-4">
            <button id="cancel-delete-btn" class="px-4 py-2 bg-gray-300 text-black rounded hover:bg-gray-400">Cancel</button>
            <button id="confirm-delete-btn" class="px-4 py-2 bg-red-600 text-white rounded hover:bg-red-700" disabled>Delete</button>
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
    
    // Add Category Modal
    document.getElementById('add-category-btn').addEventListener('click', () => {
        document.getElementById('add-category-modal').classList.remove('hidden');
    });

    document.getElementById('close-modal-btn').addEventListener('click', () => {
        document.getElementById('add-category-modal').classList.add('hidden');
    });

    document.getElementById('cancel-category-btn').addEventListener('click', () => {
        document.getElementById('add-category-modal').classList.add('hidden');
    });

    document.getElementById('save-category-btn').addEventListener('click', () => {
        const categoryName = document.getElementById('category-name').value;
        if (categoryName.trim()) {
            alert(`Category "${categoryName}" added successfully!`);
            document.getElementById('add-category-modal').classList.add('hidden');
        } else {
            alert('Please enter a category name.');
        }
    });

    // Add Menu Modal
    document.getElementById('add-menu-btn').addEventListener('click', () => {
        document.getElementById('add-menu-modal').classList.remove('hidden');
    });

    document.getElementById('close-menu-modal-btn').addEventListener('click', () => {
        document.getElementById('add-menu-modal').classList.add('hidden');
    });

    document.getElementById('cancel-menu-btn').addEventListener('click', () => {
        document.getElementById('add-menu-modal').classList.add('hidden');
    });

    document.getElementById('save-menu-btn').addEventListener('click', () => {
        const menuImage = document.getElementById('menu-image').value;
        const menuName = document.getElementById('menu-name').value;
        const menuDescription = document.getElementById('menu-description').value;
        const menuPrice = document.getElementById('menu-price').value;
        const menuCategory = document.getElementById('menu-category').value;

        if (menuImage && menuName.trim() && menuDescription.trim() && menuPrice && menuCategory) {
            alert(`Menu "${menuName}" added successfully!`);
            document.getElementById('add-menu-modal').classList.add('hidden');
        } else {
            alert('Please fill in all fields.');
        }
    });

    // Edit Menu Modal
    document.querySelectorAll('.edit-card-btn').forEach(button => {
        button.addEventListener('click', () => {
            document.getElementById('edit-menu-modal').classList.remove('hidden');
            document.getElementById('edit-menu-name').value = 'Menu 1';
            document.getElementById('edit-menu-description').value = 'Delicious description here.';
            document.getElementById('edit-menu-price').value = '10';
            document.getElementById('edit-menu-category').value = 'A';
        });
    });

    document.getElementById('close-edit-menu-modal-btn').addEventListener('click', () => {
        document.getElementById('edit-menu-modal').classList.add('hidden');
    });

    document.getElementById('save-edit-menu-btn').addEventListener('click', () => {
        alert('Menu updated successfully!');
        document.getElementById('edit-menu-modal').classList.add('hidden');
    });

    document.getElementById('delete-menu-btn').addEventListener('click', () => {
        const confirmation = confirm('Are you sure you want to delete this menu?');
        if (confirmation) {
            alert('Menu deleted successfully!');
            document.getElementById('edit-menu-modal').classList.add('hidden');
        }
    });

    
        // Edit Category Modal
    const editCategoryBtn = document.getElementById('edit-category-btn');
    editCategoryBtn.addEventListener('click', () => {
        const editCategoryModal = document.getElementById('edit-category-modal');
        editCategoryModal.classList.remove('hidden');
    });

    document.getElementById('close-edit-modal-btn').addEventListener('click', () => {
        document.getElementById('edit-category-modal').classList.add('hidden');
    });

    // Delete Category Modal
document.getElementById('delete-category-btn').addEventListener('click', () => {
    const deleteCategoryModal = document.getElementById('delete-category-modal');
    deleteCategoryModal.classList.remove('hidden');
});

document.getElementById('close-delete-modal-btn').addEventListener('click', () => {
    document.getElementById('delete-category-modal').classList.add('hidden');
});

document.getElementById('confirm-delete-btn').addEventListener('click', () => {
    const confirmDeleteInput = document.getElementById('delete-confirmation');
    if (confirmDeleteInput.value === 'CONFIRM') {
        alert('Category deleted successfully');
        document.getElementById('delete-category-modal').classList.add('hidden');
    } else {
        alert('Please type "CONFIRM" to delete the category');
    }
});

// Sidebar
document.addEventListener('DOMContentLoaded', function () {
    const ul = document.getElementById('category-list');
    const scrollLeftBtn = document.getElementById('scroll-left');
    const scrollRightBtn = document.getElementById('scroll-right');

    function hasOverflow(element) {
        return element.scrollWidth > element.clientWidth;
    }

    function updateButtonVisibility() {
        const isOverflowing = hasOverflow(ul);
        const isLargeScreen = window.innerWidth >= 1024; 

        if (isLargeScreen && isOverflowing) {
            scrollLeftBtn.classList.remove('hidden');
            scrollRightBtn.classList.remove('hidden');
            const buttonWidth = scrollLeftBtn.offsetWidth || 48; 
            ul.style.paddingLeft = `${buttonWidth + 16}px`;
            ul.style.paddingRight = `${buttonWidth + 16}px`;
        } else {
            scrollLeftBtn.classList.add('hidden');
            scrollRightBtn.classList.add('hidden');
            ul.style.paddingLeft = '0px';
            ul.style.paddingRight = '0px';
        }

        if (!isLargeScreen) {
            ul.classList.add('overflow-x-auto');
        } else {
            ul.classList.remove('overflow-x-auto');
        }
    }

    scrollLeftBtn.addEventListener('click', function () {
        ul.scrollBy({ left: -150, behavior: 'smooth' });
    });

    scrollRightBtn.addEventListener('click', function () {
        ul.scrollBy({ left: 150, behavior: 'smooth' });
    });

    updateButtonVisibility();

    window.addEventListener('resize', updateButtonVisibility);

    const observer = new ResizeObserver(updateButtonVisibility);
    observer.observe(ul);
});
     
</script>