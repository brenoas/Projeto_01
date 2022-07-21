<?php include('config.php'); ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Projeto 01</title>
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>estilo/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <!--<meta content="IE=edge">http-equiv="X-UA-Compatible"-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Descrição do meu website">
    <meta name="keywords" content="palavras, chave, do, meu, web, site">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>estilo/style.css">
    <link rel="shortcut icon" href="imagens/favicon.ico" type="image/x-icon">
</head>

<body>

    <?php
    $url = isset($_GET['url']) ? $_GET['url'] : 'home';
    switch ($url) {
        case 'sobre':
            echo '<target target="sobre" />';
            break;

        case 'servicos':
            echo '<target target="servicos" />';
            break;
    }
    ?>

    <header>
        <div class="center">
            <div class="logo left"> <a href="/">Logomarca</a></div>
            <!--logo-->
            <nav class="desktop right">
                <ul>
                    <li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>sobre">Sobre</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
                </ul>
            </nav>
            <!--desktop-->
            <nav class="mobile right">
                <div class="botao-menu-mobile">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </div>
                <ul>
                    <li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>sobre">Sobre</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
                </ul>
            </nav>
            <!--mobile-->
        </div>
        <!--center-->
        <div class="clear"></div>

    </header>

    <?php

    if (file_exists('pages/' . $url . '.php')) {
        include('pages/' . $url . '.php');
    } else {
        if ($url != 'sobre' && $url != 'servicos') {
            $pagina404 = true;
            include('pages/404.php');
        } else {
            include('pages/home.php');
        }
    }

    ?>

    <footer <?php if (isset($pagina404) && $pagina404 == true) echo 'class="fixed"'; ?>>
        <div class="center">
            <p>Os direitos não são protegidos no brasil.</p>
        </div>
        <!--center-->
    </footer>

    <script src="<?php echo INCLUDE_PATH; ?>js/jquery.js"></script>
    <script src="<?php echo INCLUDE_PATH; ?>js/scripts.js"></script>
    <?php

    if ($url == 'contato') {

    ?>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC2ZjAo9A9M0f_Hqsn8up8vGv9QhVZC214"></script>
        <script src="<?php echo INCLUDE_PATH; ?>js/map.js"></script>
    <?php
    }
    ?>

</body>

</html>

<!---->