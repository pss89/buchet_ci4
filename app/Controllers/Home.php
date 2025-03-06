<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        // return view('welcome_message');
        return view('home', ['title' => 'Home Page']);
    }

    public function test(): string
    {
        return view('test');
    }
}
