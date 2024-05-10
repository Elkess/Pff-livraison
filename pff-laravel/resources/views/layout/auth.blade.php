<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Auth Layout</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>

    </head>

    <body>
        <x-navbar />
        <div class="d-flex flex-row justify-content-between ">
                @yield('form')
            <div >
              <img class=" img-fluid w-50" src="https://linklogistics.com.tr/wp-content/uploads/2019/08/shutterstock_722794939-e1614461344527.jpg"/>
            </div>
        </div>
        <x-footer />

    </body>

</html>
