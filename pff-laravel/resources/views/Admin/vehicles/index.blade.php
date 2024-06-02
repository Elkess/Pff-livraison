<x-layout class="bg-blue-100 text-blue-900">
    <div class="container mx-auto py-8 px-4">
        <h1 class="text-2xl font-bold mb-4">Vehicle List</h1>
        <a href="{{ route('admin.vehicles.create') }}"
            class="button bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">Create New Vehicle</a>
        <table class="w-full mt-8">
            <thead>
                <tr class="bg-blue-200">
                    <th class="px-4 py-2">Vehicle ID</th>
                    <th class="px-4 py-2">Type</th>
                    <th class="px-4 py-2">Capacity</th>
                    <th class="px-4 py-2">Status</th>
                    <th class="px-4 py-2">Current Location</th>
                    <th class="px-4 py-2">Driver ID</th>
                    <th class="px-4 py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($vehicles as $vehicle)
                    <tr>
                        <td class="border px-4 py-2">{{ $vehicle->vehicle_id }}</td>
                        <td class="border px-4 py-2">{{ $vehicle->type }}</td>
                        <td class="border px-4 py-2">{{ $vehicle->capacity }}</td>
                        <td class="border px-4 py-2">{{ $vehicle->status }}</td>
                        <td class="border px-4 py-2">{{ $vehicle->currentlocation }}</td>
                        <td class="border px-4 py-2">{{ $vehicle->driver_id }}</td>
                        <td class="border px-4 py-2">
                            <a href="{{ route('admin.vehicles.show', $vehicle->vehicle_id) }}"
                                class="btn-view bg-blue-500 text-white px-2 py-1 rounded-md">View</a>
                            <a href="{{ route('admin.vehicles.edit', $vehicle->vehicle_id) }}"
                                class="btn-edit bg-green-500 text-white px-2 py-1 rounded-md">Edit</a>
                            @if ($vehiclesNotInDelivery->contains('vehicle_id', $vehicle->vehicle_id))
                                <form action="{{ route('admin.vehicles.destroy', $vehicle->vehicle_id) }}"
                                    method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="btn-delete bg-red-500 text-white px-2 py-1 rounded-md"
                                        onclick="return confirm('Are you sure you want to delete this vehicle?')">Delete</button>
                                </form>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>
