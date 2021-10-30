<?php
    // Template Name: Blog
    $blog = get_page_by_title('blog');
    get_header();
?>
<?php include(TEMPLATEPATH . "/includes/banner.php"); ?>

<section id="blog">
  <h1 id="blog__title"><?php the_field('blog_noticias_titulo', $blog); ?></h1>
  <p id="blog__subtitle"><?php the_field('blog_noticias_descricao', $blog); ?></p>
  <div id="blog__grid">
    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
      
      <div class="blog__grid__item">
        <img class="blog__grid__item__image" src="<?php the_field('post_imagem'); ?>" alt="Post" />
        <h2 class="blog__grid__item__title"><?php the_title(); ?></h2>
        <p class="blog__grid__item__subtitle">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur
          sit amet eros blandit, hendrerit elit et.
        </p>
        <a href="<?php the_permalink() ;?>" class="blog__grid__item__cta">
          <p>Ver mais</p>
          <img src="assets/icons/Icon.svg" alt="Icon Right Arrow" />
        </a>
      </div>

    <?php endwhile; ?>
    </div>
      <?php previous_posts_link('Posts antigos'); ?>
      <?php next_posts_link('Posts novos'); ?>

    <?php else: endif; ?>
</section>

<?php get_footer(); ?>