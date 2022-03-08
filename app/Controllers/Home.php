<?php

namespace App\Controllers;

use CodeIgniter\Controller;
class Home extends Controller
{
    public function index()
    {
        return view('welcome_message');
    }
    public function menu()
    {
        return view('menu');
    }
    public function dashboard()
    {
        return view('dashboard');
    }
    public function user()
    {
        return view('user');
    }
}
