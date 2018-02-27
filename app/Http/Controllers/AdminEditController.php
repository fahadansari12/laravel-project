<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Auth;
use App\Admin;
use Session;

class AdminEditController extends Controller
{
    public function index() {
        return view('admin-edit-profile');
    }

    
        public function updateProfile(Request $req) {
            $name =  Session::get('admin-name');
            Session::flush();
            
            $user = Admin::where('name', $name)->first();
            if($req->input('admin-name')!= null) {
                $user->name = $req->input('admin-name');

            }
    
            if($req->input('admin-email')!= null) {
                $user->email = $req->input('admin-email');
            }
            if($req->input('admin-address')!= null) {
                $user->address = $req->input('admin-address');
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

    
}
