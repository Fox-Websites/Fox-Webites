<?php
    // Template Name: Termos e Condições
    get_header();
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <section id="terms">
    <h1 id="terms__title">Termos e Condições</h1>

    <?php 
      $date = get_the_modified_time('j \d\e F \d\e Y'); ?>
  
    <p id="terms__last_update">Ultima modificação: <?php echo $date; ?></p>

    <?php the_field('termo'); ?>
  </section>
<?php endwhile; else: endif; ?>

<?php get_footer(); ?>