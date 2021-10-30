<?php
    // Template Name: Portfolio
    get_header();
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <?php include(TEMPLATEPATH . "/includes/banner.php"); ?>

  <section id="portfolio">
    <h1 id="portfolio__title"><?php the_field('portfolio_titulo'); ?></h1>
    <p id="portfolio__subtitle"><?php the_field('portfolio_descricao'); ?></p>
    <div id="portfolio__list">
      <?php if(have_rows('portfolio_item')) : while(have_rows('portfolio_item')) : the_row(); if (get_row_index() % 2 == 0): ?>
        <div class="portfolio__item">
          <div class="portfolio__item__image__wrapper">
            <img class="portfolio__item__image" src="<?php the_sub_field('portfolio_item_imagem'); ?>" alt="<?php the_sub_field('portfolio_item_imagem_alt'); ?>" />
          </div>
          <div class="portfolio__item__content">
            <h2 class="portfolio__item__content__title"><?php the_sub_field('portfolio_item_titulo'); ?></h2>
            <p class="portfolio__item__content__subtitle"><?php the_sub_field('portfolio_item_descricao'); ?></p>
            <a href="<?php the_sub_field('portfolio_item_link'); ?>" target="__blank" class="portfolio__item__content__button">
              <p>Acessar o site</p>
            </a>
          </div>
        </div>
      <?php else: ?>
        <div class="portfolio__item portfolio__item__invert">
          <div class="
                portfolio__item__image__wrapper
                portfolio__item__image__wrapper__invert
              ">
              <img class="portfolio__item__image" src="<?php the_sub_field('portfolio_item_imagem'); ?>" alt="<?php the_sub_field('portfolio_item_imagem_alt'); ?>" />
          </div>
          <div class="portfolio__item__content portfolio__item__content__invert">
            <h2 class="portfolio__item__content__title"><?php the_sub_field('portfolio_item_titulo'); ?></h2>
            <p class="
                  portfolio__item__content__subtitle
                  portfolio__item__content__subtitle__invert
                ">
                <?php the_sub_field('portfolio_item_descricao'); ?>
            </p>
            <a href="<?php the_sub_field('portfolio_item_link'); ?>" target="__blank" class="portfolio__item__content__button">
              <p>Acessar o site</p>
            </a>
          </div>
        </div>
      <?php endif; endwhile; else: endif; ?>
    </div>
  </section>

  <?php include(TEMPLATEPATH . "/includes/blog-noticias.php"); ?>
<?php endwhile; else: endif; ?>

<?php get_footer(); ?>