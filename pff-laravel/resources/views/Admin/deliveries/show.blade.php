<x-layout>
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-6">Delivery Details</h1>
        <div class="bg-white rounded-lg shadow-lg">
            <div class="p-6">
                <h5 class="text-xl font-bold mb-4">ID: {{ $delivery->delivery_id }}</h5>
                <p class="mb-2"><strong>Pick-Up Location:</strong> {{ $delivery->pickuplocation }}</p>
                <p class="mb-2"><strong>Pick-Up Time:</strong> {{ $delivery->pickuptime }}</p>
                <p class="mb-2"><strong>Drop-Off Location:</strong> {{ $delivery->dropofflocation }}</p>
                <p class="mb-2"><strong>Drop-Off Time:</strong> {{ $delivery->dropofftime }}</p>
                <p class="mb-2"><strong>Status:</strong> {{ $delivery->status }}</p>
                <p class="mb-2"><strong>Client:</strong> {{ $delivery->client_id ? $delivery->client->Lastname : 'N/A' }}</p>
                <p class="mb-2"><strong>Driver:</strong> {{ $delivery->driver_id ? $delivery->driver->Lastname : 'N/A' }}</p><p class="mb-2"><strong>Vehicle:</strong> {{ $delivery->vehicle_id ? $delivery->vehicle->type : 'N/A' }}</p>
                <a href="{{ route('admin.deliveries.edit', $delivery->delivery_id) }}" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded mr-2">Edit</a>
                <form action="{{ route('admin.deliveries.destroy', $delivery->delivery_id) }}" method="POST" class="inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded" onclick="return confirm('Are you sure you want to delete this delivery?')">Delete</button>
                    <a href="{{ route('admin.deliveries.index') }}"
                class=" hover:bg-slate-300 bg-blue-200 text-black py-2 font-semibold px-2 rounded "> Go back</a>
                </form>
            </div>
        </div>
    </div>
</x-layout>
