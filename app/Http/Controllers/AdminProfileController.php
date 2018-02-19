<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Auth;
use App\Admin;
use Session;


class AdminProfileController extends Controller
{
    public function index() {
        return view('admin-profile');
    }

    public function updateProfile(Request $req) {
        $name =  Session::get('admin-name');
        Session::flush();
        //return dd($name);
        //$user = DB::table('admin')->where('name',$name)->first();
        
        $user = Admin::where('name', $name)->first();
        //return dd($user->name);
        //$user = Admin::where('name', $name)->findOrFail();        
        
        if($req->input('admin-name')!= null) {
            $user->name = $req->input('admin-name');
          //  return dd($user->name);    
        }

        if($req->input('admin-email')!= null) {
            $user->email = $req->input('admin-email');
        }
        if($req->input('admin-address')!= null) {
            $user->email = $req->input('admin-address');
        }
        if($req->input('admin-mobile')!= null) {
            $user->mobile = $req->input('admin-mobile');
        }
        if($req->input('admin-dob')!= null) {
            $user->dob = $req->input('admin-dob');
        }
        $user->save();

        Session::put('admin-name',$user->name);
        Session::put('admin-email',$user->email);
        Session::put('admin-address',$user->address);
        Session::put('admin-dob',$user->dob);
        Session::put('admin-mobile',$user->mobile);
        Session::put('admin-pic',$user->photo);
        Session::put('admin-password',$user->password);
        return redirect('admin-profile')->with('update-response','Profile Updated successfully');
        


    }

    public function changePassword(Request $pass) {
        $oldPass = Session::get('admin-password');
        Session::flush();
        $user = Admin::where('password', $oldPass)->first();
        if($oldPass == $pass->input('admin-old-password')){
            
            if($pass->input('admin-new-password')!= null) {
                if($pass->input('admin-confirm-password')!= null) {
                    if($pass->input('admin-new-password') == $pass->input('admin-confirm-password')) {
                        $user->password = $pass->input('admin-new-password');
                        Session::put('admin-name',$user->name);
                        Session::put('admin-email',$user->email);
                        Session::put('admin-address',$user->address);
                        Session::put('admin-dob',$user->dob);
                        Session::put('admin-mobile',$user->mobile);
                        Session::put('admin-pic',$user->photo);
                        Session::put('admin-password',$user->password);
                        return redirect('admin-profile')->with('change-password','Password Changed successfully!');
                    }

                    else {
                        return redirect('admin-profile#change-password')->with('enter-no-match','Confirm Password is not matching!.');    
                    }
                }

                else {
                    return redirect('admin-profile#change-password')->with('enter-cnf','Please Confirm Password.');
                }
                
            }
        }
        Session::put('admin-name',$user->name);
        Session::put('admin-email',$user->email);
        Session::put('admin-address',$user->address);
        Session::put('admin-dob',$user->dob);
        Session::put('admin-mobile',$user->mobile);
        Session::put('admin-pic',$user->photo);
        Session::put('admin-password',$user->password);
        return redirect('admin-profile');
    }
}
