<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('index');
    }
    public function about(): string
    {
        return view('about');
    }
    public function services(): string
    {
        return view('services');
    }
    public function blogs(): string
    {
        return view('blogs');
    }
    public function portfolio(): string
    {
        return view('portfolio');
    }
    public function contact(): string
    {
        return view('contact');
    }
}
