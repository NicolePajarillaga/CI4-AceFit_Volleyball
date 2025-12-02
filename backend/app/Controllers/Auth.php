<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsersModel;

class Auth extends BaseController
{
    /**
     * Show Login Page
     */
    public function login_page()
    {
        $session = session();

        $errors = $session->getFlashdata('errors') ?? [];
        $old = $session->getFlashdata('old') ?? [];

        return view('auth/login_page', ['errors' => $errors, 'old' => $old]);
    }

    /**
     * Login User
     */
    public function login()
    {
        $request = service('request');
        $session = session();

        $validation = \Config\Services::validation();
        $validation->setRule('email', 'Email', 'required|valid_email');
        $validation->setRule('password', 'Password', 'required');

        $post = $request->getPost();

        // Validation fail
        if (! $validation->run($post)) {
            $session->setFlashdata('errors', $validation->getErrors());
            $session->setFlashdata('old', $post);
            return redirect()->back()->withInput();
        }

        $userModel = new UsersModel();
        $email = trim($post['email']);

        /** @var \App\Entities\User|null $user */
        $user = $userModel->where('email', $email)->first();

        if (!$user) {
            $session->setFlashdata('errors', ['email' => 'Invalid email or password']);
            return redirect()->back()->withInput();
        }

        // Password mismatch
        if (! password_verify($post['password'], $user->password_hash)) {
            $session->setFlashdata('errors', ['password' => 'Incorrect password']);
            return redirect()->back()->withInput();
        }

        // SAVE SESSION
        $session->set('user', [
            'id'         => $user->id,
            'email'      => $user->email,
            'first_name' => $user->first_name,
            'last_name'  => $user->last_name,
            'type'       => strtolower($user->type),
        ]);

        // REDIRECT BASED ON ROLE
        if ($user->type === 'admin') {
            return redirect()->to('/admin/dashboard_page');
        }

        return redirect()->to('/');
    }

    /**
     * Logout
     */
    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }

    /**
     * Show Signup Page
     */
    public function signup_page()
    {
        $session = session();

        if ($session->has('user')) {
            return redirect()->to('/');
        }

        $errors = $session->getFlashdata('errors') ?? [];
        $old = $session->getFlashdata('old') ?? [];

        return view('auth/signup_page', ['errors' => $errors, 'old' => $old]);
    }

    /**
     * Signup User
     */
    public function signup()
    {
        $request = service('request');
        $session = session();
        $validation = \Config\Services::validation();

        $validation->setRule('first_name', 'First name', 'required|min_length[2]|max_length[100]');
        $validation->setRule('last_name', 'Last name', 'required|min_length[2]|max_length[100]');
        $validation->setRule('email', 'Email', 'required|valid_email');
        $validation->setRule('password', 'Password', 'required|min_length[6]');
        $validation->setRule('password_confirm', 'Confirm Password', 'required|matches[password]');

        $post = $request->getPost();

        if (! $validation->run($post)) {
            $session->setFlashdata('errors', $validation->getErrors());
            $session->setFlashdata('old', $post);
            return redirect()->back()->withInput();
        }

        $userModel = new UsersModel();

        // Check if email already exists
        if ($userModel->where('email', $post['email'])->first()) {
            $session->setFlashdata('errors', ['email' => 'Email is already registered']);
            $session->setFlashdata('old', $post);
            return redirect()->back()->withInput();
        }

        // Insert new client user
        $data = [
            'first_name'    => $post['first_name'],
            'last_name'     => $post['last_name'],
            'email'         => $post['email'],
            'password_hash' => password_hash($post['password'], PASSWORD_DEFAULT),
            'type'          => 'client',
        ];

        if (! $userModel->insert($data)) {
            $session->setFlashdata('errors', ['general' => 'Could not create account']);
            $session->setFlashdata('old', $post);
            return redirect()->back()->withInput();
        }

        // SUCCESS → redirect to login page
        $session->setFlashdata('success', 'Account created successfully! You may now log in.');

        return redirect()->to('/login');
    }
}
