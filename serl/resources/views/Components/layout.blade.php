<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Serl</title>
    {{-- <link rel="stylesheet" href={{asset('css/app.css')}}/> --}}
    @vite(['resources/css/app.css'])

</head>

<body>
    <nav>

        <ul>
            {{-- <li> <a href={{ route('admin.users.index') }}>users</a></li>
            <li> <a href={{ route('admin.vehicles.index') }}>vehicles</a></li>
            <li> <a href={{ route('ShowOrders') }}>showorders</a></li>
            <li> <a href={{ route('order.form') }}>showForm</a></li>
            <li> <a href={{ route('admin.deliveries.index') }}>deliveries</a></li>
            <li> <a href={{ route('payments.create') }}>create payement</a></li> --}}

        </ul>
        <div class="bg-white pl-4 min-h-20 rounded-lg shadow-lg  flex mb-6">
            <img src="{{ asset('images/BestBrother.jpg') }}" class="border rounded-full w-10 h-10 mt-4" alt="Logo">
            <div class="mt-7 ml-8">
                <a href="{{ route('admin.users.index') }}"
                    class=" font-bold
            mr-4
            text-blue-600
            hover:text-blue-400
            ">Users</a>
                <a href="{{ route('admin.deliveries.index') }}"
                    class="font-bold
            mr-4
            text-blue-600
            hover:text-blue-400">Deliveries</a>
                <a href="{{ route('admin.payments.index') }}" class="font-bold
            mr-4
            text-blue-600
            hover:text-blue-400">Payments</a>
                <a href="{{ route('admin.vehicles.index') }}"
                    class=" font-bold
            mr-4
            text-blue-600
            hover:text-blue-400">Vehicles</a>
            
            <a href="{{ route('ShowOrders') }}"
                    class=" font-bold
            mr-4
            text-blue-600
            hover:text-blue-400">Orders</a>
            </div>
        </div>
    </nav>
    {{ $slot }}
</body>

</html>
