<x-layout>
    <div class="user-container">
        <a href={{route('admin.users.create')}} class="new-user-btn">New user</a>
        <table class="user-body">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Phone Number</th>
                    <th>Address</th>
                    <th>Role</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->password }}</td>
                        <td>{{ $user->phoneNumber }}</td>
                        <td>{{ $user->adress }}</td>
                        <td>{{ $user->role }}</td>
                        <td>{{ $user->created_at }}</td>
                        <td>{{ $user->updated_at }}</td>
                        <td class="user-buttons">
                            <a href={{route('admin.users.show',$user)}} class="user-view-button">View</a>
                            <a href={{route('admin.users.edit',$user)}} class="user-edit-button">Edit</a>
                            <form action={{route('admin.users.destroy',$user)}} method="post">
                                @csrf
                                @method('DELETE')
                                <button class="user-delete-button">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>
