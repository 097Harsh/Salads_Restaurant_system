<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Area;
use App\Models\City;
use App\Models\Role;


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
        $areas = Area::all();
        $citys = DB::table('citys')->get();
        $roles = DB::table('roles')->where('role_id','!=','1')->get();
        return view('user.register',compact('areas','citys','roles'));
    }
    
    //login page 
    public function login(){
        return view('user.login');
    }
    //registeration
    public function store_regiter(Request $request){
        /*  echo "<pre>";
        print_r($request);die;  */
        $password = $request['password'];
        $c_password = $request['cpassword'];
        if($password == $c_password){
            $user = new User();
            $user->name = $request['name'];
            $user->email = $request['email'];
            $user->contact = $request['contact'];
            $user->address = $request['address'];
            $user->password = bcrypt($password);
            $user->area_id = $request['area'];
            $user->city_id = $request['city'];
            $user->role_id = $request['role'];
            $user->save();
            return redirect()->route('home')->with('reg_success','Registrtion successfully......');
        }
    }

}
