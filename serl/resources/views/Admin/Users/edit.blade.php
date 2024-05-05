<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <style>
        /* CSS for edit.blade.php */
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
        <h1>Edit User</h1>

        <form method="POST" action="{{ route('admin.users.update', $user->id) }}">
            @csrf
            @method('PUT')

            <label for="name">Name:</label><br>
            <input type="text" id="name" name="name" value="{{ $user->name }}"><br>

            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" value="{{ $user->email }}"><br>

            <label for="phoneNumber">Phone Number:</label><br>
            <input type="text" id="phoneNumber" name="phoneNumber" value="{{ $user->phoneNumber }}"><br>

            <label for="adress">Address:</label><br>
            <input type="text" id="adress" name="adress" value="{{ $user->adress }}"><br>

            <label for="role">Role:</label><br>
            <select name="role" id="role">
                <option value="Admin" {{ $user->role == 'Admin' ? 'selected' : '' }}>Admin</option>
                <option value="Driver" {{ $user->role == 'Driver' ? 'selected' : '' }}>Driver</option>
                <option value="Client" {{ $user->role == 'Client' ? 'selected' : '' }}>Client</option>
            </select><br>

            <button type="submit">Update User</button>
        </form>
    </div>
</body>

</html>
