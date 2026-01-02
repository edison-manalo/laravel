<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    $jobs = Job::with('employer')->latest()->simplePaginate(5);

    return view('jobs.index', [
        'jobs' => $jobs
    ]);
});

Route::get('/jobs/create', function () {
    return view('jobs.create');
});

Route::get('/jobs/{job}', function (Job $job) {
    return view('jobs.show', [
        'job' => $job
    ]);
});

Route::post('/jobs', function () {
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required']
    ]);

    Job::create([
        'employer_id' => 1,
        'title' => request('title'),
        'salary' => request('salary')
    ]);

    return redirect('/jobs');
});

Route::get('/jobs/{job}/edit', function (Job $job) {
    return view('jobs.edit', [
        'job' => $job
    ]);
});

Route::patch('/jobs/{job}', function (Job $job) {
    // Authorize (TODO)

    // Validate
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required']
    ]);

    $job->update([
        'title' => request('title'),
        'salary' => request('salary')
    ]);

    // Redirect
    return redirect('/jobs/' . $job->id);
});

Route::delete('/jobs/{job}', function (Job $job) {
    // Authorize (TODO)

    // Delete
    $job->delete();

    // Redirect
    return redirect('/jobs');
});

Route::get('/contact', function () {
    return view('contact');
});