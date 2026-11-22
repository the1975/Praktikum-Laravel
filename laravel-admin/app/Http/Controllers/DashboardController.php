<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{
    public function home()
    {
        return view('home', ['judul' => 'Home']);
    }

    public function product()
    {
        return view('product', ['judul' => 'Product']);
    }

    public function service()
    {
        return view('service', ['judul' => 'Service']);
    }

    public function contact()
    {
        return view('contact', ['judul' => 'Contact']);
    }

    public function about()
    {
        return view('about', ['judul' => 'About']);
    }
}
