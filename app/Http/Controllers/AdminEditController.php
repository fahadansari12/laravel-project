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
            $name = Auth::user()->name;
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
           
            return redirect('admin-profile')->with('update-response','Profile Updated successfully');
    }

    
}
