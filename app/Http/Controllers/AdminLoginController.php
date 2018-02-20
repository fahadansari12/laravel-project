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

        $checkLogin = DB::table('admin')->where(['email'=>$email,'password'=>$password])->first();
       
        if(count($checkLogin) > 0){
             Session::put('admin-name', $checkLogin->name);
             Session::put('admin-email', $checkLogin->email);
             Session::put('admin-address', $checkLogin->address);
             Session::put('admin-mobile',$checkLogin->mobile);
             Session::put('admin-dob',$checkLogin->dob);
             Session::put('admin-pic',$checkLogin->photo);
             Session::put('admin-password',$checkLogin->password);
             return view('admin');            
        }
        else {
       
           return Redirect::route('admin-login')->with(['error'=> "Invalid email or Password!!"]);
        }
    }


}
