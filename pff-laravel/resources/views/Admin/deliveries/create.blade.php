<x-layout>
    <div class="container mx-auto px-4 py-8 bg-white rounded-lg shadow-lg">
        <h1 class="text-3xl font-bold text-center mb-6">Create Delivery</h1>
        <form method="POST" action="{{ route('admin.deliveries.store') }}" class="space-y-4">
            @csrf
            <div class="flex flex-col">
                <label for="pickUpLocation" class="text-lg text-gray-800">Pick-Up Location:</label>
                <input type="text" id="pickUpLocation" name="pickUpLocation" class="input" required>
            </div>
            <div class="flex flex-col">
                <label for="pickUpTime" class="text-lg text-gray-800">Pick-Up Time:</label>
                <input type="datetime-local" id="pickUpTime" name="pickUpTime" class="input" required>
            </div>
            <div class="flex flex-col">
                <label for="dropOffLocation" class="text-lg text-gray-800">Drop-Off Location:</label>
                <input type="text" id="dropOffLocation" name="dropOffLocation" class="input" required>
            </div>
            <div class="flex flex-col">
                <label for="dropOffTime" class="text-lg text-gray-800">Drop-Off Time:</label>
                <input type="datetime-local" id="dropOffTime" name="dropOffTime" class="input" required>
            </div>
            <div class="flex flex-col">
                <label for="status" class="text-lg text-gray-800">Status:</label>
                <select name="status" id="status" class="input" required>
                    <option value="Pending">Pending</option>
                    <option value="In Transit">In Transit</option>
                    <option value="Delivered">Delivered</option>
                    <option value="Out for Delivery">Out for Delivery</option>
                    <option value="Attempted Delivery">Attempted Delivery</option>
                    <option value="Returned to Sender">Returned to Sender</option>
                    <option value="Delayed">Delayed</option>
                    <option value="On Hold">On Hold</option>
                    <option value="Failed">Failed</option>
                    <option value="Canceled">Canceled</option>
                </select>
            </div>
            <div class="flex flex-col">
                <label for="client_id" class="text-lg text-gray-800">Client:</label>
                <select name="client_id" id="client_id" class="input">
                    <option value="">Select Client</option>
                    @foreach ($clients as $client)
                        <option value="{{ $client->id }}">{{ $client->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="flex flex-col">
                <label for="driver_id" class="text-lg text-gray-800">Driver:</label>
                <select name="driver_id" id="driver_id" class="input">
                    <option value="">Select Driver</option>
                    @foreach ($drivers as $driver)
                        <option value="{{ $driver->id }}">{{ $driver->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit"
                class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">Create</button>
                <a href="{{ route('admin.deliveries.index') }}"
                class=" hover:bg-slate-300 bg-blue-200 text-black py-2 font-semibold px-2 rounded "> Go back</a>
        </form>
    </div>
</x-layout>
