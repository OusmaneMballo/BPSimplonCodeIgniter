<?php

namespace App\Controllers;
use CodeIgniter\Controller;

class Page extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function view($page = 'home')
    {
        if ( ! is_file(APPPATH.'/Views/Page/'.$page.'.php'))
        {
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter

        echo view('Templates/header', $data);
        echo view('Page/'.$page, $data);
        echo view('Templates/footer', $data);
    }
}