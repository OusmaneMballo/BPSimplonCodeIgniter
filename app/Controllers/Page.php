<?php

namespace App\Controllers;
use CodeIgniter\Controller;

class Page
{
    public function index()
    {
        return view('welcome_message');
    }

    public function view($page = 'home')
    {
    }
}