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
             return view('admin');            
        }
        else {
           // echo "Login Failed!";
           return Redirect::route('admin-login')->with(['error'=> "Invalid email or Password!!"]);
        }
    }

    public function logout() {
        Auth::logout();
        return Redirect::route('admin-login');
    }
}
