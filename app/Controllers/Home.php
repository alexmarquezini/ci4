<?php

namespace App\Controllers;

use Inertia\Inertia;

class Home extends BaseController
{
    public function index(): string
    {

        if (auth()->loggedIn()) {
            Inertia::share('user', service('auth')->user());
        }


        return Inertia::render('Hello', [
            'title' => 'Home',
            'description' => 'This is the home page of the application.',
        ]);
    }
}
