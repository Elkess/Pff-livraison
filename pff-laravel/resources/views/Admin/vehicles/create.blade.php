<x-layout>
    <div class="bg-white p-8 ">
        <h1 class="text-3xl font-bold text-black mb-6">Create Vehicle</h1>
        <form method="POST" action="{{ route('admin.vehicles.store') }}" class="space-y-4">
            @csrf

            <div>
                <label for="type" class="block text-sm font-medium text-black">Type:</label>
                <input type="text" id="type" name="type" required class="mt-1 block w-full px-3 py-2 border border-blue-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                @error('type')
                    <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <label for="capacity" class="block text-sm font-medium text-black">Capacity:</label>
                <input type="text" id="capacity" name="capacity" required class="mt-1 block w-full px-3 py-2 border border-blue-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                @error('capacity')
                    <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <label for="status" class="block text-sm font-medium text-black">Status:</label>
                <select name="status" id="status" required class="mt-1 block w-full px-3 py-2 border border-blue-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                    <option value="in transit">In Transit</option>
                    <option value="available">Available</option>
                    <option value="not working">Not Working</option>
                    <option value="in maintenance">In Maintenance</option>
                </select>
                @error('status')
                    <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <label for="currentlocation" class="block text-sm font-medium text-black">Current Location:</label>
                <input type="text" id="currentlocation" name="currentlocation" required class="mt-1 block w-full px-3 py-2 border border-blue-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                @error('currentlocation')
                    <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <label for="driver_id" class="block text-sm font-medium text-black">Driver ID:</label>
                <input type="text" id="driver_id" name="driver_id" required class="mt-1 block w-full px-3 py-2 border border-blue-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                @error('driver_id')
                    <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="px-4 py-2 bg-blue-500 text-white font-bold rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-300">Create</button>
            <a href="{{ route('admin.vehicles.index') }}"
                class=" hover:bg-slate-300 bg-blue-200 text-black py-2 font-semibold px-2 rounded "> Go back</a>
        </form>
    </div>
</x-layout>
