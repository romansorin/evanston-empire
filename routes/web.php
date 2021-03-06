<?php

///////////////////
// Public Routes //
///////////////////
Route::get('/', function () {
    return view('pages.welcome');
});
Route::get('apply', function () {
    return view('pages.apply');
});
Route::get('gallery', function () {
    $images = App\Image::where('image_description', 'gallery')->get();
    return view('pages.gallery', compact('images'));
});
Route::get('meet-the-team', function () {
    return view('pages.team');
});
Route::get('faq', function () {
    return view('pages.faq');
});
Route::post('contact', 'ContactController@store');

/**
 * Even though the route and view seem mismatched, the requested public facing URI is what-we-do. It
 * contains both the about and 'what we do' content
 */
Route::get('what-we-do', function () {
    return view('pages.about');
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
    Route::get('/', 'Auth\DashboardController@index');
    Route::namespace('User')->group(function () {
        Route::get('settings', 'ProfileController@edit');
        Route::put('settings', 'ProfileController@update');
        Route::delete('settings', 'ProfileController@destroy');
        Route::resource('employees', 'EmployeeController')->except(['show']);
        Route::resource('users', 'UserController')->except(['show', 'store', 'create']);
    });
    Route::resource('leaderboard', 'LeaderboardController')->except(['show']);
    Route::resource('images', 'ImageController')->except(['show']);
});
