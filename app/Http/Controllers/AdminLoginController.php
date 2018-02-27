<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redirect;
use Auth;
use Session;
class AdminLoginController extends Controller
{
    
    public function index(){
        return view('admin-login.admin-login');
    
    }

    // To Log out user
    public function logadminout()
    {
        Session::flush();
        return Redirect::route('admin-login');
    }


    // for Login
    public function login(Request $req) {
        $this->validate($req, [
            'email' => 'required',
            'password' => 'required',
        ]);

        $email = $req->input('email');
        $password = $req->input('password');

        
        if(Auth::attempt(['email' => $email, 'password' => $password])){
            $user = Auth::admin();
            $name = $user->name;
            $address = $user->address;

             return view('admin-profile')->with(['admin'=> $user]);            
        }
        else {
       
           return Redirect::route('admin-login')->with(['error'=> "Invalid email or Password!!"]);
        }
    }   


}
