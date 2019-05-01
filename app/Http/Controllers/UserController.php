<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }

    // Return list of all users
    public function index()
    {
        return view('users.index');
    }

    // Create a new user
    public function create()
    {
        return view('users.create');
    }

    public function store()
    {
 
        return view('users.index');
    }

    // Edit the details of an existing user
    public function edit()
    {

        return view('users.edit');
    }

    public function update()
    {
        return redirect('/dashboard/users');
    }

    // Delete a user
    public function destroy()
    {
        return redirect('/dashboard/users');
    }
}
