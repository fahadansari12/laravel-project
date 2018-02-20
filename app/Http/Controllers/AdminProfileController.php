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

    
     
}
