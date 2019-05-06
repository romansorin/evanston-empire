<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller {

    /**
     * Create an instance of employee controller, check that the current user
     * is authenticated
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Show the view for editing the currently authenticated user's details
     *
     * @return view
     */
    public function edit() {
        $user = auth()->user();
        return view('auth.dashboard.settings', compact('user'));
    }

    /**
     * Update the currently authenticated user's details
     *
     * @return view
     */
    public function update() {
        auth()->user()->update(request(['name', 'username', 'email']));
        return view('auth.dashboard.settings');
    }

    /**
     * Delete the currently authenticated user's record from the database
     *
     * @return redirect
     */
    public function destroy() {
        $id = auth()->user()->id;

        Auth::logout(); // Need to log the user out before deleting their record, or else the record will not delete

        User::where('id', $id)->first()->delete();

        return redirect('/');
    }
}
