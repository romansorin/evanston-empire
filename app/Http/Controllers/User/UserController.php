<?php

namespace App\Http\Controllers\User;

use App\User;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // Return list of all users
    public function index()
    {
        $users = User::simplePaginate(15);
        return view('users.index', compact('users'));
    }

    // Edit the details of an existing user
    public function edit($username)
    {
        $user = User::where('username', $username)->first();
        return view('users.edit', compact('user'));
    }

    public function update($username)
    {
        $user = User::where('username', $username)->first();

        // $attributes = request()->validate([
        //     'name' => ['required', 'string', 'max:255'],
        //     'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        //     'username' => ['required', 'string', 'max:255', 'unique:users']
        // ]);

        $user->update(request(['name', 'email', 'username']));

        return redirect('/dashboard/users');
    }

    // Delete a user
    public function destroy($username)
    {
        User::where('username', $username)->first()->delete();
        return redirect('/dashboard/users');
    }
}
