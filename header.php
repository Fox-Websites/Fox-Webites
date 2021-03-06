<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
        <?php bloginfo('name'); ?>
    </title>
    <meta name="description"
        content="Agência Digital especializada no desenvolvimento de sites que vão transformar o seu negócio, trazendo mais clientes e mais vendas." />
    <link rel="canonical" href="https://fox-websites.netlify.app/#" />
    <meta property="og:locale" content="pt_BR" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Fox Websites | Desenvolvimento de Sites" />
    <meta property="og:description"
        content="Agência Digital especializada no desenvolvimento de sites % que vão transformar o seu negócio, trazendo mais clientes e mais vendas." />
    <meta property="og:url" content="https://fox-websites.netlify.app/" />
    <meta property="og:site_name" content="Fox Websites" />
    <meta property="og:image" content="https://fox-websites.netlify.app/assets/images/about.jpg" />
    <meta property="og:image:width" content="1920" />
    <meta property="og:image:height" content="1080" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <script src="https://unpkg.com/scrollreveal"></script>
    <?php wp_head(); ?>
</head>

<body>
    <div id="indicator"></div>

    <header id="header">
        <div id="header__container">
            <a href="/foxwebsites/" id="header__brand">
                <?php $home = get_page_by_title('home'); ?>
                <img src="<?php the_field('logo', $home); ?>"" alt="">
            </a>
            <div id="header__info">
                <nav id="header__menu">
                    <button aria-label="Abrir menu" id="btn-mobile" aria-haspop="true" aria-controls="menu"
                        aria-expanded="false">
                        Menu
                        <span id="hamburguer"></span>
                    </button>
                    <?php
                        $args = array(
                            'menu' => 'principal',
                            'container' => false
                        );
                        wp_nav_menu( $args );
                    ?>
                </nav>
                <button id="header__menu__orcamento">
                    <p>Orçamento</p>
                </button>
            </div>
        </div>
    </header>