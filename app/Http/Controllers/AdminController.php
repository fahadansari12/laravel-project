<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //

    public function index()
    {
       // return view('admin');

       $users = DB::table('users')->select('id','name','email')->get();

        return view('admin')->with('users', $users);
    }

   

    

    
}
?>
<!-- <html>
    <head>
    <meta http-equiv="refresh" content="10">
    </head>
</html> -->

