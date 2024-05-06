<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deliveries</title>
    <link rel="stylesheet" href={{asset("css/style.css") }}>
    <style>
        /* Container styles */
.container.dd {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
}

/* Heading styles */
h1 {
    margin-top: 0;
}

/* Form styles */
.form-group {
    margin-bottom: 20px;
}

/* Input styles */
input[type="text"],
input[type="datetime-local"],
select {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 3px;
    box-sizing: border-box;
}

/* Button styles */
button {
    padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 3px;
    cursor: pointer;
    transition: background-color 0.3s;
}

button:hover {
    background-color: #0056b3;
}

    </style>
</head>

<body>
    <div class="container dd">
        <h1>Create Delivery</h1>
        <form method="POST" action="{{ route('admin.deliveries.store') }}">
            @csrf
            <div class="form-group">
                <label for="pickUpLocation">Pick-Up Location:</label>
                <input type="text" id="pickUpLocation" name="pickUpLocation" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="pickUpTime">Pick-Up Time:</label>
                <input type="datetime-local" id="pickUpTime" name="pickUpTime" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="dropOffLocation">Drop-Off Location:</label>
                <input type="text" id="dropOffLocation" name="dropOffLocation" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="dropOffTime">Drop-Off Time:</label>
                <input type="datetime-local" id="dropOffTime" name="dropOffTime" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="status">Status:</label>
                <select name="status" id="status" class="form-control" required>
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
            <div class="form-group">
                <label for="client_id">Client:</label>
                <select name="client_id" id="client_id" class="form-control">
                    <option value="">Select Client</option>
                    @foreach ($clients as $client)
                        <option value="{{ $client->id }}">{{ $client->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="driver_id">Driver:</label>
                <select name="driver_id" id="driver_id" class="form-control">
                    <option value="">Select Driver</option>
                    @foreach ($drivers as $driver)
                        <option value="{{ $driver->id }}">{{ $driver->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>

</body>

</html>