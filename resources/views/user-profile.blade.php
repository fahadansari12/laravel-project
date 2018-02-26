
@extends('layouts.app')
@section('content')

<div class="row row-container">
        <h1 class="prof-head">Profile</h1>
                    @if(@session('update-response'))
                        <div class="col-md-12 alert alert-success">
                            {{@session('update-response')}}
                        </div><br>
                    @endif

                    @if(@session('update-pic'))
                        <div class="col-md-12 alert alert-success">
                            {{@session('update-pic')}}
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
        <div class="col-md-offset-0 col-xs-12 col-sm-6 col-md-9" id="profile-info">
            <div class="well well-sm">
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <img src="{{URL::asset('img/'.Auth::user()->photo)}}" alt="" class="img-rounded img-responsive profile-main-image" />
                    </div>
                    <div class="col-sm-6 col-md-8">
                        <h4>
                            {{Auth::user()->name}}</h4>
                        <small><cite title="">{{Auth::user()->address}} <i class="glyphicon glyphicon-map-marker">
                        </i></cite></small>
                        <p>
                            <i class="glyphicon glyphicon-envelope"></i>{{Auth::user()->email}}
                            <br />
                            <i class="glyphicon glyphicon-globe"></i>Contact: {{Auth::user()->mobile}}
                            <br />
                            <i class="glyphicon glyphicon-gift"></i>Born at {{Auth::user()->dob}}</p>
                        
                        
                    </div>
                </div>
            </div>
        </div>

</div>

@endsection