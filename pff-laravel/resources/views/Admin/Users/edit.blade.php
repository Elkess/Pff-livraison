<x-layout class="bg-dcf4ff">
    <div class="form-container bg-white p-8 rounded-lg shadow-lg">
        <h1 class="text-3xl font-bold mb-6">Edit User</h1>

        @foreach ($errors->all() as $error)
            <div class="error-message">{{ $error }}</div>
        @endforeach

        <form method="POST" action="{{ route('admin.users.update', $user->user_id) }}" class="space-y-4">
            @csrf
            @method('PUT')

            <br>
            <label for="firstname" class="text-xl">Firstname:</label>

            <input type="text" id="Firstname" name="Firstname" value="{{ old('Firstname', $user->Firstname) }}"
                class="border rounded-md p-1 hover:text-blue-600">
            @error('Firstname')
                <div class="error-message">{{ $message }}</div>
            @enderror

            <br>
            <label for="Lastname" class="text-xl">Lastname:</label>

            <input type="text" id="Lastname" name="Lastname" value="{{ old('Lastname', $user->Lastname) }}"
                class="border rounded-md p-1 hover:text-blue-600">
            @error('Lastname')
                <div class="error-message">{{ $message }}</div>
            @enderror

            <br>
            <label for="email" class="text-xl">Email:</label>

            <input type="email" id="email" name="email" value="{{ old('email', $user->email) }}"
                class="border rounded-md p-1 hover:text-blue-600">
            @error('email')
                <div class="error-message">{{ $message }}</div>
            @enderror

            <br>
            <label for="password" class="text-xl">Password:</label>

            <input type="text" id="password" name="password" value="{{ old('password', $user->password) }}"
                class="border rounded-md p-1 hover:text-blue-600">
            @error('password')
                <div class="error-message">{{ $message }}</div>
            @enderror

            <br>
            <label for="phonenumber" class="text-xl">Phone Number:</label>

            <input type="text" id="phonenumber" name="phonenumber"
                value="{{ old('phonenumber', $user->phonenumber) }}" class="border rounded-md p-1 hover:text-blue-600">
            @error('phonenumber')
                <div class="error-message">{{ $message }}</div>
            @enderror

            <br>
            {{-- <label for="adress" class="text-xl">Address:</label>

            <input type="text" id="adress" name="adress" value="{{ old('adress', $user->adress) }}"
                class="border rounded-md p-1 hover:text-blue-600">
            @error('adress')
                <div class="error-message">{{ $message }}</div>
            @enderror

            <br> --}}
            <label for="role" class="text-xl">Role:</label>
            <select name="role" id="role" class="border rounded-md p-1 hover:text-blue-600">
                <option value="Admin" {{ old('role', $user->role) == 'Admin' ? 'selected' : '' }}>Admin</option>
                <option value="Driver" {{ old('role', $user->role) == 'Driver' ? 'selected' : '' }}>Driver</option>
                <option value="Client" {{ old('role', $user->role) == 'Client' ? 'selected' : '' }}>Client</option>
            </select>
            @error('role')
                <div class="error-message">{{ $message }}</div>
            @enderror
            <br><br>
            <button type="submit" class=" bg-blue-600 hover:bg-0008eb text-white font-bold py-2 px-4 rounded">Update
                User</button>
        </form>
    </div>
</x-layout>
