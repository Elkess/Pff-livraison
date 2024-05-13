<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Order Form</title>
    <!-- Include any necessary stylesheets -->
</head>
<body>
    <h1>Order Form</h1>
    <form action="{{ route('order.place') }}" method="POST">
        @csrf
        <div class="field">
            <label for="pickUpLocation">Pickup Location:</label>
            <input type="text" id="pickUpLocation" name="pickUpLocation" required>
        </div>
        <div class="field">
            <label for="pickUpTime">Pickup Time:</label>
            <input type="datetime-local" id="pickUpTime" name="pickUpTime" required>
        </div>
        <div class="field">
            <label for="dropOffLocation">Dropoff Location:</label>
            <input type="text" id="dropOffLocation" name="dropOffLocation" required>
        </div>
        <div class="field">
            <label for="dropOffTime">Dropoff Time:</label>
            <input type="datetime-local" id="dropOffTime" name="dropOffTime" required>
        </div>
        <button type="submit">Place Order</button>
    </form>
    <!-- Include any necessary scripts -->
</body>
</html>
