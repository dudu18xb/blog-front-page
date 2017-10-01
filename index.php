<!DOCTYPE html>
<html>
    <head>
        <title>Site de Noticias</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"> <!-- para nao dar zoom -->
        <link rel="stylesheet" type="text/css" href="css/style.css"> <!-- MEU ESTILO PESSOAL DO CSS -->
        <link rel="stylesheet" type="text/css" href="css/lightbox.min.css"> <!-- MEU ESTILO PESSOAL DO CSS -->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css"> <!-- BOOTSTRAP-->
        <link rel="stylesheet" type="text/css" href="css/animate.css"> <!-- BOOTSTRAP-->
        <!-- plugins -->
        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">

        <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="js/lightbox.min.js"></script>
        <script type="text/javascript" src="js/modernizr.custom.js"></script>
        <script type="text/javascript" src="js/wow.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>
        <script type="text/javascript" src="js/jquery.vimeo.api.js"></script>
        <script>
            new WOW().init();
            function mostraMenu() {
                $("nav").toggle();
            }
            // para o plugin do video
            $(document).ready(function ($) {





                $("iframe").on("playProgress", function (event, data) {

                    console.log(this);//return the DOM object of the video that called this event

                    console.log("Seconds Progress", data.seconds);
                    console.log("Percent Progress", data.percent);
                    console.log("Duration Progress", data.duration);

                })
                        .vimeo("getVolume", function (d) {

                            console.log("Voume set to:", d);

                        })
                        .vimeo("seekTo", 180)
                        .vimeo("getVolume", function (d) {

                            console.log("New Volume:", d);

                        })
                        .on('pause', function () {

                            console.log('paused');

                        });

            });
        </script>
    </head>
    <body>
        <!-- COMEÇO DO MENU ASIDE BAR -->
        <aside class="aside-bar wow fadeInLeft">
            <div class="photo-users">
                <img class="img-circle" src="images/imgusers.jpg">
            </div>
            <div class="menu-asidebar">
                <nav id="menu">
                    <ul>
                        <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
                        <li><a href="#"><i class="fa fa-user"></i> Lista de Dados</a></li>
                        <li><a href="#"><i class="fa fa-edit"></i> Alterar Dados</a></li>
                        <li><a href="noticia"><i class="fa fa-newspaper-o"></i> Notícias</a></li>
                    </ul>
                </nav>
            </div>
        </aside>

        <!-- FINAL DO MENU -->

        <!-- COMEÇO TODO CONTEUDO -->
        <main>
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
        </main>
        <!-- FINAL DO CONTEUDO -->
    </body>
</html>
