<x-layout class="bg-blue-100 text-blue-900">
    <div class=" mx-[25%] w-[50%] p-5 rounded-lg border bg-slate-50">
        <h1 class="text-xl font-bold mb-4 text-black">User Details</h1>

        <div class="">
            <p class="mb-4  pb-2 text-blue-700">
                <label for="firstname" class=" font-bold text-black">Firstname:</label>
                
                {{ $user->Firstname }}</p>
        </div><div class="">
            <p class="mb-4  pb-2 text-blue-700">
                <label for="lastname" class=" font-bold text-black">Lastname:</label>
                
                {{ $user->Lastname }}</p>
        </div>

        <div class="">
            <p class="mb-4  pb-2 text-blue-700">
                <label for="email" class=" font-bold text-black">Email:</label>
                
                {{ $user->email }}</p>
        </div>

        <div class="">
            <p class="mb-4  pb-2 text-blue-700">
                <label for="password" class=" font-bold text-black">Password:</label>
                
                {{ $user->password }}</p>
        </div>

        <div class="">
            <p class="mb-4  pb-2 text-blue-700">
                <label for="phonenumber" class=" font-bold text-black">Phone Number:</label>
                
                {{ $user->phonenumber }}</p>
        </div>

        {{-- <div class="">
            <p class="mb-4  pb-2 text-blue-700">
                <label for="adress" class=" font-bold text-black">Address:</label>
                
                {{ $user->adress }}</p>
        </div> --}}

        <div class="">
            <p class="mb-4  pb-2 text-blue-700">
                <label for="role" class=" font-bold text-black">Role:</label>
                
                {{ $user->role }}</p>
        </div>

        <a href="{{ route('admin.users.edit', $user->user_id) }}" class="btn bg-blue-600 text-white px-4 py-2 rounded inline-block">Edit User</a>
        <a href="{{ route('admin.users.index') }}"
                class=" hover:bg-slate-300 bg-blue-200 text-black py-2 font-semibold px-2 rounded "> Go back</a>
    </div>
</x-layout>
