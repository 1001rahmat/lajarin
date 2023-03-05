<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Go extends BaseController
{
    // This is a controller for creating an URL Shortener

    public function index()
    {
        throw new \CodeIgniter\Exceptions\PageNotFoundException();
    }

    public function emateri()
    {
        return redirect()->to(base_url('site/emateri'));
    }
}
