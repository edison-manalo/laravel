<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::with('employer')->latest()->simplePaginate(5);

        return view('jobs.index', [
            'jobs' => $jobs
        ]);
    }

    public function create()
    {
        return view('jobs.create');
    }

    public function show(Job $job)
    {
        return view('jobs.show', [
            'job' => $job
        ]);
    }

    public function store()
    {
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
    }

    public function edit(Job $job)
    {
        /** 
         * Runs the logic (Gate::define(...)) associated with the name referenced "edit-job",
         * if it fails or return false, laravel automatically aborts with a 403.
         * 
         * But we can run either of these two to manually handle the response:
         * if (Gate::allows(...)) {...}
         * if (Gate::denies(...)) {...}
         */
        Gate::authorize('edit-job', $job);

        return view('jobs.edit', [
            'job' => $job
        ]);
    }

    public function update(Job $job)
    {
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
    }

    public function destroy(Job $job)
    {
        // Authorize (TODO)

        // Delete
        $job->delete();

        // Redirect
        return redirect('/jobs');
    }
}
