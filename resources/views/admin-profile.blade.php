
@extends('layouts.admin-app')
@section('admin-content')

<div class="row row-container">
        <h1 class="prof-head">Profile</h1>
        @if(@session('update-response'))
                        <div class="col-md-12 alert alert-success">
                            {{@session('update-response')}}
                        </div><br>
                    @endif

                    @if(@session('change-password'))
                        <div class="col-md-12 alert alert-success">
                            {{@session('change-password')}}
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
                                <div class="well well-sm"><a href="#" id="edit-profile-btn" >Edit Profile</a></div>
                                <div class="well well-sm"><a href="#" id="change-password-btn">Change Password</a></div>
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




        <div class="col-md-offset-0 col-xs-12 col-sm-6 col-md-9" id="edit-profile" style="display:none;">
            <div class="well well-sm">
                <div class="row">
                    <div class="col-md-7 col-sm-10 col-xs-12" style="margin-left:20px;">
                        <h3>Edit Profile</h3>
                        <form method="post" action="{{route('admin-edit-profile')}}">
                        {{ csrf_field() }}                            
                            <div class="form-group">
                                <label for="admin-name">Name:</label>
                                <input type="text" class="form-control" value="{{Session::get('admin-name')}}" name="admin-name" id="admin-name" placeholder="Enter your name"/>
                            </div>
                            <div class="form-group">
                                <label for="admin-email">Email:</label>
                                <input type="text" class="form-control" value="{{Session::get('admin-email')}}" name="admin-email" id="admin-email" placeholder="Enter your email"/>
                            </div>
                            <div class="form-group">
                                <label for="admin-address">Address:</label>
                                <input type="text" class="form-control" value="{{Session::get('admin-address')}}" name="admin-address" id="admin-address" placeholder="Enter your address"/>
                            </div>
                            <div class="form-group">
                                <label for="admin-mobile">Mobile:</label>
                                <input type="text" class="form-control" value="{{Session::get('admin-mobile')}}" name="admin-mobile" id="admin-mobile" placeholder="Enter your mobile number"/>
                            </div>
                            <div class="form-group">
                                <label for="admin-dob">Date of Birth:</label>
                                <input type="date" class="form-control" value="{{Session::get('admin-dob')}}" name="admin-dob" id="admin-dob" placeholder="Enter your Date of Birth"/>
                            </div>
                            <div class="form-group">
                                <label for="admin-pic">Your Profile pic:</label>
                                <input type="file" class="form-control" value="{{Session::get('admin-pic')}}" name="admin-pic" id="admin-pic" placeholder="Your Profile pic"/>
                            </div>
                            <input type="submit" value="Save" id="submit" class="btn btn-info"/> <input type="reset" value="Reset" id="reset" class="btn btn-info"/>
                        </form>                        
                    </div>
                </div>
            </div>
        </div>


        <div class="col-md-offset-0 col-xs-12 col-sm-6 col-md-9" id="change-password" style="display:none;">
            <div class="well well-sm">
                <div class="row">
                    <div class="col-md-8 col-sm-12 col-xs-12">
                        <h3>Change Password</h3>
                        @if(@session('enter-no-match'))
                        <div class="col-md-12 alert alert-success">
                            {{@session('enter-no-match')}}
                        </div><br>
                    @endif

                    @if(@session('enter-cnf'))
                        <div class="col-md-12 alert alert-success">
                            {{@session('enter-cnf')}}
                        </div><br>
                    @endif
                        <form method="post" action="{{route('admin-change-password')}}" >
                        {{ csrf_field() }} 
                            <div class="form-group">
                                <label for="admin-password">Enter Old Password:</label>
                                <input type="password" name="admin-old-password" id="admin-password" class="form-control"/>
                            </div>
                            <div class="form-group">
                                <label for="admin-new-password">Enter New Password:</label>
                                <input type="password" name="admin-new-password" id="admin-new-password" class="form-control"/>
                            </div>
                            <div class="form-group">
                                <label for="admin-confirm-password">Confirm Password:</label>
                                <input type="password" name="admin-confirm-password" id="admin-confirm-password" class="form-control"/>
                            </div>
                            <input type="submit" value="Save" id="submit-password" class="btn btn-info admin-password-change-btn"/><input type="submit" value="Cancel" id="cancel-password" class="btn admin-password-change-btn" style="margin-left:10px;"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>





    </div>

@endsection