<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<section id="post">
		<img id="post__image" src="<?php the_field('post_imagem'); ?>" alt="Post">
		<article id="post__content">
		<div id="post__content__info">
			<div id="post__content__info__author__image">
				<?php echo get_avatar( get_the_author_meta( 'ID' ), 32 )?>
			</div>
			<p id="post__content__info__author__name"><?php echo get_the_author_nickname(); ?></p>
			<p> - </p>
			<p id="post__content__info__date">Postado em <?php echo get_the_date('j \d\e F \d\e Y'); ?></p>
		</div>
		<h1 id="post__content__title"><?php the_title(); ?></h1>
		<div id="post__content__text">
			<?php the_content(); ?>
		</div>
		</article>
	</section>

	<?php include(TEMPLATEPATH . "/includes/blog-noticias.php"); ?>

<?php endwhile; else: ?> 
<p><h1>Página não encontrada</h1></p>
<?php endif; ?>

<?php get_footer(); ?>