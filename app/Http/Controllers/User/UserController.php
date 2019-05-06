<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller {

    /**
     * Create an instance of user controller, check that the current user
     * is authenticated
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Fetch all users from the table, then pass it into the view with
     * pagination for every 15 records
     *
     * @return view
     */
    public function index() {
        $users = User::simplePaginate(15);
        return view('users.index', compact('users'));
    }

    /**
     * Show the view for editing an existing user's details
     *
     * @param  String $username
     * @return view
     */
    public function edit($username) {
        $user = User::where('username', $username)->first();
        return view('users.edit', compact('user'));
    }

    /**
     * Update an existing user's details
     *
     * @param  String $id
     * @return redirect
     */
    public function update($id) {
        $user = User::where('id', $id)->first();

        // Check if the email or username was changed, then validate that the inputs are unique
        if (request()->email !== $user->email) {
            request()->validate(['email' => ['unique:users']]);
        }
        if (request()->username !== $user->username) {
            request()->validate(['username' => ['unique:users']]);
        }

        // Then run the rest of the inputs through validation, and check the rest of attributes for email & username
        $attributes = request()->validate([
            'name'     => ['required', 'string', 'max:255'],
            'email'    => ['required', 'string', 'email', 'max:255'],
            'username' => ['required', 'string', 'max:255'],
        ]);

        $user->update(request(['name', 'email', 'username']));

        return redirect('/dashboard/users');
    }

    /**
     * Delete a user's record from the database
     *
     * @param  String $username
     * @return redirect
     */
    public function destroy($username) {
        User::where('username', $username)->first()->delete();
        return redirect('/dashboard/users');
    }
}
