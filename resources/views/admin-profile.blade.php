
@extends('layouts.admin-app')
@section('admin-content')

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
                                <img src="{{URL::asset('img/'.Session::get('admin-pic'))}}" class="img-circle"/>
                            </div>
                            <div class="col-md-7 col-sm-7 col-xs-7 round-img-neighbour">
                                <p>{{Session::get('admin-name')}}</p>
                                <small><cite title="">{{Session::get('admin-address')}} <i class="glyphicon glyphicon-map-marker"></i></cite></small>
                            </div>
                        </div>

                        <div class="row left-well-container">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="well well-sm"><a href="#" id="profile-btn" >Profile Info</a></div>
                                <div class="well well-sm"><a href="{{route('admin-edit-profile')}}" id="edit-profile-btn" >Edit Profile</a></div>
                                <div class="well well-sm"><a href="{{route('admin-change-password')}}" id="change-password-btn">Change Password</a></div>
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
                        <img src="{{URL::asset('img/'.Session::get('admin-pic'))}}" alt="" class="img-rounded img-responsive profile-main-image" />
                    </div>
                    <div class="col-sm-6 col-md-8">
                        <h4>
                            {{Session::get('admin-name')}}</h4>
                        <small><cite title="">{{Session::get('admin-address')}} <i class="glyphicon glyphicon-map-marker">
                        </i></cite></small>
                        <p>
                            <i class="glyphicon glyphicon-envelope"></i>{{Session::get('admin-email')}}
                            <br />
                            <i class="glyphicon glyphicon-globe"></i>Contact: {{Session::get('admin-mobile')}}
                            <br />
                            <i class="glyphicon glyphicon-gift"></i>Born at {{Session::get('admin-dob')}}</p>
                        
                        
                    </div>
                </div>
            </div>
        </div>

</div>

@endsection