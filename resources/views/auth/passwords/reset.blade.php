<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="/css/app.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('css/menu_topside.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('fonts/font-awesome-4.2.0/css/font-awesome.min.css')}}" />
    <title>Sign Up</title>

    <script>
        window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<style>
    body{
        background: #373a47;
    }
    #panel{
        font-weight: bold;
    }

</style>
<body>
<div class="container-div">
    <div class="menu-wrap">
        @if (!Auth::guest())
            <nav class="menu-top">
                <div class="profile">
                    <img src="{{asset('img/user3.jpg')}}" alt="Sameh Bilal" width="42" height="42" />
                    <span>{{ Auth::user()->name }}</span>
                </div>
                <div class="icon-list">
                    <a href="#"><i class="fa fa-fw fa-bell-o"></i> Notifications</a>
                    <a href="my-lists"><i class="fa fa-pencil" aria-hidden="true"></i> My Lists</a>
                    <a href="{{ url('/logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        <i class="fa fa-external-link" aria-hidden="true"></i>
                        Logout
                    </a>

                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </div>
            </nav>
        @endif
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
        <div id="resizeSlider" class="content">

<div class="container" style="margin-top: 8%;">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div id="panel" class="panel-heading">Reset Password</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/reset') }}">
                        {{ csrf_field() }}

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ $email or old('email') }}" required autofocus>

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

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Reset Password
                                </button>
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
<script src="/js/app.js"></script>
<script src="{{asset('js/classie.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
</body>
</html>
