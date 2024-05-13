<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All orders</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table th,
        table td {
            padding: 8px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }

        table th {
            background-color: #f2f2f2;
        }

        table tr:nth-child(even) {
            background-color: #f9f9f9;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>All Orders</h1>
        <table>
            <thead>
                <tr>
                    <th>Order Number</th>
                    <th>Pickup Location</th>
                    <th>Pickup Time</th>
                    <th>Dropoff Location</th>
                    <th>Dropoff Time</th>
                    <th>Status</th>
                    <th>Client ID</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                    <tr>
                        <td>{{ $order->order_number }}</td>
                        <td>{{ $order->pickUpLocation }}</td>
                        <td>{{ $order->pickUpTime }}</td>
                        <td>{{ $order->dropOffLocation }}</td>
                        <td>{{ $order->dropOffTime }}</td>
                        <td>{{ $order->status }}</td>
                        <td>{{ $order->client_id }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
