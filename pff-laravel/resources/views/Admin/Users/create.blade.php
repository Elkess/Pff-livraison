<x-layout class="bg-blue-50">
    <div class="p-8 bg-white rounded-lg shadow-md">
        <h1 class="text-2xl font-bold text-blue-600 mb-4">Create User</h1>

        <form method="POST" action="{{ route('admin.users.store') }}">
            @csrf
            <label for="name" class="block mb-2">Name:</label>
            <input type="text" id="name" name="name" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500 mb-4">
            @error('name')
                <div class="text-red-500">{{ $message }}</div>
            @enderror

            <label for="email" class="block mb-2">Email:</label>
            <input type="email" id="email" name="email" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500 mb-4">
            @error('email')
                <div class="text-red-500">{{ $message }}</div>
            @enderror

            <label for="password" class="block mb-2">Password:</label>
            <input type="password" id="password" name="password" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500 mb-4">
            @error('password')
                <div class="text-red-500">{{ $message }}</div>
            @enderror

            <label for="phoneNumber" class="block mb-2">Phone Number:</label>
            <input type="text" id="phoneNumber" name="phoneNumber" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500 mb-4">
            @error('phoneNumber')
                <div class="text-red-500">{{ $message }}</div>
            @enderror

            <label for="address" class="block mb-2">Address:</label>
            <input type="text" id="address" name="address" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500 mb-4">
            @error('address')
                <div class="text-red-500">{{ $message }}</div>
            @enderror

            <label for="role" class="block mb-2">Role:</label>
            <select name="role" id="role" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500 mb-4">
                <option value="Admin">Admin</option>
                <option value="Driver">Driver</option>
                <option value="Client">Client</option>
            </select>
            @error('role')
                <div class="text-red-500">{{ $message }}</div>
            @enderror

            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">Create User</button>
        </form>
    </div>
</x-layout>
