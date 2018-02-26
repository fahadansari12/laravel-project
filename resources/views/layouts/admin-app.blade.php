<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <meta http-equiv="refresh" content="10"> --> 
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Excellence') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin-profile.css') }}" rel="stylesheet">
</head>
<body>


    
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        Excellence
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                        <li><a href="{{ route('admin-login') }}">Login</a></li>
                            <li><a href="{{ route('admin-registration') }}">Register</a></li>
                        @else
                        <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                {{Auth::user()->name}}         
                                 <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                <li>
                                        <a href="{{ route('admin-profile') }}">
                                            Profile
                                        </a>

                                         
                                    </li>
                                    
                                    <li>
                                        <a href="{{ route('admin-logout') }}">
                                            Logout
                                        </a>

                                         
                                    </li>
                                    
                                </ul>
                            </li>
                        
                            
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        @yield('admin-content')
        
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/profile-js.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
    <script>
        $(document).ready(function() {
            //alert("sdgdgg"); 
            setInterval(function() {
		    $('#res').load('{{ action("DemoController@index") }}');          
            },1000);
        });
    </script>
        
</body>
</html>
