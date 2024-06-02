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
                    <option value="Ready" {{ $delivery->status == 'Ready' ? 'selected' : '' }}>Ready</option>
                    <option value="in_transit" {{ $delivery->status == 'in_transit' ? 'selected' : '' }}>In transit
                    </option>
                    <option value="Other" {{ $delivery->status == 'Other' ? 'selected' : '' }}>Other
                    </option>

                </select>
            </div>
            <div class="flex flex-col">
                <label for="client_id" class="text-lg text-gray-800 font-bold">Client:</label>
                <select name="client_id" id="client_id" class="p-2">
                    <option value="">Select Client</option>
                    @foreach ($clients as $client)
                        <option value="{{ old('client_id', $delivery->client_id) }}"
                            {{ $client->user_id == $delivery->client_id ? 'selected' : '' }}>
                            {{ $client->Lastname }}</option>
                    @endforeach
                </select>
            </div>
            <div class="flex flex-col">
                <label for="driver_id" class="text-lg text-gray-800 font-bold">Driver:</label>
                <select name="driver_id" id="driver_id" class="p-2">
                    <option value="">Select Driver</option>
                    @foreach ($drivers as $driver)
                        <option value="{{ $driver->user_id }}"
                            {{ $driver->user_id == $delivery->driver_id ? 'selected' : '' }}>
                            {{ $driver->Lastname }}</option>
                    @endforeach
                </select>
            </div>
            <div class="flex flex-col">
                <label for="driver_id" class="text-lg text-gray-800 font-bold">Vehicle :</label>
                <select name="vehicle_id" id="vehicle_id" class="p-2">
                    <option value="">Select Vehicle</option>
                    @foreach ($vehicles as $vehicle)
                        <option value="{{ $vehicle->vehicle_id }}"
                            {{ $vehicle->vehicle_id == $delivery->vehicle_id ? 'selected' : '' }}>
                            {{ $vehicle->type }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit"
                class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">Update</button>
                {{-- {{dd($delivery)}} --}}
                <a href="{{ route('admin.deliveries.index') }}"
                class=" hover:bg-slate-300 bg-blue-200 text-black py-2 font-semibold px-2 rounded "> Go back</a>
        </form>
    </div>
</x-layout>
