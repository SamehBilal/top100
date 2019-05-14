<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/normalize.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/demoabout.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/menu_topside.css')}}" />
    <link rel="stylesheet" href="{{asset('fonts/font-awesome-4.2.0/css/font-awesome.min.css')}}">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,700' rel='stylesheet' type='text/css' />

    <script type="text/javascript" src="{{asset('js/modernizr.custom.79639.js')}}"></script>
    <!--[if lte IE 8]><style>.main{display:none;} .support-note .note-ie{display:block;}</style><![endif]-->

    <script src="{{asset('js/modernizr.custom.js')}}"></script>

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
        <div  class="content">
            <div class="container">
                <header>
                    <h1>About Us <span>“No destination is not reachable”</span></h1>
                </header>

                <section class="col-2 ss-style-doublediagonal">
                    <div class="column text">
                        <h2>Who Are We ?</h2>
                        <p>Our mission is to limit the confusion that happens as a result of the variety of options that comes with every decision,
                            by giving everyone the power of sharing features and cons of their daily use in different categories such as restaurants, drinks, places and more</p>
                    </div>
                    <div class="column">
                        <span class="icon icon-bullhorn"></span>
                    </div>
                </section>
                <svg id="clouds" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 100 100" preserveAspectRatio="none">
                    <path d="M-5 100 Q 0 20 5 100 Z
						 M0 100 Q 5 0 10 100
						 M5 100 Q 10 30 15 100
						 M10 100 Q 15 10 20 100
						 M15 100 Q 20 30 25 100
						 M20 100 Q 25 -10 30 100
						 M25 100 Q 30 10 35 100
						 M30 100 Q 35 30 40 100
						 M35 100 Q 40 10 45 100
						 M40 100 Q 45 50 50 100
						 M45 100 Q 50 20 55 100
						 M50 100 Q 55 40 60 100
						 M55 100 Q 60 60 65 100
						 M60 100 Q 65 50 70 100
						 M65 100 Q 70 20 75 100
						 M70 100 Q 75 45 80 100
						 M75 100 Q 80 30 85 100
						 M80 100 Q 85 20 90 100
						 M85 100 Q 90 50 95 100
						 M90 100 Q 95 25 100 100
						 M95 100 Q 100 15 105 100 Z">
                    </path>
                </svg>

                <section class="main">
                    <h1>Our Team</h1>
                    <ul class="ch-grid">
                        <li>
                            <div class="ch-item">
                                <div class="ch-info">
                                    <h3>Sameh R. Bilal</h3>
                                    <p>
                                        <a href="mailto: sameh.bilal@outlook.com">
                                            <i class="fa fa-envelope fa-2x" aria-hidden="true"></i>
                                        </a>
                                    </p>
                                </div>
                                <div class="ch-thumb ch-img-1"></div>
                            </div>
                        </li>
                        <li>
                            <div class="ch-item">
                                <div class="ch-info">
                                    <h3>Mohamed Faramawy</h3>
                                    <p>
                                        <a href="mailto: mohamed.faramawy@outlook.com">
                                            <i class="fa fa-envelope fa-2x" aria-hidden="true"></i>
                                        </a>
                                    </p>
                                </div>
                                <div class="ch-thumb ch-img-2"></div>
                            </div>
                        </li>
                        <li>
                            <div class="ch-item">
                                <div class="ch-info">
                                    <h3>Amr Yasser</h3>
                                    <p>
                                        <a href="mailto: amryasser21@outlook.com">
                                            <i class="fa fa-envelope fa-2x" aria-hidden="true"></i>
                                        </a>
                                    </p>
                                </div>
                                <div class="ch-thumb ch-img-3"></div>
                            </div>
                        </li>
                        <li>
                            <div class="ch-item">
                                <div class="ch-info">
                                    <h3>Sherif Salman</h3>
                                    <p>
                                        <a href="http://drbl.in/eFED">
                                            <i class="fa fa-envelope fa-2x" aria-hidden="true"></i>
                                        </a>
                                    </p>
                                </div>
                                <div class="ch-thumb ch-img-4"></div>
                            </div>
                        </li>
                        <li>
                            <div class="ch-item">
                                <div class="ch-info">
                                    <h3>Ahmed Nasser</h3>
                                    <p>
                                        <a href="mailto: Ahmed_Nasser90@outlook.com">
                                            <i class="fa fa-envelope fa-2x" aria-hidden="true"></i>
                                        </a>
                                    </p>
                                </div>
                                <div class="ch-thumb ch-img-5"></div>
                            </div>
                        </li>
                        <li>
                            <div class="ch-item">
                                <div class="ch-info">
                                    <h3>Abdallah Khaled</h3>
                                    <p>
                                        <a href="mailto: abdalla.khaled45@yahoo.com">
                                            <i class="fa fa-envelope fa-2x" aria-hidden="true"></i>
                                        </a>
                                    </p>
                                </div>
                                <div class="ch-thumb ch-img-6"></div>
                            </div>
                        </li>
                        <br>
                        <li>
                            <div class="ch-item">
                                <div class="ch-info">
                                    <h3>Mustafa Hegazi</h3>
                                    <p>
                                        <a href="mailto: x.mostafa@outlook.com">
                                            <i class="fa fa-envelope fa-2x" aria-hidden="true"></i>
                                        </a>
                                    </p>
                                </div>
                                <div class="ch-thumb ch-img-8"></div>
                            </div>
                        </li>
                        <li>
                            <div class="ch-item">
                                <div class="ch-info">
                                    <h3>Ahmed El Samahy</h3>
                                    <p>
                                        <a href="mailto: ahmeddylhan@hotmail.com">
                                            <i class="fa fa-envelope fa-2x" aria-hidden="true"></i>
                                        </a>
                                    </p>
                                </div>
                                <div class="ch-thumb ch-img-9"></div>
                            </div>
                        </li>
                        <li>
                            <div class="ch-item">
                                <div class="ch-info">
                                    <h3>Mostafa Kamel</h3>
                                    <p>
                                        <a href="mailto: the_matrix@ymail.com">
                                            <i class="fa fa-envelope fa-2x" aria-hidden="true"></i>
                                        </a>
                                    </p>
                                </div>
                                <div class="ch-thumb ch-img-7"></div>
                            </div>
                        </li>
                        <li>
                            <div class="ch-item">
                                <div class="ch-info">
                                    <h3>Mohameed El Tabey</h3>
                                    <p>
                                        <a href="mailto: mohamed.eltabaey@outlook.com">
                                            <i class="fa fa-envelope fa-2x" aria-hidden="true"></i>
                                        </a>
                                    </p>
                                </div>
                                <div class="ch-thumb ch-img-10"></div>
                            </div>
                        </li>
                    </ul>
                </section>
                <section class="related">
                    <footer id="footer">
                        <p>Follow us</p>
                        <div id="social" class="social-area ">
                            <a href="https://www.facebook.com/">
                                <i class="fa fa-facebook fa-5x" aria-hidden="true"></i>
                            </a>
                            <a  href="#">
                                <i class="fa fa-twitter fa-5x" aria-hidden="true"></i>
                            </a>
                            <a  href="#">
                                <i class="fa fa-instagram fa-5x" aria-hidden="true"></i>
                            </a>
                        </div>
                        <br>
                        <div class="copy-rights">
                            2017, All Rights Reserved.
                        </div>
                    </footer>
                </section>
            </div>
        </div>
    </div>
</div>
<script src="{{asset('js/classie.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
</body>
</html>