<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Delivery</title>
    <!-- Add any additional head elements here -->
    <style>
        /* CSS for the Edit Delivery page */
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        input[type="text"],
        select,
        input[type="datetime-local"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        select {
            height: 40px;
        }

        button {
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Edit Delivery</h1>
        <form method="POST" action="{{ route('admin.deliveries.update', $delivery->delivery_id) }}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="pickUpLocation">Pick-Up Location:</label>
                <input type="text" id="pickUpLocation" name="pickUpLocation" value="{{ $delivery->pickUpLocation }}" required>
            </div>
            <div class="form-group">
                <label for="pickUpTime">Pick-Up Time:</label>
                <input type="datetime-local" id="pickUpTime" name="pickUpTime" value="{{ date('Y-m-d\TH:i', strtotime($delivery->pickUpTime)) }}" required>
            </div>
            <div class="form-group">
                <label for="dropOffLocation">Drop-Off Location:</label>
                <input type="text" id="dropOffLocation" name="dropOffLocation" value="{{ $delivery->dropOffLocation }}" required>
            </div>
            <div class="form-group">
                <label for="dropOffTime">Drop-Off Time:</label>
                <input type="datetime-local" id="dropOffTime" name="dropOffTime" value="{{ date('Y-m-d\TH:i', strtotime($delivery->dropOffTime)) }}" required>
            </div>
            <div class="form-group">
                <label for="status">Status:</label>
                <select name="status" id="status" required>
                    <option value="Pending" {{ $delivery->status == 'Pending' ? 'selected' : '' }}>Pending</option>
                    <!-- Add other status options here -->
                </select>
            </div>
            <div class="form-group">
                <label for="client_id">Client:</label>
                <select name="client_id" id="client_id">
                    <option value="">Select Client</option>
                    @foreach ($clients as $client)
                        <option value="{{ $client->id }}" {{ $client->id == $delivery->client_id ? 'selected' : '' }}>{{ $client->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="driver_id">Driver:</label>
                <select name="driver_id" id="driver_id">
                    <option value="">Select Driver</option>
                    @foreach ($drivers as $driver)
                        <option value="{{ $driver->id }}" {{ $driver->id == $delivery->driver_id ? 'selected' : '' }}>{{ $driver->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit">Update</button>
        </form>
    </div>
</body>

</html>
