<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Granviver </title>
    <link rel="icon" href="/assets/image/logo/logo_tab.png">
    <link rel="stylesheet" href="/plugins/lightbox2/src/css/lightbox.css?v=6">
    <link rel="stylesheet" href="/plugins/slick/slick.css?v=6">
    <link rel="stylesheet" href="/plugins/slick/slick-theme.css?v=6">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css?v=6" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/assets/css/main.css">
    <link rel="stylesheet" href="/assets/css/plugins.css">
</head>
<body>
    
<nav>
    <div class="container">
        <div class="logo">
            <a href="./" title="Ir para página inicial">
                <img src="/assets/image/logo/logo.png">
            </a>
        </div>

        <?php render_menu(); ?>
        <div class="container_network">
            <a href="tel:(31) 3516-6600" class="item_network">
                <img src="<?php echo $baseUrl; ?>/assets/image/telefone.png">
                <p>(31) 3516-6600</p>
            </a>
            <div class="item_button">
                <button>Área do Cliente</button>
            </div>

        <button class="hamburger hamburger--elastic" id="js-btn-mobile" type="button">
            <span class="hamburger-box">
                <span class="hamburger-inner"></span>
            </span>
        </button>
        </div>
    </div>
</nav>

<aside>
    <div class="container">
        <?php render_menu(); ?>
    </div>
</aside>