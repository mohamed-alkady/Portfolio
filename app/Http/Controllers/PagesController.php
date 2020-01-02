<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMe;

use App\Post;

class PagesController extends Controller
{


    public function home(){
        return view('pages.home');
    }



public function about(){
    return view('pages.about');
}

public function contact(){
    return view('pages.contact');
}



public function portfolio (){
    return view('pages.portfolio');
}

public function services (){
    return view('pages.services');
}

public function skills(){
    return view('pages.skills');
}


public function education(){
    return view('pages.education');
}

public function dosend(request $request){
    $request->validate ([
        'name'=>'required',
        'email'=>'required|email',
        'subject'=>'required',
        'body'=>'required|min:10'
   ]);

   $name = $request->input('name');
   $email = $request->input('email');
   $subject = $request->input('subject');
   $body = $request->input('body');

    mail::to('mohamed-alkady@outlook.com')
    ->send(new ContactMe( $name , $email , $subject , $body ) );

    return view('pages.contact')->with('success','we got your message and will answer you soon');
}
}






