<!doctype html>
<!--[if lt IE 7]>		<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>			<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>			<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->	<html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PWM Pinturas e Reformas Ltda.</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="stylesheet" href="{{ url('public/assets/all/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('public/assets/all/css/font-awesome.min.css') }}">
    <!--<link rel="stylesheet" href="css/flaticon.css">-->
    <link rel="stylesheet" href="{{ url('public/assets/all/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ url('public/assets/all/css/owl.theme.css') }}">
    <link rel="stylesheet" href="{{ url('public/assets/all/css/transitions.css') }}">
    <!-- Add fancyBox main JS and CSS files -->
    <link rel="stylesheet" type="text/css" href="{{ url('public/assets/all/css/fancybox/jquery.fancybox.css?v=2.1.5') }}" media="screen" />
    <link rel="stylesheet" href="{{ url('public/assets/all/css/main.css') }}">
    <link rel="stylesheet" href="{{ url('public/assets/all/css/color.css') }}">
    <link rel="stylesheet" href="{{ url('public/assets/all/css/responsive.css') }}">
    <!--<script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>-->

    <!-- JQuery JS-->
    <script src="{{ url('public/assets/all/js/jquery.min.js') }}"></script>
    <script src="{{ url('public/assets/all/js/gmap3.min.js') }}"></script>
    {{--<script src="https://cdn.jsdelivr.net/gmap3/7.2.0/gmap3.min.js"></script>
    <script src="http://maps.google.com/maps/api/js"></script>--}}
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBYSJ0cXHHsDZecPmGMrxx4rCplxF5xqpc&region=GB"></script>


