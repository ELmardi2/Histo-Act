<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactUs;

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
    public function Send(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required | email',
            'subject' => 'required',
            'content' => 'required | min: 10'
        ]);

        $name = $request->input('name');
        $email = $request->input('email');
        $subject = $request->input('subject');
        $content= $request->input('content');
        Mail::to('histoact1@gmail.com')
        ->send(new ContactUs($name, $email, $subject, $content));

        session()->flash('message', 'Thank to contact us !! ');
       return redirect('/contact')->with('message', 'Your message has been sent successfully Thanks');
    }
    
}
