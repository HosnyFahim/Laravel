<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function about()
    {
        return "<h1>About Page</h1>";
    }

    public function products()
    {
        return "<h1>Products Page</h1>";
    }

    public function contact()
    {
        return "<h1>Contact Page</h1>";
    }
}
