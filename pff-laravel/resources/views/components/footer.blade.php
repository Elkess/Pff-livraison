<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Improved Footer</title>
    <style>
        .footer {
            background-color: #343a40; /* Dark background */
            color: #f8f9fa; /* Light text */
            text-align: center;
            padding: 20px 0;
            position: fixed;
            width: 100%;
            bottom: 0;
            box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.1); /* Subtle shadow for depth */
        }
        .footer .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }
        .footer span {
            font-size: 1em;
            font-weight: 300;
        }
        .footer a {
            color: #f8f9fa;
            text-decoration: none;
            margin-left: 15px;
            font-weight: 500;
            transition: color 0.3s ease;
        }
        .footer a:hover {
            color: #adb5bd; /* Lighter color on hover */
        }
    </style>
</head>
<body>
    <div class="footer">
        <div class="container">
            <span>&copy; 2024 ISTICG</span>
            <a href="https://en.wikipedia.org/wiki/Privacy_policy">Privacy Policy</a>
            <a href="https://en.wikipedia.org/wiki/Terms_of_service#:~:text=Terms%20of%20service%20(also%20known,wants%20to%20use%20that%20service.">Terms of Service</a>
            <a href="/email">Contact Us</a>
        </div>
    </div>
</body>
</html>
