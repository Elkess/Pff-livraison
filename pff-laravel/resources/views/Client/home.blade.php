<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serl</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    @vite(['resources/css/tail.css'])

    <style>
        /* navbaaaaaaaaar */
        * {
            margin: 0;
            padding: 0;
        }

        body {
            min-height: 100vh;
            background: url('laptop.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        /* body -----------------------------------------------*/

        .content {
            width: 20%;
            margin: 15px;
            box-sizing: border-box;
            float: left;
            text-align: center;
            cursor: pointer;
            box-shadow: 0 15px 28px rgba(0, 0, 0, 0.25);

        }

        .post {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            width: 100%;
            margin: 50px 0;

        }

        .img1 {
            max-width: 100%;
            height: auto;
            margin-bottom: 20px;
            margin: 0;
            padding: 0;
            border: 0;
            font: inherit;
            vertical-align: baseline;
        }

        h4 {
            font-size: 1.5rem;
            margin-bottom: 10px;
            text-align: center;
            padding-top: 20px;
        }

        p {
            font-size: 1rem;
            color: #777;
            line-height: 1.5;
            padding: 20px;
        }

        /* img ------------------------------------------------------ */
        .imaaaaaaae {
            width: 100%;
            height: 100%;
        }

        .attachment {
            margin-left: 80px;
            margin-bottom: 20px;
        }

        .l3onyawnfo9tswira {
            position: absolute;
            top: 60%;
            left: 25%;
            transform: translate(-50%, -50%);
            color: white;
            font-size: 60px;
            font-family: Arial, sans-serif;
            float: right;
        }

        .hmar {
            color: #e91e63
        }

        .tsawer3 {
            display: grid;
            grid-template-columns: auto 1fr;
            gap: 20px;
        }

        .tsawer3 .para {
            display: flex;
            flex-direction: column;
            justify-content: center;
            text-align: left;
        }

        .nnnnnn {
            margin-bottom: 10px;
            margin-left: 60px;
            font-size: 40px;
        }

        .parara {
            margin-left: 40px;
            margin-right: 60px;
            font-size: 20px;
        }

        .hmar {
            display: block;
        }

        /* body 2 -----------------------------------------------*/

        .content2 {
            width: 20%;
            margin: 15px;
            box-sizing: border-box;
            float: left;
            text-align: center;
            cursor: pointer;
            box-shadow: 0 15px 28px rgba(0, 0, 0, 0.25);

        }

        .content3 {
            width: 20%;
            margin: 15px;
            box-sizing: border-box;
            text-align: center;
            cursor: pointer;
            padding-top: 10px;
            box-shadow: 0 15px 28px rgba(0, 0, 0, 0.25);
            margin-top: 0px;
            margin-bottom: 70px;
        }

        .post1 {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            width: 100%;
            margin: 50px 0;
        }

        .c4 {
            max-width: 100%;
            height: auto;
            margin-bottom: 20px;
            margin: 0;
            padding: 0;
            border: 0;
            font: inherit;
            vertical-align: baseline;
            margin-top: 30px;
        }

        .c2 {
            font-size: 1.5rem;
            margin-bottom: 10px;
            text-align: center;
            padding-top: 20px;
        }

        .c3 {
            font-size: 1rem;
            color: #777;
            line-height: 1.5;
            margin-bottom: 10px;
        }

        h3 {
            text-align: center;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <x-ClientNavbar />


    <div class="relative h-screen bg-cover bg-center" style="background-image: url('https://wp.dreamitsolution.net/multilen/multilen-transport/wp-content/uploads/2021/10/transport-.jpg');">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="relative z-10 flex flex-col items-center justify-center h-full text-center text-white p-4">
            <h1 class="text-4xl md:text-6xl font-bold">
                Best
                <br>
                <span class="text-blue-500">Transport</span>
                Services Ever
            </h1>
            <h4 class="">
                <a class="text-blue-600 font-semibold bg-white py-1 px-8 rounded-full hover:bg-slate-50 hover:text-blue-500 hover:ml-1" href="{{ route('auth.signup') }}">Order</a>
            </h4>
        </div>
    </div>

    <div class="post">
        <div class='content'>
            <img class="img1"
                src="https://tst.ma/wp-content/uploads/bfi_thumb/Sans-titre-2022-05-30T101954.194-pql9gxdddd86i4lzesm2v5dlnopaimk50ntddfpt2o.png"
                alt="">
            <h4>Nos Frets</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus veniam voluptatum adipisci voluptate,</p>
        </div>
        <div class='content'>
            <img class="img1"
                src="https://tst.ma/wp-content/uploads/bfi_thumb/Sans-titre-2022-05-30T101915.363-pql9h06vxvc1gyhvybtykmnzfube5pvc11rtt9lmk0.png"
                alt="">
            <h4>Transit</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus veniam voluptatum adipisci voluptate,
            </p>
        </div>
        <div class='content'>
            <img class="img1"
                src="https://tst.ma/wp-content/uploads/bfi_thumb/Sans-titre-2022-05-30T101812.493-pql9h14q4pdbskgisu8l54fg186rdez2d6fbajk8ds.png"
                alt="">
            <h4>Logistique</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus veniam voluptatum adipisci voluptate,
            </p>
        </div>
    </div>

    <h3 class='name'>NOS CHIFFRES CLÉS</h3>

    <div class='post1'>
        <div class='content2'>
            <img class='c4'
                src="https://tst.ma/wp-content/uploads/bfi_thumb/icons8-aeroport-100-pql9bfz6c4w21wbyzsqiwre9ytqtqi2xwoefx579ig.png"
                alt="">
            <h4 class='c2'>7839</h4>
            <p class='c3'>TONNES DE MARCHANDISES <br> PAR AN (AERIEN)</p>
        </div>

        <div class='content3'>
            <img class='c4'
                src="https://tst.ma/wp-content/uploads/bfi_thumb/icons8-transport-maritime-100-pql9bgx0iyxcdialub55h95qk7m6y76o8t1xef5vc8.png"
                alt="">
            <h4 class='c2'>5782</h4>
            <p class='c3'>(MARITIME)/TEU ET ROUTIER</p>
        </div>

        <div class='content2'>
            <img class='c4'
                src="https://tst.ma/wp-content/uploads/bfi_thumb/icons8-parametres-de-la-boite-100-pql9bgx0iyxcdialub55h95qk7m6y76o8t1xef5vc8.png"
                alt="">
            <h4 class='c2'>20500 M²</h4>
            <p class='c3'>(ENTREPÔTS) DÉDIÉS AU <br> STOCKAGE</p>
        </div>

        <div class='content3'>
            <img class='c4'
                src="https://tst.ma/wp-content/uploads/bfi_thumb/icons8-douane-100-pql9bgx0iyxcdialub55h95qk7m6y76o8t1xef5vc8.png"
                alt="">
            <h4 class='c2'>30</h4>
            <p class='c3'>EXPERTS EN DOUANE</p>
        </div>
    </div>


    <div class="tsawer3">
        <img fetchpriority="high" decoding="async" width="685" height="680"
            src="https://wp.dreamitsolution.net/multilen/multilen-transport/wp-content/uploads/2021/10/transport-2-1.png"
            class="attachment" alt
            srcset="https://wp.dreamitsolution.net/multilen/multilen-transport/wp-content/uploads/2021/10/transport-2-1.png 685w,
    https://wp.dreamitsolution.net/multilen/multilen-transport/wp-content/uploads/2021/10/transport-2-1-300x298.png 300w,
    https://wp.dreamitsolution.net/multilen/multilen-transport/wp-content/uploads/2021/10/transport-2-1-150x150.png 150w,
    https://wp.dreamitsolution.net/multilen/multilen-transport/wp-content/uploads/2021/10/transport-2-1-106x106.png 106w,
    https://wp.dreamitsolution.net/multilen/multilen-transport/wp-content/uploads/2021/10/transport-2-1-80x80.png 80w"
            sizes="(max-width: 685px) 100vw, 685px">
        <div class='para'>
            <h1 class="nnnnnn">
                The Best transport & <span class="hmar">Logistics services</span>
                ever seen.
            </h1>
            <p class='parara'>When we talk about 'smart transportation,' it is more than moving cargo from A to B.
                Digitization within transport and logistics means seamless service to our customers, visibility in the
                supply chain, and driving a more efficient business.</p>
        </div>
    </div>

    <x-ClientFooter />

</body>

</html>
