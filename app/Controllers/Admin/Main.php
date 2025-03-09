<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Main extends BaseController
{
    public function index(): string
    {
        //
        return view('admin/home', ['title' => 'Admin Home Page']);
    }
}
