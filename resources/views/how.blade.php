<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>How top 100 works</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="aham 100" />
    <link rel="shortcut icon" href="">


    <link rel="stylesheet" type="text/css" href="{{asset('css/normalize.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('fonts/font-awesome-4.2.0/css/font-awesome.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/menu_topside.css')}}" />

    <!--[if IE]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]--><script>document.documentElement.className = 'js';</script>
</head>
<body>
<div class="container-div">
    <div class="menu-wrap">

        <nav class="menu-top">
            <div class="profile">

                @if (!Auth::guest())
                    <img src="{{asset('img/top100.png')}}" alt="" width="42" height="42" />
                    <span style="font-size: large;font-weight: bold">{{ Auth::user()->name }}</span>
                @endif

                @if (Auth::guest())
                    <img src="{{asset('img/top100.png')}}" alt="" width="42" height="42" />
                    <span>Top 100</span>
                @endif
            </div>
            @if (!Auth::guest())
                <div class="icon-list">
                    <a href="/admin-panel">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                        Admin Panel
                    </a>
                    {{--<a href="/my-lists">
                        <i class="fa fa-pencil" aria-hidden="true"></i>
                        My Lists
                    </a>--}}
                    <a href="{{ url('/logout') }}"
                       onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                        <i class="fa fa-external-link" aria-hidden="true"></i>
                        Logout
                    </a>

                    <form id="logout-form" action="{{ url('/logout') }}" method="POST">
                        {{ csrf_field() }}
                    </form>
                </div>
            @endif
        </nav>

        <nav class="menu-side">
            <br>
            <a href="/">
                <i class="fa fa-home" aria-hidden="true"></i>
                Home
            </a>
            <a href="/categories">
                <i class="fa fa-align-right" aria-hidden="true"></i>
                Categories
            </a>
            <a href="/about">
                <i class="fa fa-user-secret" aria-hidden="true"></i>
                About Us
            </a>
            <a href="/how-it-works">
                <i class="fa fa-key" aria-hidden="true"></i>
                How it Works
            </a>
        </nav>
    </div>

    <button class="menu-button" id="open-button">
        <img src="{{asset('img/top100.png')}}" alt="" width="50px" height="50px">
    </button>
    <div  class="content-wrap">
        <div class="content">
            <h1 id="h_how">
                <i class="fa fa-key" aria-hidden="true"></i>
                How it Works
            </h1>
            <video id="vid_how" width="600" height="350" controls>
                <source src="{{asset('Video/video.mp4')}}" type="video/mp4">
            </video>
            <p class="p_how">
               The top 100 rank defines the best 100 items in each category from the exists categories
            </p>
            <p class="p_how">
                <i class="i_how fa fa-film fa-2x" aria-hidden="true"></i>
                <i class="i_how fa fa-music fa-2x" aria-hidden="true"></i>
                <i class="i_how fa fa-tv fa-2x" aria-hidden="true"></i>
                <i class="i_how fa fa-book fa-2x " aria-hidden="true"></i>
                <i class="i_how fa fa-map-marker fa-2x " aria-hidden="true"></i>
                <i class="i_how fa fa-mobile fa-2x " aria-hidden="true"></i>
                <i class="i_how fa fa-mortar-board fa-2x " aria-hidden="true"></i>
                <i class="i_how fa fa-cutlery fa-2x" aria-hidden="true"></i>
                <i class="i_how fa fa-coffee fa-2x" aria-hidden="true"></i>
                <i class="i_how fa fa-beer fa-2x" aria-hidden="true"></i>
            </p>
        </div>
    </div>
</div>

<script src="{{asset('js/classie.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>

</body>
</html>