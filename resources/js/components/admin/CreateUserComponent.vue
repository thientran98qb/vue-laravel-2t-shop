<template>
    <div class="w-full">
        <form class="bg-white px-8 pt-8 pb-8">
            <div class="mb-4">
                <label class="block text-sm text-gray-700 font-bold mb-2" for="">Fullname</label>
                <input type="text" v-model="fullName" placeholder="Fullname" class="shadow appearance-none w-full border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-4">
                <label class="block text-sm text-gray-700 font-bold mb-2" for="">Email</label>
                <input type="email" v-model="email" placeholder="Enter email" class="shadow appearance-none w-full border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-4">
                <label class="block text-sm text-gray-700 font-bold mb-2" for="">Password</label>
                <input type="password" v-model="password" placeholder="Enter Password" class="shadow appearance-none w-full border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-4">
                <label class="block text-sm text-gray-700 font-bold mb-2" for="">Avatar</label>
                <input type="file" class="shadow appearance-none w-full border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-4">
                <label class="block text-sm text-gray-700 font-bold mb-2" for="">Phone number</label>
                <input type="text" v-model="phone" placeholder="Enter phone number" class="shadow appearance-none w-full border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <button class="flex items-center justify-between w-full px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                Add user
            </button>
        </form>
    </div>
</template>

<script>
export default {
    name: "CreateUserComponent",
    data() {
        return {
            fullName: "",
            email: "",
            password: "",
            phone: "",
            image: "",

        }
    },
    methods: {
        submitForm() {

        }
    }
}
</script>

<style>

</style>
