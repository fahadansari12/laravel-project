<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
//use App\Http\Controllers\Redirect;
use Illuminate\Support\Facades\Redirect;
use Auth;
use Session;
class AdminLoginController extends Controller
{
    //
    public function index(){
        return view('admin-login.admin-login');
    
    }

    public function logadminout()
    {
        Session::flush();
        return Redirect::route('admin-login');
    }



    public function login(Request $req) {
        $this->validate($req, [
            'email' => 'required',
            'password' => 'required',
        ]);

        $email = $req->input('email');
        $password = $req->input('password');

        $checkLogin = DB::table('admin')->where(['email'=>$email,'password'=>$password])->first();
        //dd(count($checkLogin));
        //dd($checkLogin->dob);
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
           // echo "Login Failed!";
           return Redirect::route('admin-login')->with(['error'=> "Invalid email or Password!!"]);
        }
    }

    /* public function logout() {
        //Auth::logout();
        Session::forget('admin-name');
        return Redirect::route('admin-login');
    } */

    

}
