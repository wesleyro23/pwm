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

    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="{{ url('public/assets/all/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('public/assets/all/css/prettyPhoto.css') }}">
    <!--Icones Font Awesome-->
    <link rel="stylesheet" href="{{ url('public/assets/all/css/font-awesome.min.css') }}">
    {{--<link rel="stylesheet" href="{{ url('public/assets/all/css/flaticon.css') }}">--}}
    <!--Carrossel do Banner Css-->
    <link rel="stylesheet" href="{{ url('public/assets/all/css/owl.carousel.css') }}">
    <!--Carrossel do Banner Seta Css-->
    <link rel="stylesheet" href="{{ url('public/assets/all/css/owl.theme.css') }}">
    <!--Efeito de Transição do Topo-->
    <link rel="stylesheet" href="{{ url('public/assets/all/css/transitions.css') }}">
    <!-- Add fancyBox main JS and CSS files -->
    <link rel="stylesheet" type="text/css" href="{{ url('public/assets/all/css/fancybox/jquery.fancybox.css?v=2.1.5') }}" media="screen" />
    <!--Main CSS-->
    <link rel="stylesheet" href="{{ url('public/assets/all/css/main.css') }}">
    <!--Personaliza as Cores do Tema-->
    <link rel="stylesheet" href="{{ url('public/assets/all/css/color.css') }}">
    <!--Torna o Layout Responsivo-->
    <link rel="stylesheet" href="{{ url('public/assets/all/css/responsive.css') }}">

    <!-- JQuery JS-->
    <script src="{{ url('public/assets/all/js/jquery.min.js') }}"></script>
    {{--<script src="{{ url('public/assets/all/js/snap.svg-min.js') }}"></script>--}}
    {{--<script src="{{ url('public/assets/all/js/modernizr-2.8.3-respond-1.4.2.min.js') }}"></script>--}}

</head>
<body class="home">
    <!--[if lt IE 8]>
    <p class="browserupgrade">Você está usando um navegador <strong>desatualizado</strong>. Por favor <a href="http://browsehappy.com/">atualize seu navegador</a> para melhorar sua experiência.</p>
    <![endif]-->
    <!--************************************
            Preloader Start
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
            Preloader END
    *************************************-->
    <!--************************************
        Wrapper Start
    *************************************-->
    <div id="wrapper">

        <!--************************************
        Header Start
        *************************************-->
        <header id="header" class="tg-haslayout" data-spy="affix" data-offset-top="10">
            <div class="container">
                <strong class="logo">
                    <a href="{{ url('/') }}">
                        <img src="{{ url('public/assets/site/images/logo.png') }}" alt="PWM Pinturas e Reformas">
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
                                <li class="current-menu-item"><a href="{{ url('/') }}">Home</a></li>
                                <li><a href="{{ url("/sobre") }}">Sobre</a></li>
                                <li><a href="{{ url("/servicos") }}">Serviços</a></li>
                                <li><a href="{{ url("/portfolio") }}">Portfólio</a></li>
                                <li><a href="{{ url("/dicas") }}">Dicas</a></li>
                                <li><a href="{{ url("/contato") }}">Contato</a></li>
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
            Modal Login Inicio
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
            Modal Login Fim
    *************************************-->

    <!-- Bootstrap JS-->
    <script src="{{ url('public/assets/all/js/bootstrap.min.js') }}"></script>
    <script src="{{ url('public/assets/all/js/jquery.bxslider.js') }}"></script>
    <script src="{{ url('public/assets/all/js/jquery.flexslider.js') }}"></script>
    <script src="{{ url('public/assets/all/js/jquery.prettyPhoto.js') }}"></script>
    <script src="{{ url('public/assets/all/js/jquery.appear.js') }}"></script>
    <!--Parallax Imagem Fundo-->
    <script src="{{ url('public/assets/all/js/parallax.js') }}"></script>
    <script src="{{ url('public/assets/all/js/isotope.pkgd.js') }}"></script>
    <!--Carrossel do Banner JS-->
    <script src="{{ url('public/assets/all/js/owl.carousel.js') }}"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <!--Perloader-->
    <script src="{{ url('public/assets/all/js/gmap3.min.js') }}"></script>
    {{--<script src="{{ url('public/assets/all/js/classie.js') }}"></script>--}}
    {{--<script src="{{ url('public/assets/all/js/gnmenu.js') }}"></script>--}}
    {{--<script src="{{ url('public/assets/all/js/classie.js') }}"></script>--}}
    <!-- Add fancyBox main JS and CSS files -->
    <script type="text/javascript" src="{{ url('public/assets/all/js/jquery.fancybox.pack.js?v=2.1.5') }}"></script>
    <!--Main JS-->
    <script src="{{ url('public/assets/all/js/main.js') }}"></script>

</body>
</html>