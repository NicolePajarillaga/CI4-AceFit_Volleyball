<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Users extends BaseController
{
    public function index(): string
    {
        return view('user/landing_page');
    }

    public function login_page(): string
    {
        return view('user/login_page');
    }

    public function signup_page(): string
    {
        return view('user/signup_page');
    }

    public function moodboard_page(): string
    {
        return view('user/moodboard_page');
    }

    public function roadmap_page(): string
    {
        return view('user/roadmap_page');
    }
}
