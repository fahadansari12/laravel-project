
@extends('layouts.app')
@section('content')

<div class="row row-container">
        <h1 class="prof-head">Profile</h1>
                    @if(@session('response'))
                        <div class="col-md-12 alert alert-success">
                            {{@session('response')}}
                        </div><br>
                    @endif

            <div class="col-md-3 col-xs-12 col-sm-6 left-container">
            <div class="well well-sm">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="row">
                            <div class="col-md-5 col-sm-5 col-xs-5 round-img">
                                <img src="{{URL::asset('img/'.Auth::user()->photo)}}" class="img-circle img-responsive"/>
                            </div>
                            <div class="col-md-7 col-sm-7 col-xs-7 round-img-neighbour">
                                <p>{{ Auth::user()->name }}</p>
                                <small><cite title="">{{Auth::user()->address}} <i class="glyphicon glyphicon-map-marker"></i></cite></small>
                            </div>
                        </div>

                        <div class="row left-well-container">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="well well-sm"><a href="#" id="profile-btn" >Profile Info</a></div>
                                <div class="well well-sm"><a href="{{route('user-report')}}" id="report-btn">Daily Report</a></div>
                                <div class="well well-sm"><a href="#" id="attendance-btn">Attendance</a></div>
                                <div class="well well-sm"><a href="#" id="user-edit-profile-btn" >Edit Profile</a></div>                                
                                <div class="well well-sm"><a href="#" id="user-change-password-btn">Change Password</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-offset-0 col-xs-12 col-sm-6 col-md-9" id="user-report">
            <div class="well well-sm">
                <div class="row">
                    <div class="col-sm-6 col-md-8">
                        <div class="col-sm-6 col-md-8" id="fill-report">
                            <h2>Daily Report</h2>
                            <form method="post" action="{{route('submit-report')}}">
                            {{ csrf_field() }}                            
                            <div class="form-group">
                                <label for="date-of-report">Date:</label>
                                <input type="date" class="form-control" name="date-of-report" id="date-of-report" placeholder="Select Date"/>
                            </div>

                            <div class="form-group">
                                <label for="technology">Technology:</label>
                                <input type="text" class="form-control" name="technology" id="technology" placeholder="Technology"/>
                            </div>

                            <div class="form-group">
                                <label for="mentor">Mentor:</label>
                                <input type="text" class="form-control" name="mentor" id="mentor" placeholder="Name of Mentor"/>
                            </div>

                            <div class="form-group">
                                <label for="report-details">Report Detail:</label>
                                <input type="text" class="form-control" name="report-details" id="report-details" placeholder="Report"/>
                            </div>

                            <div class="form-group">
                                <label for="status-of-report">Status:</label>
                                <select name="status-of-report" class="form-control" id="status-of-report">
                                    <option value="working">Working</option>
                                    <option value="completed">Completed</option>
                                </select>
                            </div>
                            <input type="submit" class="btn btn-info" id="submit-report" value="Submit"/> <input type="reset" class="btn btn-info" id="reset-report" value="Cancel"/>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</div>

@endsection