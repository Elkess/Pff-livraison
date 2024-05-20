<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Order Form</title>
    <!-- Include Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <x-layout>
        <div class="container mx-auto py-8 px-4">
            <h1 class="text-2xl font-bold mb-4">Order Form</h1>
        <form action="{{ route('order.place') }}" method="POST" class="space-y-4">
            @csrf
            <div class="flex flex-col">
                <label for="pickUpLocation" class="text-lg mb-1">Pickup Location:</label>
                <input type="text" id="pickUpLocation" name="pickUpLocation" required
                    class="border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:border-blue-500">
            </div>
            <div class="flex flex-col">
                <label for="pickUpTime" class="text-lg mb-1">Pickup Time:</label>
                <input type="datetime-local" id="pickUpTime" name="pickUpTime" required
                    class="border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:border-blue-500">
            </div>
            <div class="flex flex-col">
                <label for="dropOffLocation" class="text-lg mb-1">Dropoff Location:</label>
                <input type="text" id="dropOffLocation" name="dropOffLocation" required
                    class="border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:border-blue-500">
            </div>
            <div class="flex flex-col">
                <label for="dropOffTime" class="text-lg mb-1">Dropoff Time:</label>
                <input type="datetime-local" id="dropOffTime" name="dropOffTime" required
                    class="border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:border-blue-500">
            </div>
            <button type="submit"
                class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600">Place
                Order</button>
        </form>
    </div>
</x-layout>
</body>
</html>
