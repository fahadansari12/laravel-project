<?php
namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Auth;
use App\User;
use App\Report;
use Session;

class UserProfileController extends Controller
{
    public function index() {

        return view('user-profile');
    }

    public function report() {
        return view('user-report');
    }

    public function submitReport(Request $request) {
         $this->validate($request, [
            'date' => 'required',
            'technology' => 'required',
            'mentor' => 'required',
            'report' => 'required',
            'status' => 'required',
         
        ]); 

        $date = $request->input('date-of-report');

        $technology = $request->input('technology');
        $mentor = $request->input('mentor');
        $report = $request->input('report-details');
        $status = $request->input('status-of-report');

        DB::table('user-report')->insert(
            array('date'=>'"'.$date.'"','technology'=>'"'.$technology.'"','mentor'=>'"'.$mentor.'"','report'=>'"'.$report.'"','status'=>'"'.$status.'"')
        );
        
        return redirect('user-report')->with('response','Report Submitted!');
    }
}
