<?php

namespace App\Controllers;

use CodeIgniter\HTTP\ResponseInterface;

class Main extends BaseController
{
    public function index(): string
    {
        //
        return view('home', ['title' => 'Home Page']);
    }
}
