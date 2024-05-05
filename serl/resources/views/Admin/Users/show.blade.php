<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show User</title>
    <style>
        /* CSS for show.blade.php */
        .user-details {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }

        .user-details h1 {
            text-align: center;
        }

        .user-details label {
            margin-bottom: 5px;
            display: block;
            font-weight: bold;
        }

        .user-details p {
            margin-bottom: 10px;
        }

        .user-details .btn {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #4caf50;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            text-align: center;
            transition: background-color 0.3s;
            text-decoration: none;
        }

        .user-details .btn:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <div class="user-details">
        <h1>User Details</h1>

        <label for="name">Name:</label>
        <p>{{ $user->name }}</p>

        <label for="email">Email:</label>
        <p>{{ $user->email }}</p>

        <label for="phoneNumber">Phone Number:</label>
        <p>{{ $user->phoneNumber }}</p>

        <label for="adress">Address:</label>
        <p>{{ $user->adress }}</p>

        <label for="role">Role:</label>
        <p>{{ $user->role }}</p>

        <a href="{{ route('admin.users.edit', $user->id) }}" class="btn">Edit User</a>
    </div>
</body>

</html>
