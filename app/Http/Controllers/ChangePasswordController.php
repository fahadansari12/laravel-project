<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Auth;
use App\Admin;
use Session;

class ChangePasswordController extends Controller
{
    public function index() {
        return view('admin-change-password');
    }

    // To Change the Password
    public function changePassword(Request $pass) {

        $this->validate($pass, [
            'admin-old-password' => 'required',
            'admin-new-password' => 'required',
            'admin-confirm-password' => 'required'
        ]);

        $oldPass = Session::get('admin-password');
        
        Session::flush();
        $user = Admin::where('password',$oldPass)->first();
        
        $inputOld = $pass->input('admin-old-password');
        $inputNew = $pass->input('admin-new-password');
        $inputConfirm = $pass->input('admin-confirm-password');
        
        if($user->password == $inputOld) {
            if($inputNew == $inputConfirm) {
                $user->password = $inputNew;
                $user->save();
                Session::put('admin-name',$user->name);
                Session::put('admin-email',$user->email);
                Session::put('admin-address',$user->address);
                Session::put('admin-dob',$user->dob);
                Session::put('admin-mobile',$user->mobile);
                Session::put('admin-password',$user->password);
                Session::put('admin-pic',$user->photo);
                return Redirect::to('admin-change-password')->with('change-password','Password Changed Successfully!');
            }

            else {
                Session::put('not-match','Password does not match!');
            } 
        }

        else {
            Session::put('wrong','Invalid Password!');
        }

            Session::put('admin-name',$user->name);
            Session::put('admin-email',$user->email);
            Session::put('admin-address',$user->address);
            Session::put('admin-dob',$user->dob);
            Session::put('admin-password',$user->password);
            Session::put('admin-mobile',$user->mobile);
            Session::put('admin-pic',$user->photo);
            return Redirect::to('admin-change-password')->with(['error'=> "Invalid Password!!"]);

    }
}
