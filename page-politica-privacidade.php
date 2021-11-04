<?php
    // Template Name: Politica de Privacidade
    get_header();
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <section id="policy">
    <h1 id="policy__title">Policita de Privacidade</h1>

    <?php 
      $date = get_the_modified_time('j \d\e F \d\e Y');?>
  
    <p id="terms__last_update">Ultima modificação: <?php echo $date; ?></p>

    <?php the_field('politica'); ?>
  </section>
<?php endwhile; else: endif; ?>

<?php get_footer(); ?>