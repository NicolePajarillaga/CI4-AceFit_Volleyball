<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Admin extends BaseController
{
    /**
     * Check if user is admin
     */
    private function guardAdmin()
    {
        $session = session();

        // Not logged in
        if (! $session->has('user')) {
            return redirect()->to('/login')->send();
        }

        // Not admin
        if ($session->get('user')['type'] !== 'admin') {
            return redirect()->to('/')->send();
        }
    }

    /**
     * Show Dashboard Page
     */
    public function dashboard_page()
    {
        // Protect admin area
        $this->guardAdmin();

        // Load dashboard view
        return view('admin/dashboard_page');
    }
}
