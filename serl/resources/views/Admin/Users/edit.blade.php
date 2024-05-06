<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <style>
        /* CSS for Edit User page */
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
        }

        .form-container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"],
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
        }

        select {
            height: 40px;
        }

        .error-message {
            color: #ff0000;
            margin-top: 5px;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="form-container">
        <h1>Edit User</h1>

        @foreach ($errors->all() as $error)
        <div class="error-message">{{ $error }}</div>
        @endforeach

        <form method="POST" action="{{ route('admin.users.update', $user->id) }}">
            @csrf
            @method('PUT')

            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="{{ old('name', $user->name) }}">
            @error('name')
            <div class="error-message">{{ $message }}</div>
            @enderror

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="{{ old('email', $user->email) }}">
            @error('email')
            <div class="error-message">{{ $message }}</div>
            @enderror

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" value="{{ old('password') }}">
            @error('password')
            <div class="error-message">{{ $message }}</div>
            @enderror

            <label for="phoneNumber">Phone Number:</label>
            <input type="text" id="phoneNumber" name="phoneNumber" value="{{ old('phoneNumber', $user->phoneNumber) }}">
            @error('phoneNumber')
            <div class="error-message">{{ $message }}</div>
            @enderror

            <label for="adress">Address:</label>
            <input type="text" id="adress" name="adress" value="{{ old('adress', $user->adress) }}">
            @error('adress')
            <div class="error-message">{{ $message }}</div>
            @enderror

            <label for="role">Role:</label>
            <select name="role" id="role">
                <option value="Admin" {{ old('role', $user->role) == 'Admin' ? 'selected' : '' }}>Admin</option>
                <option value="Driver" {{ old('role', $user->role) == 'Driver' ? 'selected' : '' }}>Driver</option>
                <option value="Client" {{ old('role', $user->role) == 'Client' ? 'selected' : '' }}>Client</option>
            </select>
            @error('role')
            <div class="error-message">{{ $message }}</div>
            @enderror

            <button type="submit">Update User</button>
        </form>
    </div>
</body>

</html>
