<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('home/home');
    }

    public function products(): string
    {
        return view('home/products');
    }

    public function where_we_are()
    {
        return view('home/where_we_are');
    }
}
