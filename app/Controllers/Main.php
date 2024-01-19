<?php

namespace App\Controllers;

class Main extends BaseController
{
    public function index()
    {
        return view('home');
    }

    public function products(): string
    {
        return view('products');
    }

    public function where_we_are()
    {
        return view('where_we_are');
    }
}
