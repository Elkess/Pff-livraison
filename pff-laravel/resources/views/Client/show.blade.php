<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All orders</title>
    <!-- Include Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 font-sans">
    <x-layout>
        <div class="container mx-auto my-10 px-4">
            <h1 class="text-2xl font-bold text-center mb-6">All Orders</h1>
        <div class="overflow-x-auto">
            <table class="w-full table-auto border-collapse border border-gray-200">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="px-4 py-2">Order Number</th>
                        <th class="px-4 py-2">Pickup Location</th>
                        <th class="px-4 py-2">Pickup Time</th>
                        <th class="px-4 py-2">Dropoff Location</th>
                        <th class="px-4 py-2">Dropoff Time</th>
                        <th class="px-4 py-2">Status</th>
                        <th class="px-4 py-2">Client ID</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $order)
                        <tr class="{{ $loop->even ? 'bg-gray-50' : 'bg-white' }}">
                            <td class="border px-4 py-2">{{ $order->order_number }}</td>
                            <td class="border px-4 py-2">{{ $order->pickUpLocation }}</td>
                            <td class="border px-4 py-2">{{ $order->pickUpTime }}</td>
                            <td class="border px-4 py-2">{{ $order->dropOffLocation }}</td>
                            <td class="border px-4 py-2">{{ $order->dropOffTime }}</td>
                            <td class="border px-4 py-2">{{ $order->status }}</td>
                            <td class="border px-4 py-2">{{ $order->client_id }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-layout>
</body>

</html>
