<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="top100">
    <meta name="keywords" content="مطعم,فلم,مسلسل,كافيه,مشروبات,سياحة,موبايل,اغناي,كتب,كتاب,اكل,شرب,اغنية,اجنبي,برامج,app,song.resturant,drink,torist,mobile,book,movies,series">
    <meta name="author" content="Sameh Ramadan,Ahmed Elsamahy,Mohamed faramawy,mustafa hegazi,mustafa kamel,ahmed naser, abdallah khaled,amr yasser,mohamed eltabaey,sherif ezzat">
    <title>Top 100 | Home Page</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="">

    <link rel="stylesheet" type="text/css" href="{{asset('css/normalize.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('fonts/font-awesome-4.2.0/css/font-awesome.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/menu_topside(2).css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/menu.css')}}" />
    <link href="/css/app.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!--[if IE]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]--><script>document.documentElement.className = 'js';</script>
    <script>
        window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
        ]); ?>
    </script>
    <script>
        $(document).ready(function () {


        var Input = $('.morphsearch-input').val();


            $.ajax({
                url:'Ajax',
                type:'get',
                data:{
                    input:Input
                },
                success:function(data){
                    $('.aja').val(data);
                }
            });

        });

    </script>
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
                <div id="resizeSlider" class="content">


                    <div id="morphsearch" class="morphsearch">
                        <form class="morphsearch-form">
                            <input class="morphsearch-input" type="search" placeholder="Search..." name="input" />
                            <button class="morphsearch-submit" type="submit">Search</button>
                        </form>
                        <div class="morphsearch-content">
                            <div class="dummy-column">
                                <h2>Suggested</h2>
                                <a class="dummy-media-object aja" href="categories/cafes">
                                   <i class="fa fa-coffee" aria-hidden="true"></i>
                                    <h3>Cafés</h3>
                                </a>
                                <a class="dummy-media-object" href="categories/movies">
                                    <i class="fa fa-film" aria-hidden="true"></i>
                                    <h3>Movies</h3>
                                </a>
                                <a class="dummy-media-object" href="categories/music">
                                    <i class="fa fa-music" aria-hidden="true"></i>
                                    <h3>Music</h3>
                                </a>
                                <a class="dummy-media-object" href="categories/mobiles">
                                    <i class="fa fa-tablet" aria-hidden="true"></i>
                                    <h3>Mobiles</h3>
                                </a>
                            </div>
                            <div class="dummy-column dummy1">
                                <h2>Popular</h2>
                                <a class="dummy-media-object aja" href="categories/cafes">
                                    <i class="fa fa-coffee" aria-hidden="true"></i>
                                    <h3>Cafés</h3>
                                </a>
                                <a class="dummy-media-object" href="categories/movies">
                                    <i class="fa fa-film" aria-hidden="true"></i>
                                    <h3>Movies</h3>
                                </a>
                                <a class="dummy-media-object" href="categories/music">
                                    <i class="fa fa-music" aria-hidden="true"></i>
                                    <h3>Music</h3>
                                </a>
                                <a class="dummy-media-object" href="categories/mobiles">
                                    <i class="fa fa-tablet" aria-hidden="true"></i>
                                    <h3>Mobiles</h3>
                                </a>
                            </div>
                            <div class="dummy-column dummy1">
                                <h2>Recent</h2>
                                <a class="dummy-media-object aja" href="categories/cafes">
                                    <i class="fa fa-coffee" aria-hidden="true"></i>
                                    <h3>Cafés</h3>
                                </a>
                                <a class="dummy-media-object" href="categories/movies">
                                    <i class="fa fa-film" aria-hidden="true"></i>
                                    <h3>Movies</h3>
                                </a>
                                <a class="dummy-media-object" href="categories/music">
                                    <i class="fa fa-music" aria-hidden="true"></i>
                                    <h3>Music</h3>
                                </a>
                                <a class="dummy-media-object" href="categories/mobiles">
                                    <i class="fa fa-tablet" aria-hidden="true"></i>
                                    <h3>Mobiles</h3>
                                </a>
                            </div>
                        </div>
                        <span class="morphsearch-close"></span>
                        <div class="overlay"></div>
                    </div>

                <div class="dummy-fixed">
                    @if (Auth::guest())
                    <a id="sign-up" href="/register">
                        <img class="down" src="{{asset('img/new user.png')}}" alt="" width="70px" height="90px">
                    </a>
                    <div class="checkout">
                        <a class="checkout__button" href="">
                                <span class="checkout__text">
                                    <span class=" checkout__text-inner checkout__initial-text">Log In</span>
                                </span>
                        </a>
                        <div class="checkout__order">
                            <div class="checkout__order-inner">
                                <div class="checkout__summary input-container">

                                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                                        {{ csrf_field() }}

                                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                            <label for="email" class="col-md-4 control-label">E-Mail</label>

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
                                <button class="checkout__close checkout__cancel"><i class="icon fa fa-fw fa-close"></i>Close</button>
                            </div>
                        </div>
                    </div>
                    @endif
                        @if (!Auth::guest())
                    <span class="copyrights">Copyright © 2017 Top 100. All rights reserved</span>
                        @endif
                    <a href=""><div class="checkout__count">
                            <i class="fa fa-youtube-play" aria-hidden="true"></i>
                        </div></a>
                    <a href=""><div class=" one">
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                        </div></a>
                    <a href=""><div class=" two">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                        </div></a>
                    <a href="">
                        <div class=" three">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                        </div>
                    </a>
                </div>
                </div>
            </div>
    </div>
