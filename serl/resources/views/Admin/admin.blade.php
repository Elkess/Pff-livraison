<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    @vite(['resources/css/app.css'])
</head>

<body class="bg-gray-100">
    <div class="container mx-auto mt-10">
        <h1 class="text-2xl font-bold mb-6">Admin Panel</h1>
        <div class="bg-white p-6 rounded-lg shadow-lg flex mb-6">
            <a href="{{ route('admin.users.index') }}"
                class="font-bold
            mr-4
            text-blue-600
            hover:text-blue-400">Users</a>
            <a href="{{ route('admin.deliveries.index') }}"
                class="font-bold
            mr-4
            text-blue-600
            hover:text-blue-400">Deliveries</a>
            <a href="{{ route('admin.vehicles.index') }}"
                class="font-bold
            mr-4
            text-blue-600
            hover:text-blue-400">Payments</a>
            <a href="{{ route('admin.vehicles.index') }}"
                class="font-bold
            mr-4
            text-blue-600
            hover:text-blue-400">Vehicles</a>
            
            <a href="{{ route('ShowOrders') }}"
                class="font-bold
            mr-4
            text-blue-600
            hover:text-blue-400">Orders</a>

        </div>

    </div>
</body>

</html>
