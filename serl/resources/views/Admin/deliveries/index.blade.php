<x-layout>
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-6">Deliveries</h1>
        
        <table class="table-auto w-full">
            <thead>
                <tr class="bg-gray-200">
                    <th class="px-4 py-2">ID</th>
                    <th class="px-4 py-2">Pick-Up Location</th>
                    <th class="px-4 py-2">Pick-Up Time</th>
                    <th class="px-4 py-2">Drop-Off Location</th>
                    <th class="px-4 py-2">Drop-Off Time</th>
                    <th class="px-4 py-2">Status</th>
                    <th class="px-4 py-2">Client</th>
                    <th class="px-4 py-2">Driver</th>
                    <th class="px-4 py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($deliveries as $delivery)
                <tr>
                    <td class="border px-4 py-2">{{ $delivery->delivery_id }}</td>
                    <td class="border px-4 py-2">{{ $delivery->pickUpLocation }}</td>
                    <td class="border px-4 py-2">{{ $delivery->pickUpTime }}</td>
                    <td class="border px-4 py-2">{{ $delivery->dropOffLocation }}</td>
                    <td class="border px-4 py-2">{{ $delivery->dropOffTime }}</td>
                    <td class="border px-4 py-2">{{ $delivery->status }}</td>
                    <td class="border px-4 py-2">{{ $delivery->client_id ? $delivery->Client->name : 'N/A' }}</td>
                    <td class="border px-4 py-2">{{ $delivery->driver_id ? $delivery->Driver->name : 'N/A' }}</td>
                    <td class="border px-4 py-2">
                        <a href="{{ route('admin.deliveries.show', $delivery->delivery_id) }}" class="btn bg-blue-500 hover:bg-blue-600 text-white font-bold py-1 px-2 rounded">View</a>
                        <a href="{{ route('admin.deliveries.edit', $delivery->delivery_id) }}" class="btn bg-green-500 hover:bg-green-600 text-white font-bold py-1 px-2 rounded">Edit</a>
                        <form action="{{ route('admin.deliveries.destroy', $delivery->delivery_id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn bg-red-500 hover:bg-red-600 text-white font-bold py-1 px-2 rounded" onclick="return confirm('Are you sure you want to delete this delivery?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>
