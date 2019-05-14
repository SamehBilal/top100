


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">

    <title>

        Notifications &middot;

    </title>

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
    <link href="{{asset('css/toolkit.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('fonts/font-awesome-4.2.0/css/font-awesome.min.css')}}" />

    <link href="{{asset('css/application.css')}}" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{asset('css/menu_topside.css')}}" />

    <style>
        /* note: this is a hack for ios iframe for bootstrap themes shopify page */
        /* this chunk of css is not part of the toolkit :) */
        body {
            width: 1px;
            min-width: 100%;
            *width: 100%;
            background: #373a47;
        }
    </style>

</head>


<body class="">



<div class="container-div">
    <div class="menu-wrap">

        <nav class="menu-top">
            <div class="profile">
                <img src="{{asset('img/top100.png')}}" alt="" width="42" height="42" />
                <span>Top 100</span>
            </div>
            @if (!Auth::guest())
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
            @endif
        </nav>

        <nav class="menu-side">
            <br>
            <a href="/"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
            <a href="/categories"><i class="fa fa-align-right" aria-hidden="true"></i> Categories</a>
            <a href="/about"><i class="fa fa-user-secret" aria-hidden="true"></i> About Us</a>
            <a href="/how-it-works"><i class="fa fa-key" aria-hidden="true"></i> How it Works</a>
        </nav>
    </div>
    <button class="menu-button" id="open-button"><img src="{{asset('img/top100.png')}}" alt="" width="50px" height="50px"></button>

    <div  class="content-wrap">
        <div class="content">
            <div class="container p-t-md">
                <div class="row">

                    <div class="col-md-offset-1 col-md-2">

                        <div class="list-group m-b-md">
                            <span class="list-group-item headline">
                                My Lists
                            </span>
                            <a href="#" class="list-group-item">
                                <span class="icon icon-chevron-thin-right pull-right"></span>
                                <i class="fa fa-coffee" aria-hidden="true"></i> Cafés
                            </a>
                            <a href="#" class="list-group-item">
                                <span class="icon icon-chevron-thin-right pull-right"></span>
                                <i class="fa fa-cutlery" aria-hidden="true"></i> Restaurants
                            </a>
                            <a href="#" class="list-group-item">
                                <span class="icon icon-chevron-thin-right pull-right"></span>
                                <i class="fa fa-beer" aria-hidden="true"></i> Drinks
                            </a>
                            <a href="#" class="list-group-item">
                                <span class="icon icon-chevron-thin-right pull-right"></span>
                                <i class="fa fa-map-marker" aria-hidden="true"></i> Places
                            </a>
                            <a href="#" class="list-group-item">
                                <span class="icon icon-chevron-thin-right pull-right"></span>
                                <i class="fa fa-tablet" aria-hidden="true"></i> Mobiles
                            </a>
                            <a href="#" class="list-group-item">
                                <span class="icon icon-chevron-thin-right pull-right"></span>
                                <i class="fa fa-music" aria-hidden="true"></i> Music
                            </a>
                            <a href="#" class="list-group-item">
                                <span class="icon icon-chevron-thin-right pull-right"></span>
                                <i class="fa fa-book" aria-hidden="true"></i> Books
                            </a>
                            <a href="#" class="list-group-item">
                                <span class="icon icon-chevron-thin-right pull-right"></span>
                                <i class="fa fa-television" aria-hidden="true"></i> Series
                            </a>
                            <a href="#" class="list-group-item">
                                <span class="icon icon-chevron-thin-right pull-right"></span>
                                <i class="fa fa-film" aria-hidden="true"></i> Movies
                            </a>
                            <a href="#" class="list-group-item">
                                <span class="icon icon-chevron-thin-right pull-right"></span>
                                <i class="fa fa-th-large" aria-hidden="true"></i> Apps
                            </a>
                        </div>
                    </div>
                    <div class=" col-md-7">
                        <ul class="list-group media-list media-list-stream">
                            <li class="list-group-item p-a">
                                <h3 class="m-a-0"><i class="fa fa-coffee" aria-hidden="true"></i> Cafés</h3>
                            </li>

                            <li class="list-group-item media p-a">
                                <div class="media-left">
                                    <span class="icon text-muted">1</span>
                                </div>

                                <div class="media-body">
                                    <small class="pull-right text-muted"><a href="#"><i class="fa fa-trash" aria-hidden="true"></i> Remove</a></small>
                                    <div class="media-heading">
                                        Starbucks
                                    </div>
                                    <ul class="avatar-list">
                                        <li class="avatar-list-item"><img class="img-circle" src="{{asset('img/starbucks-logo-trans.png')}}">
                                    </ul>
                                </div>
                            </li>

                            <li class="list-group-item media p-a">
                                <div class="media-left">
                                    <span class="icon text-muted">2</span>
                                </div>

                                <div class="media-body">
                                    <small class="pull-right text-muted"><a href="#"><i class="fa fa-trash" aria-hidden="true"></i> Remove</a></small>
                                    <div class="media-heading">
                                        <a href="#"><strong>Mark Otto</strong></a> played destiny
                                    </div>

                                </div>
                            </li>

                            <li class="list-group-item media p-a">
                                <div class="media-left">
                                    <span class="icon  text-muted">3</span>
                                </div>

                                <div class="media-body">
                                    <small class="pull-right text-muted"><a href="#"><i class="fa fa-trash" aria-hidden="true"></i> Remove</a></small>
                                    <div class="media-heading">
                                        <a href="#"><strong>Fat</strong></a> and <a href="#"><strong>1 other</strong></a> followed you
                                    </div>
                                </div>
                            </li>


                            <li class="list-group-item media p-a">
                                <div class="media-left">
                                    <span class="icon  text-muted">4</span>
                                </div>

                                <div class="media-body">
                                    <small class="pull-right text-muted"><a href="#"><i class="fa fa-trash" aria-hidden="true"></i> Remove</a></small>
                                    <div class="media-heading">
                                        <a href="#"><strong>Mark Otto</strong></a> and <a href="#"><strong>2 others</strong></a> favorited your post
                                    </div>
                                </div>
                            </li>



                            <li class="list-group-item media p-a">
                                <div class="media-left">
                                    <span class="icon text-muted">5</span>
                                </div>

                                <div class="media-body">
                                    <small class="pull-right text-muted"><a href="#"><i class="fa fa-trash" aria-hidden="true"></i> Remove</a></small>
                                    <div class="media-heading">
                                        <a href="#"><strong>Jacob Thornton</strong></a> and <a href="#"><strong>1 other</strong></a> updated their settings
                                    </div>
                                </div>
                            </li>

                            <li class="list-group-item media p-a">
                                <div class="media-left">
                                    <span class="icon text-muted">6</span>
                                </div>

                                <div class="media-body">
                                    <small class="pull-right text-muted"><a href="#"><i class="fa fa-trash" aria-hidden="true"></i> Remove</a></small>
                                    <div class="media-heading">
                                        <a href="#"><strong>Jacob Thornton</strong></a> quit his job
                                    </div>

                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3">


                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/chart.js')}}"></script>
<script src="{{asset('js/toolkit.js')}}"></script>
<script src="{{asset('js/application.js')}}"></script>
<script src="{{asset('js/classie.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
<script>
    // execute/clear BS loaders for docs
    $(function(){
        if (window.BS&&window.BS.loader&&window.BS.loader.length) {
            while(BS.loader.length){(BS.loader.pop())()}
        }
    })

</script>
</body>
</html>

