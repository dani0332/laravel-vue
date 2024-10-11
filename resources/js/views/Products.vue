<template>
    <div class="p-6">
        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
           @click="openModal()">Add Product</a>
        <table class="min-w-full bg-white border border-gray-200 rounded-lg shadow-sm">
            <thead class="bg-gray-200">
            <tr>
                <th class="px-4 py-2 text-left">ID</th>
                <th class="px-4 py-2 text-left">Name</th>
                <th class="px-4 py-2 text-left">Actions</th>
            </tr>
            </thead>
            <tbody>
            <tr
                v-for="item in paginatedItems"
                :key="item.id"
                class="border-t border-gray-200 hover:bg-gray-100"
            >
                <td class="px-4 py-2">{{ item.id }}</td>
                <td class="px-4 py-2">{{ item.name }}</td>
                <td class="px-4 py-2">
<!--                    <button-->
<!--                       -->
<!--                        class="text-blue-500 hover:text-blue-700"-->
<!--                    >-->
<!--                        Options-->
<!--                    </button>-->


                    <button :id="`dropdownDefaultButton_${item.id}`" :data-dropdown-toggle="`dropdown_${item.id}`" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">Dropdown button <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                    </svg>
                    </button>

                    <!-- Dropdown menu -->
                    <div :id="`dropdown_${item.id}`" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" :aria-labelledby="`dropdownDefaultButton_${item.id}`">
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                                @click="openModal(item)">Edit</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                            </li>
                        </ul>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>






        <!-- Pagination Controls -->
        <div class="flex justify-between items-center mt-4">
            <button @click="prevPage" class="px-4 py-2 bg-gray-300 rounded-md">Previous</button>
            <span>Page {{ currentPage }} of {{ totalPages }}</span>
            <button @click="nextPage" class="px-4 py-2 bg-gray-300 rounded-md">Next</button>
        </div>

        <!-- Add/Edit Modal -->
        <div v-if="showModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50">
            <div class="bg-white p-6 rounded-md shadow-lg">
                <h2 class="text-lg mb-4">{{ editMode ? 'Edit Item' : 'Add Item' }}</h2>
                <form @submit.prevent="saveItem">
                    <input
                        v-model="formData.name"
                        type="text"
                        placeholder="Name"
                        class="w-full p-2 border rounded-md mb-4"
                    />
                    <div class="flex justify-end">
                        <button type="button" @click="closeModal" class="px-4 py-2 mr-2 bg-gray-300 rounded-md">Cancel</button>
                        <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md">
                            {{ editMode ? 'Update' : 'Add' }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script setup>
import { ref, computed } from 'vue';
import store from "../store/index.js";
import { Dropdown, Modal } from 'flowbite'; // Import only what you need

const items = ref([
    { id: 1, name: 'Item 1' },
    { id: 2, name: 'Item 2' },
    { id: 3, name: 'Item 3' },
    // More items...
]);

const perPage = 5;
const currentPage = ref(1);
const showModal = ref(false);
const editMode = ref(false);
const formData = ref({ id: null, name: '' });

store.commit('setPageTitle',"Products");

const totalPages = computed(() => Math.ceil(items.value.length / perPage));
const paginatedItems = computed(() => {
    const start = (currentPage.value - 1) * perPage;
    return items.value.slice(start, start + perPage);
});

const prevPage = () => {
    if (currentPage.value > 1) currentPage.value--;
};

const nextPage = () => {
    if (currentPage.value < totalPages.value) currentPage.value++;
};

const showContextMenu = (id) => {
    // Show context menu for the given ID (you can expand this logic)
    console.log(`Context menu for item ${id}`);
    openModal(id);
};

const openModal = (item = null) => {
    editMode.value = !!item;
    formData.value = item ? { ...item } : { id: null, name: '' };
    showModal.value = true;
};

const closeModal = () => {
    showModal.value = false;
};

const saveItem = () => {

    store.dispatch('saveProduct',formData.value)

    console.log("formData.value",formData.value);
    if (editMode.value) {
        // Update item logic
        const index = items.value.findIndex(i => i.id === formData.value.id);
        if (index !== -1) items.value[index].name = formData.value.name;
    } else {
        // Add new item logic
        const newId = items.value.length + 1;
        items.value.push({ id: newId, name: formData.value.name });
    }
    closeModal();
};
</script>

