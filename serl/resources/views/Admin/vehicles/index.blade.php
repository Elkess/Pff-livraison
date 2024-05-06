<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehicle List</title>
    <style>
        /* Updated CSS for index.blade.php */
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f7f7f7;
        }

        .container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 0 15px;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .btn-view,
        .btn-edit,
        .btn-delete {
            text-decoration: none;
            padding: 8px 16px;
            color: white;
            border-radius: 5px;
            text-align: center;
            display: inline-block;
        }

        .btn-view {
            background-color: #5cb85c;
        }

        .btn-edit {
            background-color: #f0ad4e;
        }

        .btn-delete {
            background-color: #d9534f;
        }

        a.button {
            text-decoration: none;
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border-radius: 5px;
            display: inline-block;
            margin-bottom: 20px;
        }

        a.button:hover {
            background-color: #0056b3;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .container {
                width: 95%;
            }

            table,
            thead,
            tbody,
            th,
            td,
            tr {
                display: block;
            }

            th,
            td {
                text-align: right;
                padding-left: 50%;
                position: relative;
            }

            td:before {
                content: attr(data-label);
                position: absolute;
                left: 0;
                width: 50%;
                padding-left: 15px;
                font-weight: bold;
                text-align: left;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Vehicle List</h1>
        <a href="{{ route('admin.vehicles.create') }}" class="button">Create New Vehicle</a>
        <table>
            <thead>
                <tr>
                    <th>Vehicle ID</th>
                    <th>Type</th>
                    <th>Capacity</th>
                    <th>Status</th>
                    <th>Current Location</th>
                    <th>Driver ID</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($vehicles as $vehicle)
                    <tr>
                        <td>{{ $vehicle->vehicle_id }}</td>
                        <td>{{ $vehicle->type }}</td>
                        <td>{{ $vehicle->capacity }}</td>
                        <td>{{ $vehicle->status }}</td>
                        <td>{{ $vehicle->currentLocation }}</td>
                        <td>{{ $vehicle->driver_id }}</td>
                        <td>
                            <a href="{{ route('admin.vehicles.show', $vehicle->vehicle_id) }}" class="btn-view">View</a>
                            <a href="{{ route('admin.vehicles.edit', $vehicle->vehicle_id) }}" class="btn-edit">Edit</a>
                            <form action="{{ route('admin.vehicles.destroy', $vehicle->vehicle_id) }}" method="POST"
                                style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn-delete"
                                    onclick="return confirm('Are you sure you want to delete this vehicle?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
