<x-layout>
    <div class= "container mx-auto mt-10">
        <h1 class="text-3xl font-semibold mb-8 text-gray-800">Payments</h1>
        <div class="overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500">
                <thead class="text-xs text-white uppercase bg-blue-500">
                    <tr>
                        <th class="px-6 py-3">Payment ID</th>
                        <th class="px-6 py-3">Payment Date</th>
                        <th class="px-6 py-3">Amount</th>
                        <th class="px-6 py-3">Card Number</th>
                        <th class="px-6 py-3">Expiry Date</th>
                        <th class="px-6 py-3">CVV</th>
                        <th class="px-6 py-3">Status</th>
                        <th class="px-6 py-3">Client ID</th>
                        <th class="px-6 py-3">Created At</th>
                        <th class="px-6 py-3">Updated At</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($payments as $payment)
                        <tr class="bg-white border-b hover:bg-gray-50">
                            <td class="px-6 py-4">{{ $payment->payment_id }}</td>
                            <td class="px-6 py-4">{{ $payment->PaymentDate }}</td>
                            <td class="px-6 py-4">{{ $payment->amount }}</td>
                            <td class="px-6 py-4">{{ $payment->card_number }}</td>
                            <td class="px-6 py-4">{{ $payment->expiry_date }}</td>
                            <td class="px-6 py-4">{{ $payment->cvv }}</td>
                            <td class="px-6 py-4">{{ $payment->status }}</td>
                            <td class="px-6 py-4">{{ $payment->client_id }}</td>
                            <td class="px-6 py-4">{{ $payment->created_at }}</td>
                            <td class="px-6 py-4">{{ $payment->updated_at }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</x-layout>
