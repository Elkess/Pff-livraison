<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deliveries</title>
    <!-- Add any additional head elements here -->
</head>

<body>
    <div class="container">
        <h1>Edit Delivery</h1>
        <form method="POST" action="{{ route('admin.deliveries.update', $delivery->delivery_id) }}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="pickUpLocation">Pick-Up Location:</label>
                <input type="text" id="pickUpLocation" name="pickUpLocation" class="form-control" value="{{ $delivery->pickUpLocation }}" required>
            </div>
            <div class="form-group">
                <label for="pickUpTime">Pick-Up Time:</label>
                <input type="datetime-local" id="pickUpTime" name="pickUpTime" class="form-control" value="{{ date('Y-m-d\TH:i', strtotime($delivery->pickUpTime)) }}" required>
            </div>
            <div class="form-group">
                <label for="dropOffLocation">Drop-Off Location:</label>
                <input type="text" id="dropOffLocation" name="dropOffLocation" class="form-control" value="{{ $delivery->dropOffLocation }}" required>
            </div>
            <div class="form-group">
                <label for="dropOffTime">Drop-Off Time:</label>
                <input type="datetime-local" id="dropOffTime" name="dropOffTime" class="form-control" value="{{ date('Y-m-d\TH:i', strtotime($delivery->dropOffTime)) }}" required>
            </div>
            <div class="form-group">
                <label for="status">Status:</label>
                <select name="status" id="status" class="form-control" required>
                    <option value="Pending" {{ $delivery->status == 'Pending' ? 'selected' : '' }}>Pending</option>
                    <option value="In Transit" {{ $delivery->status == 'In Transit' ? 'selected' : '' }}>In Transit</option>
                    <option value="Delivered" {{ $delivery->status == 'Delivered' ? 'selected' : '' }}>Delivered</option>
                    <option value="Out for Delivery" {{ $delivery->status == 'Out for Delivery' ? 'selected' : '' }}>Out for Delivery</option>
                    <option value="Attempted Delivery" {{ $delivery->status == 'Attempted Delivery' ? 'selected' : '' }}>Attempted Delivery</option>
                    <option value="Returned to Sender" {{ $delivery->status == 'Returned to Sender' ? 'selected' : '' }}>Returned to Sender</option>
                    <option value="Delayed" {{ $delivery->status == 'Delayed' ? 'selected' : '' }}>Delayed</option>
                    <option value="On Hold" {{ $delivery->status == 'On Hold' ? 'selected' : '' }}>On Hold</option>
                    <option value="Failed" {{ $delivery->status == 'Failed' ? 'selected' : '' }}>Failed</option>
                    <option value="Canceled" {{ $delivery->status == 'Canceled' ? 'selected' : '' }}>Canceled</option>
                </select>
            </div>
            <div class="form-group">
                <label for="client_id">Client:</label>
                <select name="client_id" id="client_id" class="form-control">
                    <option value="">Select Client</option>
                    @foreach ($clients as $client)
                        <option value="{{ $client->id }}" {{ $client->id == $delivery->client_id ? 'selected' : '' }}>{{ $client->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="driver_id">Driver:</label>
                <select name="driver_id" id="driver_id" class="form-control">
                    <option value="">Select Driver</option>
                    @foreach ($drivers as $driver)
                        <option value="{{ $driver->id }}" {{ $driver->id == $delivery->driver_id ? 'selected' : '' }}>{{ $driver->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>

</body>

</html>