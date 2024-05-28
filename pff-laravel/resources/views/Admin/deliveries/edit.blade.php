<x-layout>
    <div class="container mx-auto px-4 py-8 bg-gray-100 rounded-lg shadow-lg">
        <h1 class="text-3xl font-bold text-center mb-6 text-blue-600">Edit Delivery</h1>
        <form method="POST" action="{{ route('admin.deliveries.update', $delivery->delivery_id) }}" class=" space-y-4">
            @csrf
            @method('PUT')
            <div class="flex flex-col">
                <label for="pickuplocation" class="text-lg text-gray-800 font-bold">Pick-Up Location:</label>
                <input type="text" id="pickuplocation" name="pickuplocation" value="{{ $delivery->pickuplocation }}"
                    class="p-2" required>
            </div>
            <div class="flex flex-col">
                <label for="pickuptime" class="text-lg text-gray-800 font-bold">Pick-Up Time:</label>
                <input type="datetime-local" id="pickuptime" name="pickuptime"
                    value="{{ date('Y-m-d\TH:i', strtotime($delivery->pickuptime)) }}" class="p-2" required>
            </div>
            <div class="flex flex-col">
                <label for="dropofflocation" class="text-lg text-gray-800 font-bold">Drop-Off Location:</label>
                <input type="text" id="dropofflocation" name="dropofflocation"
                    value="{{ $delivery->dropofflocation }}" class="p-2" required>
            </div>
            <div class="flex flex-col">
                <label for="dropofftime" class="text-lg text-gray-800 font-bold">Drop-Off Time:</label>
                <input type="datetime-local" id="dropofftime" name="dropofftime"
                    value="{{ date('Y-m-d\TH:i', strtotime($delivery->dropofftime)) }}" class="p-2" required>
            </div>
            <div class="flex flex-col">
                <label for="status" class="text-lg text-gray-800 font-bold">Status:</label>
                <select name="status" id="status" class="p-2" required>
                    <option value="Pending" {{ $delivery->status == 'Pending' ? 'selected' : '' }}>Pending</option>
                    <option value="In Transit" {{ $delivery->status == 'In Transit' ? 'selected' : '' }}>In Transit
                    </option>
                    <option value="Delivered" {{ $delivery->status == 'Delivered' ? 'selected' : '' }}>Delivered
                    </option>
                    <option value="Out for Delivery" {{ $delivery->status == 'Out for Delivery' ? 'selected' : '' }}>Out
                        for Delivery
                    </option>
                    <option value="Attempted Delivery"
                        {{ $delivery->status == 'Attempted Delivery' ? 'selected' : '' }}>Attempted Delivery
                    </option>
                    <option value="Returned to Sender"
                        {{ $delivery->status == 'Returned to Sender' ? 'selected' : '' }}>Returned to Sender
                    </option>
                    <option value="Delayed" {{ $delivery->status == 'Delayed' ? 'selected' : '' }}>Delayed
                    </option>
                    <option value="On Hold" {{ $delivery->status == 'On Hold' ? 'selected' : '' }}>On Hold
                    </option>
                    <option value="Canceled" {{ $delivery->status == 'Canceled' ? 'selected' : '' }}>Canceled
                    </option>
                </select>
            </div>
            <div class="flex flex-col">
                <label for="client_id" class="text-lg text-gray-800 font-bold">Client:</label>
                <select name="client_id" id="client_id" class="p-2">
                    <option value="">Select Client</option>
                    @foreach ($clients as $client)
                        <option
                            value="{{ $client->id }}"{{ $client->user_id == $delivery->client_id ? 'selected' : '' }}>
                            {{ $client->Lastname }}</option>
                    @endforeach
                </select>
            </div>
            <div class="flex flex-col">
                <label for="driver_id" class="text-lg text-gray-800 font-bold">Driver:</label>
                <select name="driver_id" id="driver_id" class="p-2">
                    <option value="">Select Driver</option>
                    @foreach ($drivers as $driver)
                        <option value="{{ old('Lastname',$driver->Lastname) }}"
                            {{ $driver->user_id == $delivery->driver_id ? 'selected' : '' }}>
                            {{ $driver->Lastname }}</option>

                        
                    @endforeach
                </select>
            </div>
            <button type="submit"
                class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">Update</button>
        </form>
    </div>
</x-layout>
