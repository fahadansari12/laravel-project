<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DemoController extends Controller
{
    //
    public function index()
    {
        $users = DB::table('users')->select('id','name','email')->get();

        return view('demo')->with('users', $users);
    }

}
