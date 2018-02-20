@extends('layouts.admin-app')
@section('admin-content')
<div class="row row-container">
<h1 class="prof-head">Profile</h1>
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
                                <div class="well well-sm"><a href="{{route('admin-profile')}}" id="profile-btn" >Profile Info</a></div>
                                <div class="well well-sm"><a href="{{route('admin-edit-profile')}}" id="edit-profile-btn" >Edit Profile</a></div>
                                <div class="well well-sm"><a href="{{route('admin-change-password')}}" id="change-password-btn">Change Password</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<div class="col-md-offset-0 col-xs-12 col-sm-6 col-md-9" id="change-password" style="display:;">
            <div class="well well-sm">
                <div class="row">
                    <div class="col-md-8 col-sm-12 col-xs-12">
                        <h3>Change Password</h3>
                        @if(@session('change-password'))
                        <div class="col-md-12 alert alert-success">
                            {{@session('change-password')}}
                        </div><br>
                    @endif

                        @if(Session::has('error'))
                        <div class="alert alert-warning"><strong>{{Session::get('error')}}</strong></div>
                        @endif
                        

                    <!--@if(@session('not-match'))
                        <div class="col-md-12 alert alert-danger">
                            {{@session('not-match')}}
                        </div><br>
                    @endif -->

                    
                        <form method="post" action="{{route('admin-change-password')}}" >
                        {{ csrf_field() }} 
                            <div class="form-group{{ $errors->has('admin-old-password') ? ' has-error' : '' }}">
                                <label for="admin-password">Enter Old Password:</label>
                                <input type="password" name="admin-old-password" id="admin-password" class="form-control"/>
                                @if ($errors->has('admin-old-password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('admin-old-password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('admin-new-password') ? ' has-error' : '' }}">
                                <label for="admin-new-password">Enter New Password:</label>
                                <input type="password" name="admin-new-password" id="admin-new-password" class="form-control"/>
                                @if ($errors->has('admin-new-password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('admin-new-password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('admin-confirm-password') ? ' has-error' : '' }}">
                                <label for="admin-confirm-password">Confirm Password:</label>
                                <input type="password" name="admin-confirm-password" id="admin-confirm-password" class="form-control"/>
                                @if ($errors->has('admin-confirm-password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('admin-confirm-password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <input type="submit" value="Save" id="submit-password" class="btn btn-info admin-password-change-btn"/><input type="submit" value="Cancel" id="cancel-password" class="btn admin-password-change-btn" style="margin-left:10px;"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection