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
                                <div class="well well-sm"><a href="{{route('admin-profile')}}" id="profile-btn" >Profile Info</a></div>
                                <div class="well well-sm"><a href="#" id="edit-profile-btn" >Edit Profile</a></div>
                                <div class="well well-sm"><a href="{{route('admin-change-password')}}" id="change-password-btn">Change Password</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-md-offset-0 col-xs-12 col-sm-6 col-md-9" id="edit-profile" style="">
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
                            
                            <input type="submit" value="Save" id="submit" class="btn btn-info"/> <input type="reset" value="Reset" id="reset" class="btn btn-info"/>
                        </form>                        
                    </div>

                    <div class="col-md-4 col-md-offset-0" style="margin-top:5px; border-left:0px solid gray;">
                        <h3>Change Profile pic</h3>
                        <form method="post" action="{{route('change-pic')}}">
                        {{ csrf_field() }}
                            <div class="form-group">
                                <label for="admin-pic">Your Profile pic:</label>
                                <input type="file" class="form-control" name="admin-pic" id="admin-pic" placeholder="Your Profile pic"/>
                            </div>
                            <input type="submit" value="Upload" id="submit" class="btn btn-info"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>

</div>
@endsection