<?php

namespace App\Http\Controllers;

use App\Leaderboard;
use Illuminate\Http\Request;

class LeaderboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => 'index']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('leaderboard.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('leaderboard.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Leaderboard::create($request->all());

        return view('leaderboard.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Leaderboard  $leaderboard
     * @return \Illuminate\Http\Response
     */
    public function show(Leaderboard $leaderboard)
    {
        return view('leaderboard.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Leaderboard  $leaderboard
     * @return \Illuminate\Http\Response
     */
    public function edit(Leaderboard $leaderboard)
    {
        return view('leaderboard.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Leaderboard  $leaderboard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Leaderboard $leaderboard)
    {
        return view('leaderboard.show');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Leaderboard  $leaderboard
     * @return \Illuminate\Http\Response
     */
    public function destroy(Leaderboard $leaderboard)
    {
        return view('leaderboard.index');
    }
}
