<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>

</head>

<body>
    <div class="form-container">
        <h1>Edit User</h1>


          @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach

        <form method="POST" action="{{ route('admin.users.update', $user->id) }}">
            @csrf
            @method('PUT')

            <label for="name">Name:</label><br>
            <input type="text" id="name" name="name" value="{{ old('name', $user->name) }}">
            @error('name')
            <div class="error-message">{{ $message }}</div>
            @enderror<br>

            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" value="{{ old('email', $user->email) }}">
            @error('email')
            <div class="error-message">{{ $message }}</div>
            @enderror<br>

            <label for="password">Password:</label><br>
            <input type="password" id="password" name="password" value="{{ old('password') }}">
            @error('password')
            <div class="error-message">{{ $message }}</div>
            @enderror<br>

            <label for="phoneNumber">Phone Number:</label><br>
            <input type="text" id="phoneNumber" name="phoneNumber" value="{{ old('phoneNumber', $user->phoneNumber) }}">
            @error('phoneNumber')
            <div class="error-message">{{ $message }}</div>
            @enderror<br>

            <label for="adress">Address:</label><br>
            <input type="text" id="adress" name="adress" value="{{ old('adress', $user->adress) }}">
            @error('adress')
            <div class="error-message">{{ $message }}</div>
            @enderror<br>

            <label for="role">Role:</label><br>
            <select name="role" id="role">
                <option value="Admin" {{ old('role', $user->role) == 'Admin' ? 'selected' : '' }}>Admin</option>
                <option value="Driver" {{ old('role', $user->role) == 'Driver' ? 'selected' : '' }}>Driver</option>
                <option value="Client" {{ old('role', $user->role) == 'Client' ? 'selected' : '' }}>Client</option>
            </select>
            @error('role')
            <div class="error-message">{{ $message }}</div>
            @enderror<br>

            <button type="submit">Update User</button>
        </form>
    </div>
</body>

</html>
