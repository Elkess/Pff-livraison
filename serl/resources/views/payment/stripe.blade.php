<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Payment with Stripe </title>
</head>

<body>
    <form action={{ route('payment.checkout') }} method="POST">
        @csrf {{--   cross site request force --}}

        <button>Checkout</button>
    </form>
</body>

</html>
