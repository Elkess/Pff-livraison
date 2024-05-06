<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehicle Details</title>
    <style>
        /* Responsive CSS for Vehicle Details */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #eaeaea;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 40px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
            text-align: center;
            margin-bottom: 30px;
        }

        .details {
            margin-bottom: 20px;
            background-color: #f7f7f7;
            padding: 15px;
            border-radius: 4px;
        }

        .details label {
            font-weight: bold;
            color: #555;
        }

        .details p {
            margin: 5px 0 15px 0;
            color: #666;
        }

        a.button {
            text-decoration: none;
            padding: 10px 20px;
            background-color: #5cb85c;
            color: white;
            border-radius: 4px;
            display: inline-block;
            margin-right: 10px;
            transition: background-color 0.3s ease;
        }

        a.button:hover {
            background-color: #4cae4c;
        }

        button {
            padding: 10px 20px;
            background-color: #d9534f;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #c9302c;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .container {
                width: 90%;
                margin: 20px auto;
            }

            .details {
                padding: 10px;
            }

            a.button,
            button {
                padding: 8px 16px;
            }
        }

        @media (max-width: 480px) {
            h1 {
                font-size: 24px;
            }

            .details label {
                font-size: 14px;
            }

            .details p {
                font-size: 13px;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Vehicle Details</h1>
        <div class="details">
            <label for="vehicle_id">Vehicle ID:</label>
            <p>{{ $vehicle->vehicle_id }}</p>
        </div>
        <div class="details">
            <label for="type">Type:</label>
            <p>{{ $vehicle->type }}</p>
        </div>
        <div class="details">
            <label for="capacity">Capacity:</label>
            <p>{{ $vehicle->capacity }}</p>
        </div>
        <div class="details">
            <label for="status">Status:</label>
            <p>{{ $vehicle->status }}</p>
        </div>
        <div class="details">
            <label for="currentLocation">Current Location:</label>
            <p>{{ $vehicle->currentLocation }}</p>
        </div>
        <div class="details">
            <label for="driver_id">Driver ID:</label>
            <p>{{ $vehicle->driver_id }}</p>
        </div>
        <a href="{{ route('admin.vehicles.edit', $vehicle->vehicle_id) }}" class="button">Edit</a>
        <form action="{{ route('admin.vehicles.destroy', $vehicle->vehicle_id) }}" method="POST"
            style="display: inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="button"
                onclick="return confirm('Are you sure you want to delete this vehicle?')">Delete</button>
        </form>
    </div>
</body>

</html>
