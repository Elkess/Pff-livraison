<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=User::all();
        return view('admin.users.index',['users'=>$users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = ['admin', 'client', 'driver'];
        return view('admin.users.create',['roles'=>$roles]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'Firstname' => 'required|string|max:255',
            'Lastname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            'phonenumber' => 'required|string|max:20',
            'role' => 'required|string|in:Admin,Driver,Client',
        ]);
        
// dd($validatedData);
        // Create the user
        $user =User::create([
            'Firstname' => $validatedData['Firstname'],
            'Lastname' => $validatedData['Lastname'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
            'phonenumber' => $validatedData['phonenumber'],
            'role' => $validatedData['role'],
        ]);

        // Redirect to a specified route with flash message
        return to_route('admin.users.index')->with('success', 'User created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('admin.users.show',['user'=>$user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('admin.users.edit',['user'=>$user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        // Validate the request data
    try {
            $validatedData = $request->validate([
            'Firstname' => 'required|string|max:255',
            'Lastname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|
            ',
            'password' => 'required|string|min:8',
            'phonenumber' => 'required|string|max:20',
            'role' => 'required|string|in:Admin,Driver,Client',
        ]);

    } catch (\Exception $th) {
        dd($th);
    }
        // Create the user
        $user->update([
            'Firstname' => $validatedData['Firstname'],
            'Lastname' => $validatedData['Lastname'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
            'phonenumber' => $validatedData['phonenumber'],
            'role' => $validatedData['role'],
        ]);


        return to_route('admin.users.show',$user)->with('message','User was updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();

        return to_route('admin.users.index')->with('message','User was deleted');
    }
}