<x-layout class="bg-blue-100 text-blue-900">
    <div class="container mx-auto py-8 px-4">
        <h1 class="text-2xl font-bold mb-4">Edit Vehicle</h1>
        <form method="POST" action="{{ route('admin.vehicles.update', $vehicle->vehicle_id) }}" class="space-y-4">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="type" class="text-blue-700">Type:</label>
                <input type="text" id="type" name="type" value="{{ $vehicle->type }}"
                    class="border border-blue-500 rounded-md px-3 py-2 w-full">
                @error('type')
                    <div class="error-message text-red-500">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="capacity" class="text-blue-700">Capacity:</label>
                <input type="text" id="capacity" name="capacity" value="{{ $vehicle->capacity }}"
                    class="border border-blue-500 rounded-md px-3 py-2 w-full">
                @error('capacity')
                    <div class="error-message text-red-500">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="status" class="text-blue-700">Status:</label>
                <select name="status" id="status"
                    class="border border-blue-500 rounded-md px-3 py-2 w-full">
                    <option value="in transit"
                        {{ $vehicle->status == 'in transit' ? 'selected' : '' }}>In Transit
                    </option>
                    <option value="available"
                        {{ $vehicle->status == 'available' ? 'selected' : '' }}>Available</option>
                    <option value="not working"
                        {{ $vehicle->status == 'not working' ? 'selected' : '' }}>Not Working
                    </option>
                    <option value="in maintenance"
                        {{ $vehicle->status == 'in maintenance' ? 'selected' : '' }}>In Maintenance</option>
                </select>
                @error('status')
                    <div class="error-message text-red-500">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="currentLocation" class="text-blue-700">Current Location:</label>
                <input type="text" id="currentLocation" name="currentLocation"
                    value="{{ $vehicle->currentLocation }}"
                    class="border border-blue-500 rounded-md px-3 py-2 w-full">
                @error('currentLocation')
                    <div class="error-message text-red-500">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="driver_id" class="text-blue-700">Driver ID:</label>
                <input type="text" id="driver_id" name="driver_id" value="{{ $vehicle->driver_id }}"
                    class="border border-blue-500 rounded-md px-3 py-2 w-full">
                @error('driver_id')
                    <div class="error-message text-red-500">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit"
                class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 focus:outline-none focus:bg-blue-700">
                Update Vehicle
            </button>
        </form>
    </div>
</x-layout>
