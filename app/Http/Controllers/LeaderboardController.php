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
        $cells = Leaderboard::simplePaginate(15);
        return view('leaderboard.index', compact('cells'));
    }

    // Add new cell to leaderboard
    public function create()
    {
        return view('leaderboard.create');
    }


    public function store()
    {
        $attributes = request()->validate([
            'employee_name' =>  ['required'], // this needs to connect to an existing employee.
            'cpo' => ['nullable'],
            'average_order_size' => ['nullable'],
            'number_of_sales' => ['nullable']
        ]);

        Leaderboard::create($attributes);

        return view('leaderboard.index');
    }

    // Edit existing leaderboard cell
    public function edit($id)
    {
        $cell = Leaderboard::where('id', $id)->first();
        return view('leaderboard.edit', compact('cell'));
    }

    public function update($id)
    {
        $cell = Leaderboard::where('id', $id)->first();
        $cell->update(request(['employee_name', 'cpo', 'average_order_size', 'number_of_sales']));
        return view('leaderboard.index');
    }

    // Delete leaderboard cell
    public function destroy($id)
    {
        Leaderboard::where('id', $id)->first()->delete();
        return view('leaderboard.index');
    }
}
