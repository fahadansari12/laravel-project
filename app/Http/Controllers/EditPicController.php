<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Auth;
use App\Admin;
use Session;

class EditPicController extends Controller
{
    public function index() {
        return view('admin-edit-profile');
    }
    
    // To change admin profile pic
    public function changePic(Request $pic) {
        $oldPic = Session::get('admin-pic');
        Session::forget('admin-pic');
        $user = Admin::where('photo', $oldPic)->first();
        $user->photo = $pic->input('admin-pic');
        $user->save();

        Session::put('admin-pic',$user->photo);
        return redirect('admin-edit-profile')->with('update-pic','Profile Pic Changed!');
    }
}
