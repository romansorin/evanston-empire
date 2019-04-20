<?php

///////////////////
// Public Routes //
///////////////////
Route::get('/', function () {
    return view('welcome');
});
Route::get('apply', function () {
	return view('apply');
});
Route::get('gallery', function () {
	return view('gallery');
});
Route::get('meet-the-team', function () {
	return view('team');
});

/**
 * Even though the route and view seem mismatched, the requested public facing URI is what-we-do. It 
 * contains both the about and 'what we do' content
 */
Route::get('what-we-do', function () {
	return view('about');
});

///////////////
// Redirects //
///////////////
Route::get('about', function () {
	return redirect('what-we-do');
});

/**
 * The contact redirects to apply since apply holds a form and contact information on its own
 */
Route::get('contact', function () {
	return redirect('apply');
});

////////////////////
// Private Routes //
////////////////////
Auth::routes();
Route::prefix('dashboard')->group(function () {
   Route::get('/', 'DashboardController@index');
   Route::resource('leaderboard', 'LeaderboardController');
});
