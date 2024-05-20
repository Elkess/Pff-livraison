<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Form</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: rgb(167, 174, 255);
            margin: 0;
            padding: 0;
            height: 100vh;
        }
        h2{
            color:rgb(255, 255, 255); 
            margin-left: 15%;
            margin-top: 10%;
        }
        form {
            margin-inline: 40%;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        label {
            font-weight: bold;
            color: #666;
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"] {
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
            padding: 10px;
            width: 100%;
            margin-bottom: 20px;
        }

        button {
            font-size: 1.2rem;
            font-weight: bold;
            background-color:rgb(47, 61, 255) ;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            background-color: #002fff;
        }

        
        @media (max-width: 600px) {
            form {
                width: 90%;
            }
        }
    </style>
</head>

<body>
    <h2>Payment Form</h2><br>
    <form action="{{ route('payments.process', $order) }}" method="POST">
        @csrf
        <label for="amount">Amount:</label>
        <input type="text" id="amount" name="amount" value="{{ $totalAmount }}" required>

        <label for="card_number">Card Number:</label>
        <input type="text" id="card_number" name="card_number" required>

        <label for="expiry_date">Expiry Date:</label>
        <input type="text" id="expiry_date" name="expiry_date" required>

        <label for="cvv">CVV:</label>
        <input type="text" id="cvv" name="cvv" required>

        <input type="hidden" name="order_id" value="{{ $order->id }}">
        <input type="hidden" name="client_id" value="{{ $order->client_id }}">

        <button type="submit">Submit Payment</button>
    </form>
</body>

</html>
