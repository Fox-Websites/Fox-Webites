<?php
    // Template Name: Home
    get_header();
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php include(TEMPLATEPATH . "/includes/banner.php"); ?>

    <section id="schedule">
        <h2 id="schedule__title"><?php the_field('cronograma_titulo'); ?></h2>
        <p id="schedule__subtitle"><?php the_field('cronograma_descricao'); ?></p>
        <div id="schedule__list">
            <?php if(have_rows('cronograma_item')) : while(have_rows('cronograma_item')) : the_row(); ?>
                <div class="schedule__item">
                    <img class="schedule__item__image" src="<?php the_sub_field('cronograma_item_imagem'); ?>" alt="<?php the_sub_field('cronograma_item_imagem_alt'); ?>">
                    <h3 class="schedule__item__title"><?php the_sub_field('cronograma_item_titulo'); ?></h3>
                    <p class="schedule__item__subtitle"><?php the_sub_field('cronograma_item_descricao'); ?></p>
                </div>
            <?php endwhile; else: endif; ?>
        </div>
    </section>

    <section id="differential">
        <div id="differential__container">
            <div id="differential__header">
                <!-- <h2 id="differential__title">Conheça um pouco do <span>DIFERENCIAL</span> de nossos sites profissionais para sua empresa</h2> -->
                <h2 id="differential__title"><?php the_field('diferencial_titulo'); ?></h2>
                <p id="differential__subtitle"><?php the_field('diferencial_descricao'); ?></p>
            </div>
            <div id="differential__list">
                <?php if(have_rows('diferencial_item')) : while(have_rows('diferencial_item')) : the_row(); ?>
                    <div class="differential__item">
                        <img class="differential__item__icon" src="<?php the_sub_field('diferencial_item_imagem'); ?>" alt="<?php the_sub_field('diferencial_item_imagem_alt'); ?>">
                        <h3 class="differential__item__title"><?php the_sub_field('diferencial_item_titulo'); ?></h3>
                        <p class="differential__item__subtitle"><?php the_sub_field('diferencial_item_descricao'); ?></p>
                    </div>
                <?php endwhile; else: endif; ?>
            </div>
        </div>
    </section>

    <section id="projects">
        <h2 id="projects__title"><?php the_field('projetos_titulo'); ?></h2>
        <p id="projects__subtitle"><?php the_field('projetos_descricao'); ?></p>
        <div id="projects__list">
            <?php $portfolio = get_page_by_title('portfolio'); $count = 0; if (have_rows('portfolio_item', $portfolio)) : while(have_rows('portfolio_item', $portfolio)) : $count++; if ($count > 3) : break; endif; the_row();?>
                    <div class="project__item">
                        <img class="project__item__image" src="<?php the_sub_field('portfolio_item_imagem', $portfolio); ?>" alt="<?php the_sub_field('portfolio_item_imagem_alt', $portfolio); ?>">
                        <a href="<?php the_sub_field('portfolio_item_link', $portfolio); ?>" target="__blank" class="project__item__title"><?php the_sub_field('portfolio_item_titulo', $portfolio); ?></a>
                    </div>
                <?php endwhile; else: endif; ?>
        </div>
        <div id="projects__button">
            <a href="/foxwebsites/portfolio/" id="projects__cta">
                <p>Ver mais</p>
            </a>
        </div>
    </section>

    <section id="budget">
        <div id="budget__image"></div>
        <div id="budget__content">
            <h2 id="budget__content__title">Juntos podemos conquistar coisas incriveis!</h2>
            <div id="budget__buttom">
                <button id="budget__content__cta">
                    <p>Clique aqui e faça um orçamento</p>
                </button>
            </div>
        </div>
    </section>

    <section id="testimonial">
        <div class="swiper">
            <div class="swiper-wrapper">
                <?php if(have_rows('depoimento_item')) : while(have_rows('depoimento_item')) : the_row(); ?>
                    <div class="swiper-slide">
                        <img class="testimonial__item__image" src="<?php the_sub_field('depoimento_item_imagem'); ?>" alt="<?php the_sub_field('depoimento_item_imagem_alt'); ?>">
                        <h3 class="testimonial__item__name"><?php the_sub_field('depoimento_item_nome'); ?></h3>
                        <h4 class="testimonial__item__office"><?php the_sub_field('depoimento_item_cargo'); ?></h4>
                        <p class="testimonial__item__description"><?php the_sub_field('depoimento_item_descricao'); ?>.</p>
                    </div>
                <?php endwhile; else: endif; ?>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </section>

    <?php include(TEMPLATEPATH . "/includes/blog-noticias.php"); ?>
    
<?php endwhile; else: endif; ?>

<?php get_footer(); ?>