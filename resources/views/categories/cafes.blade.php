<!DOCTYPE html>
<html lang="en" class="no-js">
<head>

    <meta charset="UTF-8" />
    <meta name="description" content="top cafes">
    <meta name="keywords" content="cafe,coffee,tea,drinks,sheshaa,قهوة">
    <meta name="author" content="Sameh Ramadan,Ahmed Elsamahy,Mohamed faramawy,mustafa hegazi,mustafa kamel,ahmed naser, abdallah khaled,amr yasser,mohamed eltabaey,sherif ezzat">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Top cafes</title>

    <link rel="shortcut icon" href="../favicon.ico">
    <link rel="stylesheet" type="text/css" href="{{asset('css/normalize.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('fonts/font-awesome-4.2.0/css/font-awesome.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/democafes.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/menu_topside.css')}}" />
    <link href="{{asset('css/application.css')}}" rel="stylesheet">
    <link href="{{asset('css/toolkit.css')}}" rel="stylesheet">

    <script src="{{asset('js/modernizr.custom.js')}}"></script>
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
<body class="skin-4">

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
<div class="container">
    <div id="top-10">
        <header class="codrops-header">
            <h1>
                <i class="fa fa-coffee" aria-hidden="true"></i>
                Caf&eacute;s <span>The top 100 caf&eacute;s in Egypt</span>
            </h1>
            @if(!Auth::guest())
                <button class="btn btn-success start-rate">Start Rate</button>
                <button class="btn btn-danger stop-rate">Stop Rate</button>
            @endif
        </header>

        <div class="dummy dummy-image">
            <div class="dummy-pois">
                <div class="tooltip tooltip-west">
                    <span class="tooltip-item"></span>
                    <span class="tooltip-content">
                        {{DB::table('cafes')->where('position', '=', 1)->value('name')}}
                        <br>
                    <span class="rate rate1 rate-button" data-toggle="modal" data-target=".bd-example-modal-sm">
                        <i class="fa fa-star-o fa-2x" aria-hidden="true"></i>
                        rate
                    </span>
                        <span class="rating">
                            <i class="fa fa-star fa-2x" aria-hidden="true"></i>
                            {{DB::table('cafes')->where('position', '=', 1)->value('average')}}
                        </span>
                    </span>
                </div>
                <div class="tooltip tooltip-east">
                    <span class="tooltip-item"></span>
                    <span class="tooltip-content">{{DB::table('cafes')->where('position', '=', 2)->value('name')}}
                    <br>
                    <span class="rate rate2 rate-button" data-toggle="modal" data-target=".bd-example-modal-sm"><i class="fa fa-star-o fa-2x" aria-hidden="true"></i>rate</span>
                                            <span class="rating"><i class="fa fa-star fa-2x" aria-hidden="true"></i> {{DB::table('cafes')->where('position', '=', 2)->value('average')}}</span>
                    </span>
                </div>
                <div class="tooltip tooltip-east">
                    <span class="tooltip-item"></span>
                    <span class="tooltip-content">{{DB::table('cafes')->where('position', '=', 3)->value('name')}}
                    <br>
                    <span class="rate rate3 rate-button" data-toggle="modal" data-target=".bd-example-modal-sm"><i class="fa fa-star-o fa-2x" aria-hidden="true"></i>rate</span>
                                            <span class="rating"><i class="fa fa-star fa-2x" aria-hidden="true"></i> {{DB::table('cafes')->where('position', '=', 3)->value('average')}}</span>
                    </span>
                </div>
                <div class="tooltip tooltip-east">
                    <span class="tooltip-item"></span>
                    <span class="tooltip-content">{{DB::table('cafes')->where('position', '=', 4)->value('name')}}
                    <br>
                    <span class="rate rate4 rate-button" data-toggle="modal" data-target=".bd-example-modal-sm"><i class="fa fa-star-o fa-2x" aria-hidden="true"></i>rate</span>
                                            <span class="rating"><i class="fa fa-star fa-2x" aria-hidden="true"></i>{{DB::table('cafes')->where('position', '=', 4)->value('average')}}</span>
                    </span>
                </div>
                <div class="tooltip tooltip-west">
                    <span class="tooltip-item"></span>
                    <span class="tooltip-content">{{DB::table('cafes')->where('position', '=', 5)->value('name')}}
                        <br>
                    <span class="rate rate5 rate-button" data-toggle="modal" data-target=".bd-example-modal-sm"><i class="fa fa-star-o fa-2x" aria-hidden="true"></i>rate</span>
                                            <span class="rating"><i class="fa fa-star fa-2x" aria-hidden="true"></i> {{DB::table('cafes')->where('position', '=', 5)->value('average')}}</span>
                    </span>
                </div>
                <div class="tooltip tooltip-west">
                    <span class="tooltip-item"></span>
                    <span class="tooltip-content">{{DB::table('cafes')->where('position', '=', 6)->value('name')}}
                    <br>
                    <span class="rate rate6 rate-button" data-toggle="modal" data-target=".bd-example-modal-sm"><i class="fa fa-star-o fa-2x" aria-hidden="true"></i>rate</span>
                                            <span class="rating"><i class="fa fa-star fa-2x" aria-hidden="true"></i> {{DB::table('cafes')->where('position', '=', 6)->value('average')}}</span>
                    </span>
                </div>
                <div class="tooltip tooltip-east">
                    <span class="tooltip-item"></span>
                    <span class="tooltip-content">{{DB::table('cafes')->where('position', '=', 7)->value('name')}}
                    <br>
                    <span class="rate rate7 rate-button" data-toggle="modal" data-target=".bd-example-modal-sm"><i class="fa fa-star-o fa-2x" aria-hidden="true"></i>rate</span>
                                            <span class="rating"><i class="fa fa-star fa-2x" aria-hidden="true"></i> {{DB::table('cafes')->where('position', '=', 7)->value('average')}}</span>
                    </span>
                </div>
                <div class="tooltip tooltip-east">
                    <span class="tooltip-item"></span>
                    <span class="tooltip-content">{{DB::table('cafes')->where('position', '=', 8)->value('name')}}
                    <br>
                    <span class="rate rate8 rate-button" data-toggle="modal" data-target=".bd-example-modal-sm"><i class="fa fa-star-o fa-2x" aria-hidden="true"></i>rate</span>
                                            <span class="rating"><i class="fa fa-star fa-2x" aria-hidden="true"></i> {{DB::table('cafes')->where('position', '=', 8)->value('average')}}</span>
                    </span>
                </div>
                <div class="tooltip tooltip-east">
                    <span class="tooltip-item"></span>
                    <span class="tooltip-content">{{DB::table('cafes')->where('position', '=', 9)->value('name')}}
                    <br>
                    <span class="rate rate9 rate-button" data-toggle="modal" data-target=".bd-example-modal-sm"><i class="fa fa-star-o fa-2x" aria-hidden="true"></i>rate</span>
                                            <span class="rating"><i class="fa fa-star fa-2x" aria-hidden="true"></i> {{DB::table('cafes')->where('position', '=', 9)->value('average')}}</span>
                    </span>
                </div>
                <div class="tooltip tooltip-east">
                    <span class="tooltip-item"></span>
                    <span class="tooltip-content">{{DB::table('cafes')->where('position', '=', 10)->value('name')}}
                    <br>
                    <span class="rate rate10 rate-button" data-toggle="modal" data-target=".bd-example-modal-sm"><i class="fa fa-star-o fa-2x" aria-hidden="true"></i>rate</span>
                                            <span class="rating"><i class="fa fa-star fa-2x" aria-hidden="true"></i> {{DB::table('cafes')->where('position', '=', 10)->value('average')}}</span>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
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
                                            <span class="rating"><i class="fa fa-star fa-2x" aria-hidden="true"></i> </span>


                                        </small>
                                        <span class="heading">
                                            New café
                                        </span>
                                    </div>
                                </li>
                            @endfor
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Related demos -->


</div><!-- /container -->

</div>
</div>
</div>
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/chart.js')}}"></script>
<script src="{{asset('js/toolkit.js')}}"></script>
<script src="{{asset('js/application.js')}}"></script>
<script src="{{asset('js/classie.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/jquery-3.1.1.min.js')}}"></script>
<script src="">
    $(document).ready(function(){
        $('.rate').click(function(){
           $('.rating').css('display','none');
        })
    })
</script>
</body>
</html>
