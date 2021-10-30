<?php
    if (is_page('home')) {
        $pagina = get_page_by_title('home');
    } elseif (is_page('sobre')) {
        $pagina = get_page_by_title('sobre');
    } elseif (is_page('portfolio')) {
        $pagina = get_page_by_title('portfolio');
    } else {
        $pagina = get_page_by_title('blog');
    }
?>
<section id="banner">
        <div id="banner__content__images">
            <div id="banner__video">
                <video autoplay loop muted src="<?php the_field('video_banner', $pagina); ?>" />
            </div>
            <div id="banner__background"></div>
        </div>
        <div id="banner__content">
            <h1 id="banner__title"><?php the_field('banner_titulo', $pagina); ?><br><span class="typer" id="main"
                    data-words="<?php the_field('banner_titulo_palavras', $pagina); ?>" data-delay="100"
                    data-deleteDelay="1000" data-colors="#f58a07"></span>
                <span class="cursor" data-owner="main"></span>
            </h1>
            <p id="banner_subtitle"><?php the_field('banner_descricao', $pagina); ?></p>
            <button id="banner__cta">
                <p><?php the_field('banner_botao', $pagina); ?></p>
            </button>
            <div id="banner__scroll__down">
                <svg width="25px" height="100%" viewBox="0 0 247 390" version="1.1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" style="
                                fill-rule: evenodd;
                                clip-rule: evenodd;
                                stroke-linecap: round;
                                stroke-linejoin: round;
                                stroke-miterlimit: 1.5;
                            ">
                    <path id="wheel" d="M123.359,79.775l0,72.843"
                        style="fill: none; stroke: #fff; stroke-width: 20px" />
                    <path id="mouse"
                        d="M236.717,123.359c0,-62.565 -50.794,-113.359 -113.358,-113.359c-62.565,0 -113.359,50.794 -113.359,113.359l0,143.237c0,62.565 50.794,113.359 113.359,113.359c62.564,0 113.358,-50.794 113.358,-113.359l0,-143.237Z"
                        style="fill: none; stroke: #fff; stroke-width: 20px" />
                </svg>
            </div>
        </div>
    </section>