<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class UserController extends Controller
{
    //Home page
    public function home(){
        return view('user.index');
    }

    //about page
    public function about(){
        return view('user.about');
    }
    //contact page
    public function contact(){
        return view('user.contact');
    }
    //store the contact details
    public function store_contact(Request $request){
       /*    echo "<pre>";
        print_r($request);die;  */
        //to store data into database......
        $contact = new Contact();
        $contact->name = $request['w3lName'];
        $contact->email = $request['w3lSender'];
        $contact->contact = $request['w3lPhone'];
        $contact->subject = $request['w3lSubect'];
        $contact->msg = $request['w3lMessage'];
        $contact->save();
        return redirect()->route('home')->with('success','Your message has been sent successfully');
    }
    //register page 
    public function register(){
        return view('user.register');
    }
    //login page 
    public function login(){
        return view('user.login');
    }

}
