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

    public function index()
    {
        $leaderboard = Leaderboard::simplePaginate(15);
        return view('leaderboard.index', compact('leaderboard'));
    }

    public function create()
    {
        return view('leaderboard.create');
    }


    public function store(Request $request)
    {
        Leaderboard::create($request->all());

        return view('leaderboard.index');
    }

    public function edit(Leaderboard $leaderboard)
    {
        return view('leaderboard.edit');
    }

    public function update(Request $request, Leaderboard $leaderboard)
    {
        return view('leaderboard.show');
    }

    public function destroy(Leaderboard $leaderboard)
    {
        return view('leaderboard.index');
    }
}
