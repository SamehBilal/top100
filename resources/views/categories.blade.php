<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top 100 categories</title>
    <meta name="description" content="Blueprint: Responsive Icon Grid" />
    <meta name="keywords" content="icon grid, hover, responsive, portfolio, template" />
    <meta name="author" content="Codrops" />
    <link rel="shortcut icon" href="../favicon.ico">

    <link rel="stylesheet" type="text/css" href="{{asset('css/default.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/component.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('fonts/font-awesome-4.2.0/css/font-awesome.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/menu_topside(2).css')}}" />



    <script src="{{asset('js/modernizr.custom.js(2)')}}"></script>
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

    <div class="container">
        <div class="main">
            <ul class="cbp-ig-grid">
                <li>
                    <a href="/categories/movies">
                        <span class="cbp-ig-icon"><i class="fa fa-film fa-5x" aria-hidden="true"></i></span>
                        <span class="cbp-ig-category">Movies</span>
                    </a>
                </li>
                <li>
                    <a href="/categories/music">
                        <span class="cbp-ig-icon"><i class="fa fa-music fa-5x" aria-hidden="true"></i></span>
                        <span class="cbp-ig-category">Music</span>
                    </a>
                </li>
                <li>
                    <a href="/categories/series">
                        <span class="cbp-ig-icon"><i class="fa fa-tv fa-5x" aria-hidden="true"></i></span>
                        <span class="cbp-ig-category">Series</span>
                    </a>
                </li>
                <li>
                    <a href="/categories/books">
                        <span class="cbp-ig-icon "><i class="fa fa-book fa-5x" aria-hidden="true"></i></span>
                        <span class="cbp-ig-category">Books</span>
                    </a>
                </li>
                <li>
                    <a href="/categories/places">
                        <span class="cbp-ig-icon "><i class="fa fa-map-marker fa-5x" aria-hidden="true"></i></span>
                        <span class="cbp-ig-category">Places</span>
                    </a>
                </li>
                <li>
                    <a href="/categories/mobiles">
                        <span class="cbp-ig-icon "><i class="fa fa-mobile fa-5x" aria-hidden="true"></i></span>
                        <span class="cbp-ig-category">Mobiles</span>
                    </a>
                </li>
                <li>
                    <a href="/categories/apps">
                        <span class="cbp-ig-icon "><i class="fa fa-th fa-5x" aria-hidden="true"></i></span>
                        <span class="cbp-ig-category">Apps</span>
                    </a>
                </li>
                <li>
                    <a href="/categories/restaurants">
                        <span class="cbp-ig-icon "><i class="fa fa-cutlery fa-5x" aria-hidden="true"></i></span>
                        <span class="cbp-ig-category">Restaurants</span>
                    </a>
                </li>
                <li>
                    <a href="/categories/cafes">
                        <span class="cbp-ig-icon "><i class="fa fa-coffee fa-5x" aria-hidden="true"></i></span>
                        <span class="cbp-ig-category">Cafés</span>
                    </a>
                </li>
                <li>
                    <a href="/categories/drinks">
                        <span class="cbp-ig-icon "><i class="fa fa-beer fa-5x" aria-hidden="true"></i></span>
                        <span class="cbp-ig-category">Drinks</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
</div>
</div>
            <script src="{{asset('js/classie.js')}}"></script>
            <script src="{{asset('js/main.js')}}"></script>
</body>
</html>
