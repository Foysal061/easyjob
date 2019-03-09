<?php

Route::get('/', function () {
    return view('index');
});
Route::get('/add-job', function () {
    return view('add-job');
});
Route::get('/add-resume', function () {
    return view('add-resume');
});
Route::get('/browse-categories', function () {
    return view('browse-categories');
});
Route::get('/browse-jobs', function () {
    return view('browse-jobs');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/job-alerts', function () {
    return view('job-alerts');
});
Route::get('/job-page', function () {
    return view('job-page');
});
Route::get('/manage-applications', function () {
    return view('manage-applications');
});
Route::get('/manage-jobs', function () {
    return view('manage-jobs');
});
Route::get('/manage-resumes', function () {
    return view('manage-resumes');
});
Route::get('/my-account', 'Auth\RegisterController@create');

Route::post('/my-account', 'Auth\RegisterController@store');

Route::get('/resume-page', function () {
    return view('resume-page');
});
Route::get('/logout', 'Auth\LoginController@logout');

Route::post('/login', 'Auth\LoginController@login');

Route::get('/home', 'HomeController@index')->name('home');
Auth::routes(['verify' => true]);