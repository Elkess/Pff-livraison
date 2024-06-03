

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Serl</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    @vite(['resources/css/tail.css'])

</head>


<body>

    <x-ClientNavbar />
    <img class='image'
        src="https://wp.dreamitsolution.net/multilen/multilen-transport/wp-content/uploads/2021/10/our-services-title-bg-img.jpg"
        alt="">
    <h1 class="l3onyawnfo9tswira">
        Contact
    </h1>
    <div class="container ">

        <form action="{{ route('send.email') }}" method="post" class="bg-white">
            @csrf

            <h1>Contact Us Form</h1>
            <div>
                <input type="text" name="name" placeholder="Name">
                @error('name')
                    <span class="text-danger"> {{ $message }} </span>
                @enderror
            </div>

            <!-- <div data-validate="Valid email is required: ex@abc.xyz">
                        <input type="text" name="email" placeholder="Email">
                    </div> -->

            <div>
                <input class="input0" type="text" name="subject" placeholder="subject">
                @error('subject')
                    <span class="text-danger"> {{ $message }} </span>
                @enderror
            </div>

            <h4>Type Your Message Here</h4>

            <div>
                <textarea name="content"></textarea>
                @error('content')
                    <span class="text-danger"> {{ $message }} </span>
                @enderror
            </div>

            <input type="submit" value="Send" id="button">

    </div>


    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif
    </form>

    </div>


    <!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/tilt/tilt.jquery.min.js"></script>
    <script>
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>
    <!--===============================================================================================-->
    <script src="js/main.js"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>
    <x-ClientFooter />
</body>

</html>
