<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>INICIO</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet"> 
    <link href="css/lightbox.css" rel="stylesheet"> 
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">

</head>
<!--/head-->
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

    <section id="home-slider">
        <div class="container">
            <div class="main-slider">
                <div class="slide-text">
                    <h1>BLOG PARA VISUALIZAR LOS TRABAJOS DE PROGRAMACION CLIENTE/SERVIDOR</h1>
                    <p>Escuela: {{$uni->nombre}}</p>
                    <p>Grado: {{$uni->grado}}</p>
                    <p>Grupo: {{$uni->grupo}}</p>
                    <p>Carrera: {{$uni->carrera}}</p>
                    <p>Periodo: {{$uni->periodo}}</p>
                    <hr>
                </div>
                <img src="images/home/slider/slide1/house.png" class="img-responsive slider-house" alt="slider image">
                <img src="images/home/slider/slide1/circle1.png" class="slider-circle1" alt="slider image">
                <img src="images/home/slider/slide1/circle2.png" class="slider-circle2" alt="slider image">
                <img src="images/home/slider/slide1/cloud1.png" class="slider-cloud1" alt="slider image">
                <img src="images/home/slider/slide1/cloud2.png" class="slider-cloud2" alt="slider image">
                <img src="images/home/slider/slide1/cloud3.png" class="slider-cloud3" alt="slider image">
                <img src="images/home/slider/slide1/sun.png" class="slider-sun" alt="slider image">
                <img src="images/home/cycle.png" class="slider-cycle" alt="">
            </div>
        </div>
        <div class="preloader"><i class="fa fa-sun-o fa-spin"></i></div>
    </section>
    <!--/#home-slider-->
    <section id="services">
        <div class="container">
            <div class="row">
            <h1>Integrantes y Profesor</h1>
                <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <div class="single-service">
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="300ms">
                            <img src="images/home/icon1.png" alt="">
                        </div>
                        <p>Nombre: {{$datosa->nombreivan}}</p>
                        <p>No.de Control: {{$datosa->nocontrolivan}}</p>
                        <p>Correo Institucional: {{$datosa->correoivan}}</p>
                        <p>Tel: {{$datosa->celivan}}</p>
                        <hr>
                        <a href="https://www.facebook.com/luisivan.tenoriogarcia" class="mr-2 mb-2 ">Facebook</a>
                        <a href="https://www.instagram.com/ivante__/?hl=es-la" class="mr-2 mb-2">Instagram</a> 

                    </div>
                </div>
                <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="single-service">
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="600ms">
                            <img src="images/home/icon2.png" alt="">
                        </div>
                        <h1>Profesor</h1>
                        <h2>Emmanuel Torres Servin</h2>
                    </div>
                </div>
                <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="900ms">
                    <div class="single-service">
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="900ms">
                            <img src="images/home/icon3.png" alt="">
                        </div>
                        <p>Nombre: {{$datosa->nombresamuel}}</p>
                        <p>No.de Control: {{$datosa->nocontrolsamuel}}</p>
                        <p>Correo Institucional: {{$datosa->correosamuel}}</p>
                        Tel: {{$datosa->celsamuel}}</p>
                        <hr>
                        <a href="https://www.facebook.com/profile.php?id=100004150415558" class="mr-2 mb-2 ">Facebook</a>
                        <a href="https://www.instagram.com/samuelhg_e/" class="mr-2 mb-2">Instagram</a>
                </div>
            </div>
        </div>
    </section>
    
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/lightbox.min.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>   
</body>
</html>