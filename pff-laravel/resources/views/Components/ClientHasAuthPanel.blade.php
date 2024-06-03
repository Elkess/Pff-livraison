<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Client Panel</title>
    @vite(['resources/css/tail.css'])
</head>

<body class="bg-gray-100">
      <x-ClientNavbar />

    <div class="container mx-auto px-4 py-6">
        <div class="bg-white shadow-md rounded-lg p-6">
            <h1 class="text-2xl font-bold mb-6">Client Panel</h1>
            <div class="mb-6">
                <a href="{{ route('client.orders.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Add
                    Order</a>
            </div>
            <div class="mb-6">
                <h2 class="text-xl font-semibold mb-4">Orders</h2>
                <table class="min-w-full bg-white">
                    <thead>
                        <tr>
                            <th class="py-2 px-3 bg-gray-200">Order Number</th>
                            <th class="py-2 px-3 bg-gray-200">Pickup Location</th>
                            <th class="py-2 px-3 bg-gray-200">Pickup Time</th>
                            <th class="py-2 px-3 bg-gray-200">Dropoff Location</th>
                            <th class="py-2 px-3 bg-gray-200">Dropoff Time</th>
                            <th class="py-2 px-3 bg-gray-200">Status</th>
                            <th class="py-2 px-3 bg-gray-200">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $order)
                            <tr>
                                <td class="p-1 text-nowrap border">{{ $order->order_number }}</td>
                                <td class="p-1 text-nowrap border">{{ $order->pickUpLocation }}</td>
                                <td class="p-1 text-nowrap border">{{ $order->pickUpTime }}</td>
                                <td class="p-1 text-nowrap border">{{ $order->dropOffLocation }}</td>
                                <td class="p-1 text-nowrap border">{{ $order->dropOffTime }}</td>
                                <td class="p-1 text-nowrap border">{{ $order->status }}</td>
                                @if ($order->status != 'Paid')
                                    <td class="py-2 text-nowrap px-3 border">
                                        <a href="{{ route('payments.create', $order) }}"
                                            class="bg-blue-500 text-white p-2 rounded full-width">Confirm order</a>
                                    </td>
                                @endif
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- Deliveries Table -->
            <div class="mb-6">
                <h2 class="text-xl font-semibold mb-4">Deliveries</h2>
                <table class="min-w-full bg-white">
                    <thead>
                        <tr>
                            <th class="py-2 px-4 bg-gray-200">Delivery ID</th>
                            <th class="py-2 px-4 bg-gray-200">Status</th>
                            <th class="py-2 px-4 bg-gray-200">Pickup Location</th>
                            <th class="py-2 px-4 bg-gray-200">Pickup Time</th>
                            <th class="py-2 px-4 bg-gray-200">Dropoff Location</th>
                            <th class="py-2 px-4 bg-gray-200">Dropoff Time</th>
                            <th class="py-2 px-4 bg-gray-200">Status</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($deliveries as $delivery)
                            <tr>
                                <td class="py-2 px-4 border">{{ $delivery->delivery_id }}</td>
                                <td class="py-2 px-4 border">{{ $delivery->status }}</td>
                                <td class="py-2 px-4 border">{{ $delivery->pickuplocation }}</td>
                                <td class="py-2 px-4 border">{{ $delivery->pickuptime }}</td>
                                <td class="py-2 px-4 border">{{ $delivery->dropofflocation }}</td>
                                <td class="py-2 px-4 border">{{ $delivery->dropofftime }}</td>
                                <td class="py-2 px-4 border">{{ $delivery->status }}</td>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>


        </div>
    </div>
</body>

</html>
