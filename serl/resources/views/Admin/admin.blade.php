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
        <h1 class="text-2xl font-bold mb-6 ml-3">Admin Panel</h1>
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
            <a href="{{ route('admin.payments.index') }}"
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
    <div class="Total-Amount">
        {{-- Khassni ndir mzl amounts dyal xhar wa7d 
            o ghanzid ana ay ay client wsl l 10 les delivery taykhod cupon kayn9ss lih f 10 jayin
            --}}
        @foreach ($monthlyAmounts as $monthlyAmount)
            <div class="ml-10 font-bold">
                Month : <span class="text-blue-500">{{ $monthlyAmount->month }}</span> . Total Amount : <span
                    class="text-blue-500">{{ $monthlyAmount->total_amount }} </span>DH
            </div>
        @endforeach
    </div>
    <div class="delivered-deliveries flex flex-wrap justify-between mx-2">
        @foreach ($deliveredDeliveries as $deliveredDelivery)
            <div class="delivery text-center border-2 border-gray-700 rounded-xl m-6 p-10 flex-1 min-w-[25%] shadow-xl transition-all hover:shadow-2xl"
                id="{{ $deliveredDelivery->delivery_id }}">

                <ul class="">
                    <li class="  font-semibold mb-4 text-2xl">ID: {{ $deliveredDelivery->delivery_id }}</li>
                    <li class="text-lg"><span class="text-blue-600">Driver:
                        </span>{{ $deliveredDelivery->driver->name }}</li>
                    <li class="text-lg"><span class="text-blue-600">Client: </span>
                        {{ $deliveredDelivery->client->name }}</li>
                    <li class="text-lg text-blue-700 font-semibold">{{ $deliveredDelivery->status }}</li>
                    <li class="mt-6"><a href="{{ route('admin.deliveries.show', $deliveredDelivery->delivery_id) }}"
                            class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2.5 px-9 rounded-full">View</a>
                    </li>
                </ul>
            </div>
        @endforeach
    </div>

</body>

</html>
