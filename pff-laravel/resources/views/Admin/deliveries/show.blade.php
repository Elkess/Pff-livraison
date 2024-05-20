<x-layout>
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-6">Delivery Details</h1>
        <div class="bg-white rounded-lg shadow-lg">
            <div class="p-6">
                <h5 class="text-xl font-bold mb-4">ID: {{ $delivery->delivery_id }}</h5>
                <p class="mb-2"><strong>Pick-Up Location:</strong> {{ $delivery->pickUpLocation }}</p>
                <p class="mb-2"><strong>Pick-Up Time:</strong> {{ $delivery->pickUpTime }}</p>
                <p class="mb-2"><strong>Drop-Off Location:</strong> {{ $delivery->dropOffLocation }}</p>
                <p class="mb-2"><strong>Drop-Off Time:</strong> {{ $delivery->dropOffTime }}</p>
                <p class="mb-2"><strong>Status:</strong> {{ $delivery->status }}</p>
                <p class="mb-2"><strong>Client:</strong> {{ $delivery->client_id ? $delivery->client->name : 'N/A' }}</p>
                <p class="mb-2"><strong>Driver:</strong> {{ $delivery->driver_id ? $delivery->driver->name : 'N/A' }}</p>
                <a href="{{ route('admin.deliveries.edit', $delivery->delivery_id) }}" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded mr-2">Edit</a>
                <form action="{{ route('admin.deliveries.destroy', $delivery->delivery_id) }}" method="POST" class="inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded" onclick="return confirm('Are you sure you want to delete this delivery?')">Delete</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>
