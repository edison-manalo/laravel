<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home');

/*
Route::controller(JobController::class)->group(function () {
    Route::get('/jobs', 'index');
    Route::get('/jobs/create', 'create');
    Route::get('/jobs/{job}', 'show');
    Route::post('/jobs', 'store');
    Route::get('/jobs/{job}/edit', 'edit');
    Route::patch('/jobs/{job}', 'update');
    Route::delete('/jobs/{job}', 'destroy');
});
*/

/*
 * Often you don't need to generate or register all seven resourceful routes,
 * so you can pass an array as third item
 * 
 * ['only' => ['index', 'show', 'create', 'store']]
 * ['except' => ['edit']]
*/
Route::resource('jobs', JobController::class);

Route::view('/contact', 'contact');