<script src="{{asset('js/classie.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
<script src="{{asset('js/demo2.js')}}"></script>
<script src="/js/app.js"></script>
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/jquery-3.1.1.min.js')}}"></script>
<script src="{{asset('js/clipboard.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/resize-slider-min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/example.js')}}"></script>
<script type="text/javascript">

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-36251023-1']);
    _gaq.push(['_setDomainName', 'jqueryscript.net']);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();

</script>

<script src="{{asset('js/classiee.js')}}"></script>
<script>
    (function() {
        var dummy = document.getElementById('dummy-grid');
        [].slice.call( document.querySelectorAll( '.checkout' ) ).forEach( function( el ) {
            var openCtrl = el.querySelector( '.checkout__button' ),
                    closeCtrl = el.querySelector( '.checkout__cancel' );

            openCtrl.addEventListener( 'click', function(ev) {
                ev.preventDefault();
                classie.add( el, 'checkout--active' );
                classie.add( dummy, 'dummy-grid--highlight' );
            } );

            closeCtrl.addEventListener( 'click', function() {
                classie.remove( el, 'checkout--active' );
                classie.remove( dummy, 'dummy-grid--highlight' );
            } );
        } );
    })();
</script>


<script src="{{asset('js/classieee.js')}}"></script>
<script>
    (function() {
        var morphSearch = document.getElementById( 'morphsearch' ),
                input = morphSearch.querySelector( 'input.morphsearch-input' ),
                ctrlClose = morphSearch.querySelector( 'span.morphsearch-close' ),
                isOpen = isAnimating = false,
        // show/hide search area
                toggleSearch = function(evt) {
                    // return if open and the input gets focused
                    if( evt.type.toLowerCase() === 'focus' && isOpen ) return false;

                    var offsets = morphsearch.getBoundingClientRect();
                    if( isOpen ) {
                        classie.remove( morphSearch, 'open' );

                        // trick to hide input text once the search overlay closes
                        // todo: hardcoded times, should be done after transition ends
                        if( input.value !== '' ) {
                            setTimeout(function() {
                                classie.add( morphSearch, 'hideInput' );
                                setTimeout(function() {
                                    classie.remove( morphSearch, 'hideInput' );
                                    input.value = '';
                                }, 300 );
                            }, 500);
                        }

                        input.blur();
                    }
                    else {
                        classie.add( morphSearch, 'open' );
                    }
                    isOpen = !isOpen;
                };

        // events
        input.addEventListener( 'focus', toggleSearch );
        ctrlClose.addEventListener( 'click', toggleSearch );
        // esc key closes search overlay
        // keyboard navigation events
        document.addEventListener( 'keydown', function( ev ) {
            var keyCode = ev.keyCode || ev.which;
            if( keyCode === 27 && isOpen ) {
                toggleSearch(ev);
            }
        } );


        /***** for demo purposes only: don't allow to submit the form *****/
        morphSearch.querySelector( 'button[type="submit"]' ).addEventListener( 'click', function(ev) { ev.preventDefault(); } );
    })();

</script>


</body>
</html>