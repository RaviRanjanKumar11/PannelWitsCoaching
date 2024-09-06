<?php
namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use App\Models\Student;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        // Share the authenticated user with all views
        View::composer('*', function ($view) {
            $view->with('authUser', Auth::user());
        });

        // Share the student data with the header view
        View::composer('layouts.header', function ($view) {
            $user = Auth::user();
            $student = $user ? Student::where('email', $user->email)->first() : null;
            $view->with('student', $student);
        });
    }
}

