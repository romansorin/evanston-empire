<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Leaderboard;

class DashboardController extends Controller {
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Fetch all leaderboard cells from the table, then pass it into the view
     * with pagination for every 15 records
     *
     * @return view
     */
    public function index() {
        $cells = Leaderboard::orderBy('cpo', 'desc')->simplePaginate(15);
        return view('auth.dashboard.index', compact('cells'));
    }
}
