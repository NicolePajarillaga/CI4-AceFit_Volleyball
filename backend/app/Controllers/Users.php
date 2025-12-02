<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Users extends BaseController
{
    public function index()
    {
        return view('user/landing_page');
    }

    public function login_page()
    {
        return view('auth/login_page');
    }

    public function signup_page()
    {
        return view('auth/signup_page');
    }

    public function moodboard_page()
    {
        return view('user/moodboard_page');
    }

    public function roadmap_page()
    {
        return view('user/roadmap_page');
    }
}
