<x-layout>
    <div class=" ">
        <a href="{{ route('admin.users.create') }}"
            class="ml-4 new-user-btn bg-blue-600 hover:bg-blue-900 text-white font-bold py-2 px-4 rounded">New user</a>
        <table class=" m-4 border-collapse border border-black ">
            <thead>
                <tr>
                    <th class="border border-black px-4 py-2 bg-black text-white">Firstname</th>
                    <th class="border border-black px-4 py-2 bg-black text-white">Lastname</th>
                    <th class="border border-black px-4 py-2 bg-black text-white">Email</th>
                    <th class="border border-black px-4 py-2 bg-black text-white">Password</th>
                    <th class="border border-black px-4 py-2 bg-black text-white">Phone Number</th>
                    {{-- <th class="border border-black px-4 py-2 bg-black text-white">Address</th> --}}
                    <th class="border border-black px-4 py-2 bg-black text-white">Role</th>
                    <th class="border border-black px-4 py-2 bg-black text-white">Created At</th>
                    <th class="border border-black px-4 py-2 bg-black text-white">Updated At</th>
                    <th class="border border-black px-4 py-2 bg-black text-white">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr class="bg-white hover:bg-blue-50">
                        <td class="border border-black px-4 py-2">{{ $user->Firstname }}</td>
                        <td class="border border-black px-4 py-2">{{ $user->Lastname }}</td>
                        <td class="border border-black px-4 py-2">{{ $user->email }}</td>
                        <td class="border border-black px-4 py-2">{{ $user->password }}</td>
                        <td class="border border-black px-4 py-2">{{ $user->phonenumber }}</td>
                        {{-- <td class="border border-black px-4 py-2">{{ $user->adress }}</td> --}}
                        <td class="border border-black px-4 py-2">{{ $user->role }}</td>
                        <td class="border border-black px-4 py-2">{{ $user->created_at }}</td>
                        <td class="border border-black px-4 py-2">{{ $user->updated_at }}</td>
                        <td class=" 
                        border border-black px-4 py-2">
                            <a href="{{ route('admin.users.show', $user) }}"
                                class="user-view-button hover:bg-blue-200  text-blue-600 font-bold py-1 px-2 rounded">View</a>
                            <a href="{{ route('admin.users.edit', $user) }}"
                                class="user-edit-button hover:bg-green-200 text-green-600 font-bold py-1 px-2 rounded">Edit</a>
                            <form action="{{ route('admin.users.destroy', $user) }}" method="post" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="user-delete-button hover:bg-red-200  text-red-600 font-bold py-1 px-2 rounded">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>
