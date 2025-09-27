<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Contact Us</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }

    .container {
        min-height: 100vh;
        background: #08071d;
        display: flex;
        justify-content: center;
        align-items: center;
        background: url("bg.png") no-repeat center center/cover;
    }

    .container form {
        width: 670px;
        height: 400px;
        display: flex;
        justify-content: center;
        box-shadow: 20px 20px 50px rgba(0, 0, 0, 0.5);
        border-radius: 15px;
        background: rgba(255, 255, 255, 0.1);
        background-color: #24262b;
        flex-wrap: wrap;
    }

    .container form h1 {
        color: #e91e63;
        font-weight: 500;
        margin-top: 20px;
        width: 500px;
        text-align: center;
    }

    .container form input {
        width: 290px;
        height: 40px;
        padding-left: 10px;
        outline: none;
        border: none;
        font-size: 15px;
        margin-bottom: 10px;
        background: none;
        border-bottom: 2px solid #fff;
    }

    .container form input::placeholder {
        color: #e91e63;
    }

    .container form #lastName,
    .container form #mobile {
        margin-left: 20px;
    }

    .container form h4 {
        color: #e91e63;
        font-weight: 300;
        width: 600px;
        margin-top: 20px;
    }

    .container form textarea {
        background: none;
        border: none;
        border-bottom: 2px solid #fff;
        color: #fff;
        font-weight: 200;
        font-size: 15px;
        padding: 10px;
        outline: none;
        min-width: 600px;
        max-width: 600px;
        min-height: 80px;
        max-height: 80px;
    }

    textarea::-webkit-scrollbar {
        width: 1em;
    }

    textarea::-webkit-scrollbar-thumb {
        background-color: rgba(194, 194, 194, 0.713);
    }

    .container form #button {
        border: none;
        background: #fff;
        border-radius: 5px;
        margin-top: 20px;
        font-weight: 600;
        font-size: 20px;
        color: #333;
        width: 100px;
        padding: 0;
        margin-right: 500px;
        margin-bottom: 30px;
        transition: 0.3s;
    }

    .container form #button:hover {
        opacity: 0.7;
    }
</style>

<body>
    <x-navbar />

    <div class="container">
        <form>
            <h1>Contact Us Form</h1>
            <input type="text" id="firstName" placeholder="First Name" required>
            <input type="text" id="lastName" placeholder="Last Name" required>
            <input type="email" id="email" placeholder="Email" required>
            <input type="text" id="mobile" placeholder="Mobile" required>
            <h4>Type Your Message Here</h4>
            <textarea required></textarea>
            <input type="submit" value="Send" id="button">
        </form>
    </div>
    <x-footer />
</body>

</html>
 -->

 <!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }

    .container {
        min-height: 100vh;
        background: #08071d;
        display: flex;
        justify-content: center;
        align-items: center;
        background: url("bg.png") no-repeat center center/cover;
    }

    .container form {
        width: 670px;
        height: 400px;
        display: flex;
        justify-content: center;
        box-shadow: 20px 20px 50px rgba(0, 0, 0, 0.5);
        border-radius: 15px;
        background: rgba(255, 255, 255, 0.1);
        background-color: #24262b;
        flex-wrap: wrap;
    }

    .container form h1 {
        color: #e91e63;
        font-weight: 500;
        margin-top: 20px;
        width: 500px;
        text-align: center;
    }

    .container form input {
        width: 290px;
        height: 40px;
        padding-left: 10px;
        outline: none;
        border: none;
        font-size: 15px;
        margin-bottom: 10px;
        background: none;
        border-bottom: 2px solid #fff;
    }

    .container form input::placeholder {
        color: #e91e63;
    }

    .container form #lastName,
    .container form #mobile {
        margin-left: 20px;
    }

    .container form h4 {
        color: #e91e63;
        font-weight: 300;
        width: 600px;
        margin-top: 20px;
    }

    .container form textarea {
        background: none;
        border: none;
        border-bottom: 2px solid #fff;
        color: #fff;
        font-weight: 200;
        font-size: 15px;
        padding: 10px;
        outline: none;
        min-width: 600px;
        max-width: 600px;
        min-height: 80px;
        max-height: 80px;
    }

    textarea::-webkit-scrollbar {
        width: 1em;
    }

    textarea::-webkit-scrollbar-thumb {
        background-color: rgba(194, 194, 194, 0.713);
    }

    .container form #button {
        border: none;
        background: #fff;
        border-radius: 5px;
        margin-top: 20px;
        font-weight: 600;
        font-size: 20px;
        color: #333;
        width: 100px;
        padding: 0;
        margin-right: 500px;
        margin-bottom: 30px;
        transition: 0.3s;
    }

    .container form #button:hover {
        opacity: 0.7;
    }
    .input0{
        margin-left: 20px;
    }
    .image {
            width: 100%;
            height: 100%;
        }

        .l3onyawnfo9tswira {
            position: absolute;
            top: 55%;
            left: 20%;
            transform: translate(-50%, -50%);
            color: white;
            font-size: 60px;
            font-family: Arial, sans-serif;
            float: right;
        }
</style>

<body>

    <x-navbar />
    <img class='image' src="https://wp.dreamitsolution.net/multilen/multilen-transport/wp-content/uploads/2021/10/our-services-title-bg-img.jpg" alt="">
    <h1 class="l3onyawnfo9tswira">
            Contact
        </h1>
    <div class="container">

                <form action="{{ route('send.email') }}" method="post">
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


            @if(session()->has('message'))
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
    <x-footer />
</body>

</html>

