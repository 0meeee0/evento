<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <!-- {{ __("You're logged in!") }} -->

                    <h3 class="mt-4">Users List</h3>
                    <div class="overflow-x-auto">
                        <table class="table-auto w-full mt-2">
                            <thead>
                                <tr>
                                    <th class="px-4 py-2">Name</th>
                                    <th class="px-4 py-2">Email</th>
                                    <th class="px-4 py-2">Role</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="border px-4 py-2">test</td>
                                    <td class="border px-4 py-2">test@test.test</td>
                                    <td class="border px-4 py-2">Admin</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <h3 class="mt-4">Categories Section</h3>
                    <div class="overflow-x-auto">
                        <table class="table-auto w-full mt-2">
                            <thead>
                                <tr>
                                    <th class="px-4 py-2">Category</th>
                                    <th class="px-4 py-2">Modify</th>
                                    <th class="px-4 py-2">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="border px-4 py-2">Music</td>
                                    <td class="border px-4 py-2">
                                        <a href="#" class="bg-blue-500 hover:bg-blue-700 text-black font-bold py-2 px-4 rounded">
                                            Modify
                                        </a>
                                    </td>
                                    <td class="border px-4 py-2">
                                        <a href="#" class="bg-blue-500 hover:bg-blue-700 text-black font-bold py-2 px-4 rounded">
                                            Delete
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="mt-4">
                        <a href="#" class="bg-blue-500 hover:bg-blue-700 text-black font-bold py-2 px-4 rounded">
                            Add Category
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="mt-4">Awaiting Events List</h3>
                    <div class="overflow-x-auto">
                        <table class="table-auto w-full mt-2">
                            <thead>
                                <tr>
                                    <th class="px-4 py-2">Event Name</th>
                                    <th class="px-4 py-2">Organiser</th>
                                    <th class="px-4 py-2">Option</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="border px-4 py-2">Event 1</td>
                                    <td class="border px-4 py-2">Organiser 1</td>
                                    <td class="border px-4 py-2">
                                        <a href="#" class="bg-blue-500 hover:bg-blue-700 text-black font-bold py-2 px-4 rounded">
                                            Deny
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
</x-app-layout>
