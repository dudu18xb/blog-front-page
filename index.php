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
                <nav id="menu">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Produtos</a></li>
                        <li><a href="#">Missão</a></li>
                        <li><a href="#">Links</a></li>
                        <li><a href="#">Contato</a></li>
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
