<x-layout class="bg-blue-100 text-blue-900">
    <div class="container mx-auto py-8 px-4
    border rounded-lg w-[40%] bg-slate-50">
        <h1 class="text-2xl font-bold mb-4">Vehicle Details</h1>
        <div class="space-y-4 ">
            <div class="details flex">
                <label for="vehicle_id" class="mr-2 font-semibold">Vehicle ID:</label>
                <p>{{ $vehicle->vehicle_id }}</p>
            </div>
            <div class="details flex">
                <label for="type" class="mr-2 font-semibold">Type:</label>
                <p>{{ $vehicle->type }}</p>
            </div>
            <div class="details flex">
                <label for="capacity" class="mr-2 font-semibold">Capacity:</label>
                <p>{{ $vehicle->capacity }}</p>
            </div>
            <div class="details flex">
                <label for="status" class="mr-2 font-semibold">Status:</label>
                <p>{{ $vehicle->status }}</p>
            </div>
            <div class="details flex">
                <label for="currentLocation" class="mr-2 font-semibold">Current Location:</label>
                <p>{{ $vehicle->currentLocation }}</p>
            </div>
            <div class="details flex ">
                <label for="driver_id" class="mr-2 font-semibold">Driver ID:</label>
                <p>{{ $vehicle->driver_id }}</p>
            </div>
            <div class="btns">
                <a href="{{ route('admin.vehicles.edit', $vehicle->vehicle_id) }}"
                    class="button bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">Edit</a>
                <form action="{{ route('admin.vehicles.destroy', $vehicle->vehicle_id) }}" method="POST"
                    class="inline ">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="button bg-red-600 text-white px-4 py-2 rounded-md hover:bg-red-700"
                        onclick="return confirm('Are you sure you want to delete this vehicle?')">Delete</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>
