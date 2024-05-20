<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Auth Layout</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
          <link rel="icon" type="image/x-icon" href="/images/favicon.ico">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>

    </head>

    <body  style="background-image: url('https://6130635.fs1.hubspotusercontent-na1.net/hub/6130635/hubfs/AdobeStock_209740192.jpeg?width=720&name=AdobeStock_209740192.jpeghttps://stock-log.pl/wp-content/uploads/2019/12/frony.jpg');">
        <x-navbar />
        <div class="mb-3">

            {{-- <div class="d-flex flex-row justify-content-between "> --}}
                {{-- </div> --}}
                @yield('form')
            </div>
                <x-footer />
    </body>

</html>