</head>
<body>
    <!--[if lt IE 8]>
    <p class="browserupgrade">Você está usando um navegador <strong>desatualizado</strong>. Por favor <a href="http://browsehappy.com/">atualize seu navegador</a> para melhorar sua experiência.</p>
    <![endif]-->
    <!--************************************
            Preloader Inicio
    *************************************-->
    <div class="preloader">
        <div id="status"></div>
        <div id="loading-center">
            <div id="loading-center-absolute">
                <div class="object" id="object_four"></div>
                <div class="object" id="object_three"></div>
                <div class="object" id="object_two"></div>
                <div class="object" id="object_one"></div>

            </div>
        </div>
    </div>
    <!--************************************
            Preloader Fim
    *************************************-->
    <!--************************************
        Wrapper Start
    *************************************-->
    <div id="wrapper">

        <!--************************************
            Banner Start
        *************************************-->
        <div class="tg-banner tg-haslayout parallax-window" data-appear-top-offset="600" data-parallax="scroll" data-image-src="{{ url("public/assets/site/images/page-banner-img/img-01.png") }}">
            <div class="tg-banner-holder">
                <div class="container">
                    <div class="tg-displaytable">
                        <div class="tg-displaytablecell">
                            <div class="banner-content tg-haslayout">
                                <h1>{{ $pagina }}</h1>
                                <ol class="tg-breadcrumb">
                                    <li><a href="{{ url("/") }}">Home</a></li>
                                    <li class="active">{{ $pagina }}</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--************************************
            Banner End
        *************************************-->
        <!--************************************
            Header Start
        *************************************-->
        <header id="header" class="tg-haslayout">
            <div class="container">
                <strong class="logo">
                    <a href="{{ url("/") }}">
                        <img src="{{ url('public/assets/site/images/logo.png') }}" alt="Constructioner">
                    </a>
                </strong>
                <div class="navigation-area">
                    {{--
                    <ul class="add-nav">
                        <li><a data-toggle="modal" data-target=".login-modalbox" href="#">Login</a></li>
                        <li><a data-toggle="modal" data-target=".signup-modalbox" href="#">Register</a></li>
                    </ul>
                    --}}
                    <nav id="nav">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul>
                                <li @if ('Home' == $pagina) class="current-menu-item" @endif><a href="{{ url("/") }}">Home</a></li>
                                <li @if ('Sobre' == $pagina) class="current-menu-item" @endif><a href="{{ url("/sobre") }}">Sobre</a></li>
                                <li @if ('Serviços' == $pagina) class="current-menu-item" @endif><a href="{{ url("/servicos") }}">Serviços</a></li>
                                <li @if ('Portfolio' == $pagina) class="current-menu-item" @endif><a href="{{ url("/portfolio") }}">Portfólio</a></li>
                                <li @if ('Dicas' == $pagina) class="current-menu-item" @endif><a href="{{ url("/dicas") }}">Dicas</a></li>
                                <li @if ('Contato' == $pagina) class="current-menu-item" @endif><a href="{{ url("/contato") }}">Contato</a></li>
                                {{--<li>
                                    <a href="#">Portfólio</a>
                                    <ul>
                                        <li class="current-menu-item"><a href="portfolio-grid.html">Portfolio grid</a></li>
                                        <li><a href="portfolio-list.html">Portfolio list</a></li>
                                        <li><a href="portfolio-detail.html">Portfolio Detail</a></li>
                                    </ul>
                                </li>--}}
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </header>
        <!--************************************
                Header End
        *************************************-->

        @yield('content')

        <!--************************************
            Rodapé Inicio
        *************************************-->
        <footer id="footer" class="tg-haslayout">
            <div class="tg-main-section">
                <div class="container">
                    <div class="row">
                        <div class="tg-cols">
                            <div class="col-sm-6 tg-colfirst-bgcolor">
                                <div class="tg-col">
                                    <div class="tg-theme-heading">
                                        <h3>Sobre Nós</h3>
                                    </div>
                                    <strong class="logo">
                                        <a href="{{ url("/") }}">
                                            <img src="{{ url('public/assets/site/images/logo2.png') }}" alt="constructioner">
                                        </a>
                                    </strong>
                                    <div class="tg-description">
                                        <p>A PWM é uma empresa especializada em serviços de reformas e reparos: pedreiro, pintor, eletricista, encanador, gesseiro e mais. Confira nossos serviços. Seja Bem-vindo!</p>
                                    </div>
                                    <ul class="tg-social-icon">
                                        <li><a href="#"><i class="fa fa-facebook fa-2x"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin fa-2x"></i></a></li>
                                        <!--<li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                        <li><a href="#"><i class="fa fa-tumblr"></i></a></li>-->
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-6 tg-collast-bgcolor">
                                <div class="tg-col">
                                    <div class="tg-theme-heading">
                                        <h3>Entre em Contato</h3>
                                    </div>
                                    <div class="contact-info">
                                        <ul>
                                            <li>
                                                <span>Endereço:</span>
                                                <span>Rua Manhuaçu, 427, 16 - Rio de Janeiro/RJ</span>
                                            </li>
                                            <li>
                                                <span>Telefones:</span>
												<span>
													<i>+55 21 96487-9499 - Celular 1</i>
													<i>+55 21 99671-7503 - Celular 2</i>
													<i>+55 21 98015-8555 - Celular 3</i>
													<i>+55 21 2428-2315 - Fax</i>
												</span>
                                            </li>
                                            <li>
                                                <span>Email:</span>
												<span>
													<i><a href="#">pwm@pwmreformas.com.br</a></i>
												</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tg-haslayout tg-footerbar-color">
                <div class="container">
                    <div class="tg-footer-bar">
                        <nav class="footer-nav">
                            <ul>
                                <li><a href="{{ url("/") }}">Home</a></li>
                                <li><a href="{{ url("/sobre") }}">Sobre</a></li>
                                <li><a href="{{ url("/servicos") }}">Serviços</a></li>
                                <li><a href="{{ url("/portfolio") }}">Portfólio</a></li>
                                <li><a href="{{ url("/dicas") }}">Dicas</a></li>
                                <li><a href="{{ url("/contato") }}">Contato</a></li>
                            </ul>
                        </nav>
                        <span class="copyright">&copy; 2016 | Todos os Direitos Reservados</span>
                    </div>
                </div>
            </div>
        </footer>
        <!--************************************
                Rodapé Fim
        *************************************-->
    </div>
    <!--************************************
            Wrapper End
    *************************************-->
    <!--************************************
            Popup Start
    *************************************-->
    {{--
    <div class="modal fade login-modalbox" tabindex="-1" role="dialog">
        <div class="tg-login-modalbox">
            <h2>LOGIN FORM</h2>
            <form class="login-form">
                <fieldset>
                    <div class="form-group">
                        <i class="fa fa-envelope"></i>
                        <input type="email" placeholder="Email" class="form-control">
                    </div>
                    <div class="form-group">
                        <i class="fa fa-lock"></i>
                        <input type="text" placeholder="Name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>
                            <input type="checkbox">
                            <em>Remember Me</em>
                        </label>
                        <a class="forgetpassword" href="#">
                            <em>Forgot Password</em>
                            <i class="fa fa-question-circle"></i>
                        </a>
                    </div>
                    <button class="tg-theme-btn tg-theme-btn-lg" type="submit">login</button>
                </fieldset>
            </form>
            <p>Not a Member? <a href="#">Create an Account</a></p>
        </div>
    </div>
    <div class="modal fade signup-modalbox" tabindex="-1" role="dialog">
        <div class="tg-signup-modalbox">
            <h2>REGISTRATION FORM</h2>
            <form class="login-form">
                <fieldset>
                    <div class="form-group">
                        <input type="text" placeholder="Username" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="password" placeholder="Password" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="password" placeholder="Confirm Password" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="email" placeholder="Email Address" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="First Name" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="Last Name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label><input type="checkbox"><em>I agree with the terms and conditions</em></label>
                    </div>
                    <button class="tg-theme-btn tg-theme-btn-lg" type="submit">Create an Account</button>
                </fieldset>
            </form>
        </div>
    </div>
    --}}
    <!--************************************
            Popup End
    *************************************-->


    <script src="{{ url('public/assets/all/js/bootstrap.min.js') }}"></script>
    <script src="{{ url('public/assets/all/js/jquery.bxslider.js') }}"></script>
    <script src="{{ url('public/assets/all/js/jquery.flexslider.js') }}"></script>
    <script src="{{ url('public/assets/all/js/jquery.prettyPhoto.js') }}"></script>
    <script src="{{ url('public/assets/all/js/jquery.appear.js') }}"></script>
    <script src="{{ url('public/assets/all/js/parallax.js') }}"></script>
    <!--<script src="js/classie.js"></script>
    <script src="js/gnmenu.js"></script>-->
    <script src="{{ url('public/assets/all/js/isotope.pkgd.js') }}"></script>
    <script src="{{ url('public/assets/all/js/owl.carousel.js') }}"></script>
    <script type="text/javascript" src="{{ url('public/assets/all/js/jquery.fancybox.pack.js?v=2.1.5') }}"></script>
    <script src="{{ url('public/assets/all/js/main.js') }}"></script>
    </body>
</html>