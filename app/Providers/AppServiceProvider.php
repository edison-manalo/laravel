<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;

use App\Models\User;
use App\Models\Job;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Model::preventLazyLoading();

        // Paginator::useBootstrapFive();

        /**
         * See if the user is the same as the user who is currently signed in
         * 
         * The "User" object that laravel passes into this closure,
         * will always reference the currently authenticated user.
         * 
         * When the user is a guest, not signed in. The gate will always
         * fail, it doesn't hitting the return logic, it immediately returns falls.
         * 
         * We could fix it to allow triggering the return logic, by using either of these two:
         * (User $user = null, ...) = Setting the user to null
         * (? User $user, ...)      = Make the type optional
         */
        Gate::define('edit-job', function (User $user, Job $job) {
            return $job->employer->user->is($user);
        });
    }
}
