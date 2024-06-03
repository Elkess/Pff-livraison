<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Form</title>
    @vite(['resources/css/tail.css'])
</head>

<body class="bg-blue-200 flex justify-center items-center h-screen">
    <div class="w-full max-w-md bg-white p-8 rounded-lg shadow-lg">
        <h2 class="text-center text-2xl font-bold text-gray-800 mb-8">Payment Form</h2>
        <form action="{{ route('payments.process', $order) }}" method="POST">
            @csrf
            <div class="mb-6">
                <label for="amount" class="block text-gray-700 font-bold mb-2">Amount:</label>
                <input type="text" id="amount" name="amount" value="{{ $totalAmount }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>
            <div class="mb-6">
                <label for="card_number" class="block text-gray-700 font-bold mb-2">Card Number:</label>
                <input type="text" id="card_number" name="card_number" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>
            <div class="mb-6">
                <label for="expiry_date" class="block text-gray-700 font-bold mb-2">Expiry Date:</label>
                <input type="text" id="expiry_date" name="expiry_date" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>
            <div class="mb-6">
                <label for="cvv" class="block text-gray-700 font-bold mb-2">CVV:</label>
                <input type="text" id="cvv" name="cvv" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>
            <input type="hidden" name="order_id" value="{{ $order->id }}">
            <input type="hidden" name="client_id" value="{{ $order->client_id }}">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline w-full">Submit Payment</button>
            <a href="{{ route('client.index') }}"
                class=" hover:bg-slate-300
            bg-blue-200
            text-black py-2 font-semibold px-2 rounded mt-4">Cancel</a>
        </form>
    </div>
</body>

</html>
