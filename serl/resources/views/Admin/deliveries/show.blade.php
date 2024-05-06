<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delivery Details</title>
    <style>
        /* CSS for the Delivery Details page */
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        .card {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 20px;
        }

        .card-title {
            margin-bottom: 10px;
        }

        .card-text {
            margin-bottom: 5px;
        }

        .btn {
            display: inline-block;
            padding: 8px 16px;
            border: none;
            border-radius: 4px;
            background-color: #007bff;
            color: #fff;
            text-align: center;
            text-decoration: none;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .btn-primary {
            background-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .btn-danger {
            background-color: #dc3545;
        }

        .btn-danger:hover {
            background-color: #c82333;
        }
    </style>
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
