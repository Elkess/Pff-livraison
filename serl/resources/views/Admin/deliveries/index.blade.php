<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deliveries</title>
    <!-- Add any additional head elements here -->
    <style>
        /* CSS for the Deliveries page */
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .table th,
        .table td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
        }

        .table th {
            background-color: #f2f2f2;
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
        <h1>Deliveries</h1>
        {{-- <a href="{{ route('admin.deliveries.create') }}" class="btn btn-primary">Create New Delivery</a> --}}
        <table class="table mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Pick-Up Location</th>
                    <th>Pick-Up Time</th>
                    <th>Drop-Off Location</th>
                    <th>Drop-Off Time</th>
                    <th>Status</th>
                    <th>Client</th>
                    <th>Driver</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($deliveries as $delivery)
                <tr>
                    <td>{{ $delivery->delivery_id }}</td>
                    <td>{{ $delivery->pickUpLocation }}</td>
                    <td>{{ $delivery->pickUpTime }}</td>
                    <td>{{ $delivery->dropOffLocation }}</td>
                    <td>{{ $delivery->dropOffTime }}</td>
                    <td>{{ $delivery->status }}</td>
                    <td>{{ $delivery->client_id ? $delivery->Client->name : 'N/A' }}</td>
                    <td>{{ $delivery->driver_id ? $delivery->Driver->name : 'N/A' }}</td>
                    <td>
                        <a href="{{ route('admin.deliveries.show', $delivery->delivery_id) }}" class="btn btn-info">View</a>
                        <a href="{{ route('admin.deliveries.edit', $delivery->delivery_id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('admin.deliveries.destroy', $delivery->delivery_id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this delivery?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
