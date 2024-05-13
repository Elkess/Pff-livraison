<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Form</title>
</head>
<body>
    <h1>Payment Form</h1>
    <form action="{{ route('payments.process', $order) }}" method="POST">
        @csrf
        <label for="amount">Amount:</label>
        <input type="text" id="amount" name="amount" value="{{ $totalAmount }}" required><br><br>
        <label for="card_number">Card Number:</label>
        <input type="text" id="card_number" name="card_number" required><br><br>
        <label for="expiry_date">Expiry Date:</label>
        <input type="text" id="expiry_date" name="expiry_date" required><br><br>
        <label for="cvv">CVV:</label>
        <input type="text" id="cvv" name="cvv" required><br><br>
        <input type="hidden" name="order_id" value="{{ $order->id }}">
        <input type="hidden" name="client_id" value="{{ $order->client_id }}">
        <button type="submit">Submit Payment</button>
    </form>
</body>
</html>
