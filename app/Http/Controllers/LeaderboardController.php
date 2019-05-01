<?php

namespace App\Http\Controllers;

use App\Leaderboard;
use Illuminate\Http\Request;

class LeaderboardController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', ['except' => 'index']);
    }

    // Return listing of all leaderboard entries
    public function index()
    {
        $leaderboard = Leaderboard::simplePaginate(15);
        return view('leaderboard.index', compact('leaderboard'));
    }

    // Add new cell to leaderboard
    public function create()
    {
        return view('leaderboard.create');
    }


    public function store(Request $request)
    {
        Leaderboard::create($request->all());

        return view('leaderboard.index');
    }

    // Edit existing leaderboard cell
    public function edit(Leaderboard $leaderboard)
    {
        return view('leaderboard.edit');
    }

    public function update(Request $request, Leaderboard $leaderboard)
    {
        return view('leaderboard.index');
    }

    // Delete leaderboard cell
    public function destroy(Leaderboard $leaderboard)
    {
        return view('leaderboard.index');
    }
}
