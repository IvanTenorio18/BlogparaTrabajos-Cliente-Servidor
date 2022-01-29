<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>@yield('pestaña')</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/lightbox.css" rel="stylesheet"> 
	<link href="css/main.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet"> 
	<link href="css/responsive.css" rel="stylesheet">

</head><!--/head-->

<body>
	<header id="header">      
        <div class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="{{route('inicio')}}">Inicio</a></li>
                        <li class="dropdown"><a href="#">Unidad I <i class="fa fa-angle-down"></i></a>
                        <ul role="menu" class="sub-menu">
                                <li><a href="{{route('tema1')}}">1.RECONOCER LOS CONCEPTOS DE SISTEMAS DE INFORMACIÓN</a></li>
                                <hr>
                                <li><a href="{{route('tema2')}}">2.RECONOCER LA EVOLUCIÓN DE LOS SISTEMAS DE INFORMACIÓN</a></li>
                                <hr>
                                <li><a href="{{route('tema3')}}">3.DEFINIR LOS CONCEPTOS DE CLIENTE SERVIDOR</a></li>
                                <hr>
                                <li><a href="{{route('tema4')}}">4.DEFINIR LOS CONCEPTOS DE COMPUTADORAS CENTRALES Y DEDICADAS</a></li>
                                <hr>
                                <li><a href="{{route('tema5')}}">5.DEFINIR LOS SISTEMAS DE CONEXION LIBRE Y A TRAVES DE REDES</a></li>
                                <hr>
                                <li><a href="{{route('tema6')}}">6.DESCRIBIR LOS SISTEMAS DE ARQUITECTURA CLIENTE/SERVIDOR</a></li>
                                <hr>
                                <li><a href="{{route('tema7')}}">7.RECONOCER PROTOCOLOS DE COMUNICACION EN RED</a></li>
                                <hr>
                                <li><a href="{{route('tema8')}}">8.CLASIFICAR LOS SISTEMAS DE INFORMACION DEACUERDO A SU ARQUITECTURA</a></li>
                                <hr>
                                <li><a href="{{route('tema9')}}">9.EXPLICAR EL PROCESO DE DIAGRAMACION DE COMPONENTES DE LA ARQUITECTURA CLIENTE/SERVIDOR</a></li>
                            </ul>
                        </li>                    
                        <li class="dropdown"><a >Unidad II <i class="fa fa-angle-down"></i></a>
                            <!---<ul role="menu" class="sub-menu">
                                <li><a href="blog.html">Blog Default</a></li>
                                <li><a href="blogtwo.html">Timeline Blog</a></li>
                                <li><a href="blogone.html">2 Columns + Right Sidebar</a></li>
                                <li><a href="blogthree.html">1 Column + Left Sidebar</a></li>
                                <li><a href="blogfour.html">Blog Masonary</a></li>
                                <li><a href="blogdetails.html">Blog Details</a></li>
                            </ul>--->
                        </li>
                        <li class="dropdown"><a >Unidad III <i class="fa fa-angle-down"></i></a>
                            <!--<ul role="menu" class="sub-menu">
                                <li><a href="portfolio.html">Portfolio Default</a></li>
                                <li><a href="portfoliofour.html">Isotope 3 Columns + Right Sidebar</a></li>
                                <li><a href="portfolioone.html">3 Columns + Right Sidebar</a></li>
                                <li><a href="portfoliotwo.html">3 Columns + Left Sidebar</a></li>
                                <li><a href="portfoliothree.html">2 Columns</a></li>
                                <li><a href="portfolio-details.html">Portfolio Details</a></li>
                            </ul>--->
                        </li>                                                 
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!--/#header-->


    <section id="page-breadcrumb">
        <div class="vertical-center sun">
             <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                            <h1 class="title">@yield('tema')</h1>
                        </div>
                     </div>
                </div>
            </div>
        </div>
   </section>
    <!--/#page-breadcrumb-->

    <section id="about-company" class="padding-top wow fadeInUp" data-wow-duration="400ms" data-wow-delay="400ms">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    @yield('imagen')
                    <p>@yield('contenido')</p>
                </div>
            </div>
        </div>
    </section>

    <section id="action">
        <div class="vertical-center">
             <div class="container">
                <div class="row">
                    <div class="action count">
                </div>
            </div>
        </div>
   </section>

    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/lightbox.min.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/jquery.countTo.js"></script>
    <script type="text/javascript" src="js/main.js"></script>    
</body>
</html>