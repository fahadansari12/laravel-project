<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AdminLoginController extends Controller
{
    public function __construct() {
        $this->middleware('guest:admin');
    }

    public function showLoginForm() {
        return view('auth.admin-login');
    }

    public function login(Request $request) {
        // Validate Form data
        $this->validate($request, [
            'email'  => 'required|email',
            'password' => 'required|min:6'
        ]);
        
        // Attempt to Log user in
        if(Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {

            //if successful redirect to specific page
            return redirect()->route('admin.dashboard');
        }

        //if unsuccessful then return back
        return redirect()->back()->with(['error' => 'Invalid email or Password']);
    }
}
