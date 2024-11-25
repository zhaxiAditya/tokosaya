<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('user/login');
    }
    public function regis()
    {
        return view('user/register');
    }
}
