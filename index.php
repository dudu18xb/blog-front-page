<!DOCTYPE html>
<html>
    <head>
        <title>Eduardo Rocha</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"> <!-- para nao dar zoom -->
        <link rel="stylesheet" type="text/css" href="css/style.css"> <!-- MEU ESTILO PESSOAL DO CSS -->
        <link rel="stylesheet" type="text/css" href="css/lightbox.min.css"> <!-- MEU ESTILO PESSOAL DO CSS -->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css"> <!-- BOOTSTRAP-->
        <!-- plugins -->
        <link rel="stylesheet" type="text/css" href="css/component.css">
        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">

        <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="js/lightbox.min.js"></script>
        <script type="text/javascript" src="js/modernizr.custom.js"></script>
        <script type="text/javascript" src="js/wow.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>
        <script>
            new WOW().init();
            function mostraMenu() {
                $("nav").toggle();
            }
        </script>
    </head>
    <body>
        <!-- COMEÇO DO MENU ASIDE BAR -->
        <aside class="aside-bar">
            <div class="photo-users">
                <img class="img-circle" src="images/imgusers.jpg">
            </div>
            <div class="menu-asidebar">
                <nav class="navbar navbar-default sidebar" role="navigation">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>      
                        </div>
                        <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li><a href="#">Home<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Usuarios <span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a>
                                    <ul class="dropdown-menu forAnimate" role="menu">
                                        <li><a href="{{URL::to('createusuario')}}">Crear</a></li>
                                        <li><a href="#">Modificar</a></li>
                                        <li><a href="#">Reportar</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#">Separated link</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#">Informes</a></li>
                                    </ul>
                                </li>          
                                <li ><a href="#">Libros<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-th-list"></span></a></li>        
                                <li ><a href="#">Tags<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-tags"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
        </aside>

        <!-- FINAL DO MENU -->

        <!-- COMEÇO TODO CONTEUDO -->
        <main>
            <div id="container">
                <?php
                //print_r( $_GET );

                if (isset($_GET["p"])) {
                    //se o parametro p existe
                    $p = trim($_GET["p"]);

                    //separar por / conteudo/111
                    //pagina - produto
                    //codigo - 111
                    $p = explode("/", $p);

                    //print_r ( $p );
                    $pagina = $p[0]; //nome da página
                } else {

                    $pagina = "home";
                }

                $pagina = "pages/$pagina.php";

                if (file_exists($pagina))
                    include $pagina;
                else
                    include "pages/erro.php";
                ?>
            </div>
        </main>
        <!-- FINAL DO CONTEUDO -->
    </body>
</html>
