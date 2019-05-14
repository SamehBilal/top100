<!DOCTYPE html>
<html lang="en" class="no-js">
<head>


    <meta charset="UTF-8" />
    <meta name="description" content="top music">
    <meta name="keywords" content="music,listining,billbord,songs,lyrics,mp3,اغاني">
    <meta name="author" content="Sameh Ramadan,Ahmed Elsamahy,Mohamed faramawy,mustafa hegazi,mustafa kamel,ahmed naser, abdallah khaled,amr yasser,mohamed eltabaey,sherif ezzat">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top music</title>
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" type="text/css" href="{{asset('css/normalize.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/menu_topside(1).css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}" />


    <link rel="stylesheet" href="{{asset('fonts/font-awesome-4.2.0/css/font-awesome.min.css')}}">
    <link href="{{asset('css/application.css')}}" rel="stylesheet">
    <link href="{{asset('css/toolkit.css')}}" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,700' rel='stylesheet' type='text/css' />

    <script type="text/javascript" src="js/modernizr.custom.79639.js"></script>
    <!--[if lte IE 8]><style>.main{display:none;} .support-note .note-ie{display:block;}</style><![endif]-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            @for($T=1;$T<101;$T++)
           $('.rate{{$T}}').click(function(){
                $('.namein').val('{{$T}}');
            });
            @endfor
            @for($e=1;$e<11;$e++)
           $('.sub{{$e}}').click(function(){
                $('#myform{{$e}}').submit();
            });
            $('.star{{$e}}').hover(function(){
                $('.star{{$e}}').removeClass( "fa-star-o" ).addClass( "fa-star" );
                $('.star{{$e-1}}').removeClass( "fa-star-o" ).addClass( "fa-star" );
                $('.star{{$e-2}}').removeClass( "fa-star-o" ).addClass( "fa-star" );
                $('.star{{$e-3}}').removeClass( "fa-star-o" ).addClass( "fa-star" );
                $('.star{{$e-4}}').removeClass( "fa-star-o" ).addClass( "fa-star" );
                $('.star{{$e-5}}').removeClass( "fa-star-o" ).addClass( "fa-star" );
                $('.star{{$e-6}}').removeClass( "fa-star-o" ).addClass( "fa-star" );
                $('.star{{$e-7}}').removeClass( "fa-star-o" ).addClass( "fa-star" );
                $('.star{{$e-8}}').removeClass( "fa-star-o" ).addClass( "fa-star" );
                $('.star{{$e-9}}').removeClass( "fa-star-o" ).addClass( "fa-star" );
            }).mouseleave(function(){
                $('.star{{$e}}').removeClass( "fa-star" ).addClass( "fa-star-o" );
                $('.star{{$e-1}}').removeClass( "fa-star" ).addClass( "fa-star-o" );
                $('.star{{$e-2}}').removeClass( "fa-star" ).addClass( "fa-star-o" );
                $('.star{{$e-3}}').removeClass( "fa-star" ).addClass( "fa-star-o" );
                $('.star{{$e-4}}').removeClass( "fa-star" ).addClass( "fa-star-o" );
                $('.star{{$e-5}}').removeClass( "fa-star" ).addClass( "fa-star-o" );
                $('.star{{$e-6}}').removeClass( "fa-star" ).addClass( "fa-star-o" );
                $('.star{{$e-7}}').removeClass( "fa-star" ).addClass( "fa-star-o" );
                $('.star{{$e-8}}').removeClass( "fa-star" ).addClass( "fa-star-o" );
                $('.star{{$e-9}}').removeClass( "fa-star" ).addClass( "fa-star-o" );
            });
            @endfor
             $('.stop-rate').click(function(){
                $('.rate').css('display','none');
            });
            $('.start-rate').click(function(){
                $('.rate').css('display','block');
            })
        })
    </script>

</head>
<body>
<div class="" >
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
        <div  class="content-wrap" style="background: #874f91">
            <div class="content">
                <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Rate</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">

                                @for($r=1;$r<11;$r++)
                                    <form id="myform{{$r}}" action="" method="get">
                                        <span class="sub{{$r}}" style="cursor: pointer;"><i class="star{{$r}} fa fa-star-o fa-2x" aria-hidden="true"></i>{{$r}}</span>
                                        <input type="hidden" value="{{$r}}" name="rate">
                                        <input type="hidden" value="1" name="numofrates">
                                        <input type="hidden" class="namein" name="position">
                                    </form>
                                    @endfor

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
        <svg class="hidden">
            <!-- made with Icomoon.io, Icons from http://www.entypo.com/ and https://icomoon.io/ -->
            <defs>
                <symbol id="icon-lp-mini" viewBox="0 0 800 800">
                    <title>LP Mini</title>
                    <g style="fill: #181819; stroke: #141415; stroke-width: 1.5;">
                        <circle cx="400" cy="400" r="380" />
                        <circle cx="400" cy="400" r="370" />
                        <circle cx="400" cy="400" r="360" />
                        <circle cx="400" cy="400" r="350" />
                        <circle cx="400" cy="400" r="340" />
                        <circle cx="400" cy="400" r="330" />
                        <circle cx="400" cy="400" r="320" />
                        <circle cx="400" cy="400" r="310" />
                        <circle cx="400" cy="400" r="300" />
                        <circle cx="400" cy="400" r="290" />
                        <circle cx="400" cy="400" r="280" />
                        <circle cx="400" cy="400" r="270" />
                        <circle cx="400" cy="400" r="260" />
                        <circle cx="400" cy="400" r="250" />
                        <circle cx="400" cy="400" r="240" />
                        <circle cx="400" cy="400" r="230" />
                        <circle cx="400" cy="400" r="220" />
                        <circle cx="400" cy="400" r="210" />
                        <circle cx="400" cy="400" r="200" />
                    </g>
                </symbol>
            </defs>
        </svg><!-- SVGs -->
        <div class="view view--grid view--current">
            <header class="codrops-header">
                <h1><i class="fa fa-music" aria-hidden="true"></i> Music <span>The top 100 songs in Egypt</span></h1>
                @if(!Auth::guest())
                    <button class="btn btn-success start-rate">Start Rate</button>
                    <button class="btn btn-danger stop-rate">Stop Rate</button>
                @endif
            </header>
            <ul class="first">
            <li class="grid__item grid__item--deco grid__item--deco-1">
                <div class="grid__link" href="#album-2">
                    <div class="img-wrap img-wrap--grid">
                        <svg class="lp lp--grid">
                            <use xlink:href="#icon-lp-mini"></use>
                        </svg>
                        <img class="img img--grid" src="../img/{{DB::table('music')->where('position', '=', 1)->value('image_path')}}" alt="album2" />
                    </div>
                    <span class="year">1</span>
                </div>
                <h2 class="title">{{DB::table('music')->where('position', '=', 1)->value('name')}}</h2>
                <span class="rate rate1 rate-music" data-toggle="modal" data-target=".bd-example-modal-sm"><i class="fa fa-star-o fa-2x" aria-hidden="true"></i> rate</span>
                <span class="rating rate-music"><i class="fa fa-star fa-2x" aria-hidden="true"></i> {{DB::table('music')->where('position', '=', 1)->value('average')}}</span>
            </li>
            </ul>
            <ul class="grid">
                @for($j=2;$j<11;$j++)
                <li class="grid__item">
                    <div class="grid__link" href="#" >
                        <div class="img-wrap img-wrap--grid">
                            <svg class="lp lp--grid">
                                <use xlink:href="#icon-lp-mini"></use>
                            </svg>
                            <img class="img img--grid" src="../img/{{DB::table('music')->where('position', '=', $j)->value('image_path')}}" alt="album{{$j}}" />
                        </div>
                        <span class="year">{{$j}}</span>

                    </div>
                    <h2 class="title">{{DB::table('music')->where('position', '=', $j)->value('name')}}</h2>
                    <span class="rate rate{{$j}} rate-music" data-toggle="modal" data-target=".bd-example-modal-sm"><i class="fa fa-star-o fa-2x" aria-hidden="true"></i></span>
                    <span class="rating rate-music"><i class="fa fa-star fa-2x" aria-hidden="true"></i> {{DB::table('music')->where('position', '=', $j)->value('average')}}</span>
                </li>
                @endfor
            </ul>
            <!-- Related demos -->
            <div class="container p-t-md">
                <div class="row">
                    <div class="col-md-offset-2 col-md-8">
                        <div class="list-group m-b-md">
                            <ul class="list-group media-list media-list-stream">
                                @for($i=11;$i<101;$i++)
                                    <li class="list-group-item media p-a">
                                        <div class="media-left">
                                            <span class="icon  num">{{$i}}</span>
                                        </div>

                                        <div class="media-body">
                                            <small class="pull-right text-muted">
                                                {{--<img class="img-list" src="{{asset('img/starbucks-logo-trans.png')}}" alt="" width="40px" height="40px">--}}

                                                <span class="rate rate{{$i}} rate-button" data-toggle="modal" data-target=".bd-example-modal-sm"><i class="fa fa-star-o fa-2x" aria-hidden="true"></i>rate</span>
                                                <span class="rating"><i class="fa fa-star fa-2x" aria-hidden="true"></i> {{DB::table('music')->where('position', '=', $i)->value('average')}}</span>


                                            </small>
                                        <span class="heading">
                                            New Music
                                        </span>
                                        </div>
                                    </li>
                                @endfor
                            </ul>
                        </div>
                    </div>
                </div>
            </div>



        </div><!-- /view-grid -->
        <div class="view view--player">
            <button class="control-button control-button--back" aria-label="Back to album slideshow">
                <svg class="icon icon--arrow">
                    <use xlink:href="#icon-arrow"></use>
                </svg>
            </button>
            <div class="player-info">
                <h2 class="artist artist--player">Lena Glass</h2>
                <h3 class="title title--player">Blue Moments</h3>
                <span class="year year--player">1999</span>
            </div>
            <div class="player-stand">
                <div class="visualizer"></div>
                <span class="song"></span>
                <div class="player__controls">
                    <button class="player-button player-button--rotate" aria-label="Rotate LP">
                        <svg class="icon icon--rotate">
                            <use xlink:href="#icon-rotate"></use>
                        </svg>
                    </button>
                    <button class="player-button player-button--playstop" aria-label="Play or Stop">
                        <svg class="icon icon--play icon--hidden">
                            <use xlink:href="#icon-play"></use>
                        </svg>
                        <svg class="icon icon--stop">
                            <use xlink:href="#icon-stop"></use>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="player">
                <div class="player__element player__element--lp">
                    <div class="player__element-inner">
                        <svg class="player__svg-lp" viewBox="0 0 800 800">
                            <title>LP</title>
                            <path fill="#181819" d="M400,1C179.6,1,1,179.6,1,400s178.6,399,399,399s399-178.6,399-399S620.4,1,400,1zM400,409.8c-5.4,0-9.8-4.4-9.8-9.8s4.4-9.8,9.8-9.8s9.8,4.4,9.8,9.8S405.4,409.8,400,409.8z" />
                            <g stroke-width="1.5" stroke="#141415" fill="#181819">
                                <path d="M400,20C190.1,20,20,190.1,20,400s170.1,380,380,380s380-170.1,380-380S609.9,20,400,20z M399.2,414.8c-8.6,0-15.5-6.9-15.5-15.5s6.9-15.5,15.5-15.5s15.5,6.9,15.5,15.5S407.8,414.8,399.2,414.8z"/>
                                <path d="M400,30C195.7,30,30,195.6,30,400s165.7,370,370,370s370-165.7,370-370S604.3,30,400,30z M399.2,414.8c-8.6,0-15.5-6.9-15.5-15.5s6.9-15.5,15.5-15.5s15.5,6.9,15.5,15.5S407.8,414.8,399.2,414.8z"/>
                                <path d="M400,40C201.2,40,40,201.2,40,400s161.2,360,360,360s360-161.2,360-360S598.8,40,400,40z M399.2,414.8c-8.6,0-15.5-6.9-15.5-15.5s6.9-15.5,15.5-15.5s15.5,6.9,15.5,15.5S407.8,414.8,399.2,414.8z"/>
                                <path d="M400,50C206.7,50,50,206.7,50,400s156.7,350,350,350s350-156.7,350-350S593.3,50,400,50z M399.2,414.8c-8.6,0-15.5-6.9-15.5-15.5s6.9-15.5,15.5-15.5s15.5,6.9,15.5,15.5S407.8,414.8,399.2,414.8z"/>
                                <path d="M400,60C212.2,60,60,212.2,60,400s152.2,340,340,340s340-152.2,340-340S587.8,60,400,60z M399.2,414.8c-8.6,0-15.5-6.9-15.5-15.5s6.9-15.5,15.5-15.5s15.5,6.9,15.5,15.5S407.8,414.8,399.2,414.8z"/>
                                <path d="M400,70C217.8,70,70,217.8,70,400s147.8,330,330,330s330-147.8,330-330S582.2,70,400,70z M399.2,414.8c-8.6,0-15.5-6.9-15.5-15.5s6.9-15.5,15.5-15.5s15.5,6.9,15.5,15.5S407.8,414.8,399.2,414.8z"/>
                                <path d="M400,80C223.3,80,80,223.3,80,400s143.3,320,320,320s320-143.3,320-320S576.7,80,400,80z M399.2,414.8c-8.6,0-15.5-6.9-15.5-15.5s6.9-15.5,15.5-15.5s15.5,6.9,15.5,15.5S407.8,414.8,399.2,414.8z"/>
                                <path d="M400,90C228.8,90,90,228.8,90,400s138.8,310,310,310s310-138.8,310-310S571.2,90,400,90z M399.2,414.8c-8.6,0-15.5-6.9-15.5-15.5s6.9-15.5,15.5-15.5s15.5,6.9,15.5,15.5S407.8,414.8,399.2,414.8z"/>
                                <path d="M400,100c-165.7,0-300,134.3-300,300s134.3,300,300,300s300-134.3,300-300S565.7,100,400,100z M399.2,414.8c-8.6,0-15.5-6.9-15.5-15.5s6.9-15.5,15.5-15.5s15.5,6.9,15.5,15.5S407.8,414.8,399.2,414.8z"/>
                                <path d="M400,110c-160.2,0-290,129.8-290,290s129.8,290,290,290s290-129.8,290-290S560.2,110,400,110z M399.2,414.8c-8.6,0-15.5-6.9-15.5-15.5s6.9-15.5,15.5-15.5s15.5,6.9,15.5,15.5S407.8,414.8,399.2,414.8z"/>
                                <path d="M400,120c-154.6,0-280,125.4-280,280s125.4,280,280,280s280-125.4,280-280S554.6,120,400,120z M399.2,414.8c-8.6,0-15.5-6.9-15.5-15.5s6.9-15.5,15.5-15.5s15.5,6.9,15.5,15.5S407.8,414.8,399.2,414.8z"/>
                                <path d="M400,130c-149.1,0-270,120.9-270,270s120.9,270,270,270s270-120.9,270-270S549.1,130,400,130z M399.2,414.8c-8.6,0-15.5-6.9-15.5-15.5s6.9-15.5,15.5-15.5s15.5,6.9,15.5,15.5S407.8,414.8,399.2,414.8z"/>
                                <path d="M400,140c-143.6,0-260,116.4-260,260s116.4,260,260,260s260-116.4,260-260S543.6,140,400,140z M399.2,414.8c-8.6,0-15.5-6.9-15.5-15.5s6.9-15.5,15.5-15.5s15.5,6.9,15.5,15.5S407.8,414.8,399.2,414.8z"/>
                                <path d="M400,150c-138.1,0-250,111.9-250,250s111.9,250,250,250s250-111.9,250-250S538.1,150,400,150z M399.2,414.8c-8.6,0-15.5-6.9-15.5-15.5s6.9-15.5,15.5-15.5s15.5,6.9,15.5,15.5S407.8,414.8,399.2,414.8z"/>
                                <path d="M400,160c-132.5,0-240,107.5-240,240s107.5,240,240,240s240-107.5,240-240S532.5,160,400,160z M399.2,414.8c-8.6,0-15.5-6.9-15.5-15.5s6.9-15.5,15.5-15.5s15.5,6.9,15.5,15.5S407.8,414.8,399.2,414.8z"/>
                                <path d="M400,170c-127,0-230,103-230,230s103,230,230,230s230-103,230-230S527,170,400,170z M399.2,414.8c-8.6,0-15.5-6.9-15.5-15.5s6.9-15.5,15.5-15.5s15.5,6.9,15.5,15.5S407.8,414.8,399.2,414.8z"/>
                                <path d="M400,180c-121.5,0-220,98.5-220,220s98.5,220,220,220s220-98.5,220-220S521.5,180,400,180z M399.2,414.8c-8.6,0-15.5-6.9-15.5-15.5s6.9-15.5,15.5-15.5s15.5,6.9,15.5,15.5S407.8,414.8,399.2,414.8z"/>
                                <path d="M400,190c-116,0-210,94-210,210s94,210,210,210s210-94,210-210S516,190,400,190z M399.2,414.8c-8.6,0-15.5-6.9-15.5-15.5s6.9-15.5,15.5-15.5s15.5,6.9,15.5,15.5S407.8,414.8,399.2,414.8z"/>
                                <path d="M400,200c-110.5,0-200,89.5-200,200s89.5,200,200,200s200-89.5,200-200S510.5,200,400,200z M399.2,414.8c-8.6,0-15.5-6.9-15.5-15.5s6.9-15.5,15.5-15.5s15.5,6.9,15.5,15.5S407.8,414.8,399.2,414.8z"/>
                            </g>
                            <path id="cover" fill="#4bb749" opacity="0" d="M400,262.1c-76.1,0-137.9,61.7-137.9,137.9S323.9,537.9,400,537.9S537.9,476.1,537.9,400S476.1,262.1,400,262.1z M400,411.7c-6.4,0-11.7-5.2-11.7-11.7s5.2-11.7,11.7-11.7s11.7,5.2,11.7,11.7S406.4,411.7,400,411.7z" />
                            <defs>
                                <clipPath id="coverClip">
                                    <path fill="#4bb749" d="M400,262.1c-76.1,0-137.9,61.7-137.9,137.9S323.9,537.9,400,537.9S537.9,476.1,537.9,400S476.1,262.1,400,262.1z M400,411.7c-6.4,0-11.7-5.2-11.7-11.7s5.2-11.7,11.7-11.7s11.7,5.2,11.7,11.7S406.4,411.7,400,411.7z" />
                                </clipPath>
                            </defs>
                            <image xlink:href="img/album11.jpg" x="250" y="250" height="300px" width="300px" clip-path="url(#coverClip)"/>
                            <text class="lp-side-label lp-side-label--a" transform="matrix(1 0 0 1 381.8867 509.8047)" style="opacity:0.2; font-family:'Arial'; font-size:50.4557px;">A</text>
                            <text class="lp-side-label lp-side-label--b" transform="matrix(-1 0 0 1 418.2188 509.8047)" style="opacity:0.2; font-family:'Arial'; font-size:50.4557px;">B</text>
                        </svg>
                    </div>
                </div>
                <div class="player__element player__element--tonearm">
                    <svg class="player__svg-tonearm" >
                        <use xlink:href="#icon-tonearm"></use>
                    </svg>
                </div>
            </div><!-- /player -->
            <div class="effects">
                <!-- Realistic LP needle scratch effect toggle -->
                <button class="effects__button effects__button--vinyleffect effects__button--active" aria-label="Toggle Vinyl effect">
                    <svg class="icon icon--effect">
                        <use xlink:href="#icon-effect"></use>
                    </svg>
                </button>
                <!-- Impulse responses -->
                <div class="effects__irs">
                    <button class="effects__button">
                        <svg class="icon icon--touchthrough icon--ir-cathedral">
                            <use xlink:href="#icon-ir-cathedral"></use>
                        </svg>
                    </button>
                    <button class="effects__button">
                        <svg class="icon icon--touchthrough icon--ir-acoustic">
                            <use xlink:href="#icon-ir-acoustic"></use>
                        </svg>
                    </button>
                    <button class="effects__button">
                        <svg class="icon icon--touchthrough icon--ir-stadium">
                            <use xlink:href="#icon-ir-stadium"></use>
                        </svg>
                    </button>
                </div><!-- /effects__irs -->
            </div>
        </div><!-- /view--player -->
        <div class="view view--single">

        </div><!-- /view--single -->
    </div>
</div>
</div>
</div>
</div>


<script src="{{asset('js/classie.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
<script src="{{asset('js/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{asset('js/masonry.pkgd.min.js')}}"></script>
<script src="{{asset('js/abbey-load.js')}}"></script>
<script src="{{asset('js/main(2).js')}}"></script>
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/chart.js')}}"></script>
<script src="{{asset('js/toolkit.js')}}"></script>
<script src="{{asset('js/application.js')}}"></script>
<!--
- position expander: set opacity to 1, set top and left to the point where the mouse it. Animate to scale3d(1,1,1). To do the opposite, animate to scale3d(0,0,1) or scale(0.001,0.001,1).
- set class current of the respective single (set class single--current)
- then set view view--single to view view--single view--current
- to navigate, set new single to single--current and remove single--current from previous one (needs some adjustment)
-->
</body>
</html>
