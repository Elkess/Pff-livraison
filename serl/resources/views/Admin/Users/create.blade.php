<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <style>
        /* CSS for create.blade.php */
        .form-container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }

        .form-container h1 {
            text-align: center;
        }

        .form-container label {
            margin-bottom: 5px;
            display: block;
        }

        .form-container input[type="text"],
        .form-container input[type="email"],
        .form-container input[type="password"],
        .form-container select {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
        }

        .form-container button {
            width: 100%;
            padding: 10px;
            background-color: #4caf50;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .form-container button:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <div class="form-container">
        <h1>Create User</h1>

        <form method="POST" action="{{ route('admin.users.store') }}">
            @csrf
            <label for="name">Name:</label><br>
            <input type="text" id="name" name="name"><br>

            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email"><br>

            <label for="password">Password:</label><br>
            <input type="password" id="password" name="password"><br>

            <label for="phoneNumber">Phone Number:</label><br>
            <input type="text" id="phoneNumber" name="phoneNumber"><br>

            <label for="adress">Address:</label><br>
            <input type="text" id="adress" name="adress"><br>

            <label for="role">Role:</label><br>
            <select name="role" id="role">
                <option value="Admin">Admin</option>
                <option value="Driver">Driver</option>
                <option value="Client">Client</option>
            </select><br>

            <button type="submit">Create User</button>
        </form>
    </div>
</body>

</html>
