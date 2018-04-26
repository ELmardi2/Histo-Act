<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function Home()
    {
       return view('main');
    }
    public function About()
    {
       return view('/about');
    }
    public function Contact()
    {
       return view('/contact');
    }
    
}
