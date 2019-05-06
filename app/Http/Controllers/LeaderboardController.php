<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Leaderboard;
use Illuminate\Http\Request;

class LeaderboardController extends Controller {

    /**
     * Create an instance of leaderboard controller, check that the current
     * user is authenticated unless the called method is index
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth', ['except' => 'index']);
    }

    /**
     * Show the view of the leaderboard
     *
     * @return view
     */
    public function index() {
        return view('leaderboard.index');
    }

    /**
     * Fetch all employees from the employee table, then pass it into the view
     *
     * @return view
     */
    public function create() {
        $employees = Employee::all();
        return view('leaderboard.create', compact('employees'));
    }

    /**
     * Insert the newly added leaderboard cell into the database
     *
     * @return redirect
     */
    public function store() {
        $attributes = request()->validate([
            'employee_name'      => ['required'],
            'cpo'                => ['nullable'],
            'average_order_size' => ['nullable'],
            'number_of_sales'    => ['nullable'],
        ]);

        Leaderboard::create($attributes);

        return redirect('/dashboard');
    }

    /**
     * Show the view for editing an existing cell's details
     *
     * @param  String $id
     * @return view
     */
    public function edit($id) {
        $cell = Leaderboard::where('id', $id)->first();
        return view('leaderboard.edit', compact('cell'));
    }

    /**
     * Update an existing cell's details
     *
     * @param  String $id
     * @return redirect
     */
    public function update($id) {
        $cell = Leaderboard::where('id', $id)->first();
        $cell->update(request(['employee_name', 'cpo', 'average_order_size', 'number_of_sales']));
        return redirect('/dashboard');
    }

    /**
     * Delete a cell's record from the database
     *
     * @param  String $id
     * @return redirect
     */
    public function destroy($id) {
        Leaderboard::where('id', $id)->first()->delete();
        return redirect('/dashboard');
    }
}
