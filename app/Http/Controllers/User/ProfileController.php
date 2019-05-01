<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function edit()
    {
        $user = auth()->user();
        return view('auth.dashboard.settings', compact('user'));
    }
    public function update()
    {
        auth()->user()->update(request(['name', 'username', 'password', 'email']));
        return view('auth.dashboard.settings');
    }

    public function destroy() {
        auth()->user()->destroy();
        return view('pages.welcome');
    }
}
