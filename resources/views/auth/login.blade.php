<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('css/menu_topside.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('fonts/font-awesome-4.2.0/css/font-awesome.min.css')}}" />

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
        ]); ?>
    </script>
    <style>
        body{
            background: #373a47;
        }
        #panel{
            font-weight: bold;
        }
    </style>
</head>
<body>
<div class="container-div">
    <div class="menu-wrap">
        <nav class="menu-top">
            <div class="profile">
                <img src="{{asset('img/user3.jpg')}}" alt="Sameh Bilal" width="42" height="42" />
                <span>Sameh Bilal</span>
            </div>
            <div class="icon-list">
                <a href="#"><i class="fa fa-fw fa-bell-o"></i> Notifications</a>
                <a href="/my-lists"><i class="fa fa-pencil" aria-hidden="true"></i> My Lists</a>
                <a href="#" class=""><i class="fa fa-external-link" aria-hidden="true"></i> Log out</a>
            </div>
        </nav>
        <nav class="menu-side">
            <br>
            <a href="/"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
            <a href="categories"><i class="fa fa-align-right" aria-hidden="true"></i> Categories</a>
            <a href="/about"><i class="fa fa-user-secret" aria-hidden="true"></i> About Us</a>
            <a href="/how-it-works"><i class="fa fa-key" aria-hidden="true"></i> How it Works</a>
        </nav>
    </div>
    <button class="menu-button" id="open-button"></button>

    <div  class="content-wrap">
        <div  class="content">
<div class="container">
    <br><br><br><br><br><br><br>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div id="panel" class="panel-heading">Login</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ url('/password/reset') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
            <script src="{{asset('js/classie.js')}}"></script>
            <script src="{{asset('js/main.js')}}"></script>
<script src="/js/app.js"></script>
</body>
</html>
