<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Admin;

class AdminUserController extends Controller
{
   
    public function index(){
        return view('admin-login.admin-registration');
    }

    // For Registration
    public function store(Request $request) {

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
         
        ]);

        $admin = new Admin;
        $admin->name = $request->input('name');
        $admin->email = $request->input('email');
        $admin->dob = $request->input('dob');
        $admin->address = $request->input('address');
        $admin->mobile = $request->input('mobile');
        $admin->password = $request->input('password');
        
        $admin->save();
        return redirect('admin-registration')->with('response','Registered Successfully!');
    }
}
