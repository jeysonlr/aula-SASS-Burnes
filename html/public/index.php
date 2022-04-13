<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Carrinho Novinho</title>
    <link rel="shortcut icon" href="imagens/icone.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/lightbox.min.css">
</head>

<body>
    <header class="header">
        <a href="index.php" title="Home" class="header-logo">
            <img src="imagens/logo.png" alt="Meu Carrinho Novinho">
        </a>

        <a href="javascript:menu()" title="Menu" class="header-menu">
            <i class="fa-solid fa-bars"></i>
        </a>

        <nav class="header-nav">
            <ul class="header-ul">
                <li>
                    <a href="home" title="Home">
                        <i class="fa-solid fa-house-chimney"></i>
                        Home
                    </a>
                </li>
                <li>
                    <a href="quem-somos" title="Quem Somos">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        Quem Somos
                    </a>
                </li>
                <li>
                    <a href="estoque" title="Estoque">
                        <i class="fa-solid fa-car"></i>
                        Estoque
                    </a>
                </li>
            </ul>
        </nav>
    </header>
    <div class="banner">
        <img src="imagens/banner.jpg" alt="Banner">
    </div> <br>
    <main class="main container">
        <?php

        $pagina = $_GET["param"] ?? "home";
        $pagina = "pages/{$pagina}.php";

        if (file_exists($pagina))
            include $pagina;
        else
            include "pages/404.php";

        ?>
    </main>

    <footer class="footer">
        <p>Desenvolvido por Jeyson Luiz Romualdo</p>
        <p>
            <a href="https://www.linkedin.com/in/jeyson-luiz-romualdo-86992995" title="Linkedin">
                <i class="fa-brands fa-linkedin">
                </i>
            </a>
            <a href="https://github.com/jeysonlr" title="Github">
                <i class="fa-brands fa-github">
                </i>
            </a>
        </p>

    </footer>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/lightbox.min.js"></script>
    <script>
        function menu() {
            $(".header-nav").toggle();
        }
    </script>
</body>

</html>