<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deliveries</title>
</head>

<body>
    <div class="container">
        <h1>Delivery Details</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">ID: {{ $delivery->delivery_id }}</h5>
                <p class="card-text"><strong>Pick-Up Location:</strong> {{ $delivery->pickUpLocation }}</p>
                <p class="card-text"><strong>Pick-Up Time:</strong> {{ $delivery->pickUpTime }}</p>
                <p class="card-text"><strong>Drop-Off Location:</strong> {{ $delivery->dropOffLocation }}</p>
                <p class="card-text"><strong>Drop-Off Time:</strong> {{ $delivery->dropOffTime }}</p>
                <p class="card-text"><strong>Status:</strong> {{ $delivery->status }}</p>
                <p class="card-text"><strong>Client:</strong>
                    {{ $delivery->client_id ? $delivery->client->name : 'N/A' }}
                </p>
                <p class="card-text"><strong>Driver:</strong>
                    {{ $delivery->driver_id ? $delivery->driver->name : 'N/A' }}
                </p>
                <a href="{{ route('admin.deliveries.edit', $delivery->delivery_id) }}" class="btn btn-primary">Edit</a>
                <form action="{{ route('admin.deliveries.destroy', $delivery->delivery_id) }}" method="POST"
                    style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger"
                        onclick="return confirm('Are you sure you want to delete this delivery?')">Delete</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
