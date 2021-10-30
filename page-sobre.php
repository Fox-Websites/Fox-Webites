<?php
    // Template Name: Sobre
    get_header();
?>

<style type="text/css">
  #about__content__image {
    background-image: url(<?php the_field('sobre_imagem'); ?>);
  }
</style>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <?php include(TEMPLATEPATH . "/includes/banner.php"); ?>
  </section>

  <section id="about">
    <div id="about__content">
      <h2 id="about__content__title"><?php the_field('sobre_titulo'); ?></h2>
      <p id="about__content__description"><?php the_field('sobre_descricao'); ?></p>
    </div>
    <div id="about__content__image">
      <div id="about__content__image__bloc"></div>
    </div>
  </section>

  <section id="teamwork">
    <h2 id="teamwork__title"><?php the_field('sobre_equipe_titulo'); ?></h2>
    <p id="teamwork__subtitle"><?php the_field('sobre_equipe_descricao'); ?></p>
    <div id="teamwork__people__list">
      <?php if(have_rows('sobre_equipe_item')) : while(have_rows('sobre_equipe_item')) : the_row(); ?>
        <div class="teamwork__people__item">
          <img class="teamwork__people__item__image" src="<?php the_sub_field('sobre_equipe_item_imagem'); ?>" alt="<?php the_sub_field('sobre_equipe_item_imagem_alt'); ?>" />
          <div class="teamwork__people__item__content__wrapper">
            <div class="teamwork__people__item__content">
              <p class="teamwork__people__item__content__office"><?php the_sub_field('sobre_equipe_item_cargo'); ?></p>
              <p class="teamwork__people__item__content__name"><?php the_sub_field('sobre_equipe_item_nome'); ?></p>
              <p class="teamwork__people__item__content__description"><?php the_sub_field('sobre_equipe_item_descricao'); ?></p>
            </div>
          </div>
        </div>
      <?php endwhile; else: endif; ?>
    </div>
  </section>

  <?php include(TEMPLATEPATH . "/includes/blog-noticias.php"); ?>
<?php endwhile; else: endif; ?>

<?php get_footer(); ?>