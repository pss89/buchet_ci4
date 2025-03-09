<?php

namespace App\Controllers;

use CodeIgniter\HTTP\ResponseInterface;

class Join extends BaseController
{
    public function index(): string
    {
        //
        return view('user/join', ['title' => '회원가입']);
    }
}
