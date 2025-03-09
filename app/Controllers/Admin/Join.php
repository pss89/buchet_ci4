<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Join extends BaseController
{
    public function index(): string
    {
        //
        return view('admin/join', ['title' => 'Admin Join Page']);
    }
}
