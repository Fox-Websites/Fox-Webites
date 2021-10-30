<?php
    // Template Name: Blog
    get_header();
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <?php include(TEMPLATEPATH . "/includes/banner.php"); ?>

  <section id="blog">
    <h1 id="blog__title"><span>Blog</span> & Noticias</h1>
    <p id="blog__subtitle">
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sit
      amet eros blandit, hendrerit elit et, mattis purus.
    <div id="blog__grid">
      <div class="blog__grid__item">
        <img class="blog__grid__item__image" src="assets/images/post1.jpg" alt="Post" />
        <h2 class="blog__grid__item__title">
          Quais os benefícios do SEO para seu site?
        </h2>
        <p class="blog__grid__item__subtitle">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur
          sit amet eros blandit, hendrerit elit et.
        </p>
        <a href="blog-post.html" class="blog__grid__item__cta">
          <p>Ver mais</p>
          <img src="assets/icons/Icon.svg" alt="Icon Right Arrow" />
        </a>
      </div>
      <div class="blog__grid__item">
        <img class="blog__grid__item__image" src="assets/images/post2.jpeg" alt="Post" />
        <h2 class="blog__grid__item__title">Quais os benefícios do SEO para seu site?</h2>
        <p class="blog__grid__item__subtitle">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur
          sit amet eros blandit, hendrerit elit et.
        </p>
        <a href="blog-post.html" class="blog__grid__item__cta">
          <p>Ver mais</p>
          <img src="assets/icons/Icon.svg" alt="Icon Right Arrow" />
        </a>
      </div>
      <div class="blog__grid__item">
        <img class="blog__grid__item__image" src="assets/images/post3.jpg" alt="Post" />
        <h2 class="blog__grid__item__title">
          Como Rankear seu site no Google
        </h2>
        <p class="blog__grid__item__subtitle">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur
          sit amet eros blandit, hendrerit elit et.
        </p>
        <a href="blog-post.html" class="blog__grid__item__cta">
          <p>Ver mais</p>
          <img src="assets/icons/Icon.svg" alt="Icon Right Arrow" />
        </a>
      </div>

      <div class="blog__grid__item">
        <img class="blog__grid__item__image" src="assets/images/post2.jpeg" alt="Post" />
        <h2 class="blog__grid__item__title">Quais os benefícios do SEO para seu site?</h2>
        <p class="blog__grid__item__subtitle">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur
          sit amet eros blandit, hendrerit elit et.
        </p>
        <a href="blog-post.html" class="blog__grid__item__cta">
          <p>Ver mais</p>
          <img src="assets/icons/Icon.svg" alt="Icon Right Arrow" />
        </a>
      </div>
      <div class="blog__grid__item">
        <img class="blog__grid__item__image" src="assets/images/post3.jpg" alt="Post" />
        <h2 class="blog__grid__item__title">
          Como Rankear seu site no Google
        </h2>
        <p class="blog__grid__item__subtitle">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur
          sit amet eros blandit, hendrerit elit et.
        </p>
        <a href="blog-post.html" class="blog__grid__item__cta">
          <p>Ver mais</p>
          <img src="assets/icons/Icon.svg" alt="Icon Right Arrow" />
        </a>
      </div>
      <div class="blog__grid__item">
        <img class="blog__grid__item__image" src="assets/images/post1.jpg" alt="Post" />
        <h2 class="blog__grid__item__title">
          Quais os benefícios do SEO para seu site?
        </h2>
        <p class="blog__grid__item__subtitle">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur
          sit amet eros blandit, hendrerit elit et.
        </p>
        <a href="blog-post.html" class="blog__grid__item__cta">
          <p>Ver mais</p>
          <img src="assets/icons/Icon.svg" alt="Icon Right Arrow" />
        </a>
      </div>

      <div class="blog__grid__item">
        <img class="blog__grid__item__image" src="assets/images/post1.jpg" alt="Post" />
        <h2 class="blog__grid__item__title">
          Quais os benefícios do SEO para seu site?
        </h2>
        <p class="blog__grid__item__subtitle">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur
          sit amet eros blandit, hendrerit elit et.
        </p>
        <a href="blog-post.html" class="blog__grid__item__cta">
          <p>Ver mais</p>
          <img src="assets/icons/Icon.svg" alt="Icon Right Arrow" />
        </a>
      </div>
      <div class="blog__grid__item">
        <img class="blog__grid__item__image" src="assets/images/post2.jpeg" alt="Post" />
        <h2 class="blog__grid__item__title">Quais os benefícios do SEO para seu site?</h2>
        <p class="blog__grid__item__subtitle">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur
          sit amet eros blandit, hendrerit elit et.
        </p>
        <a href="blog-post.html" class="blog__grid__item__cta">
          <p>Ver mais</p>
          <img src="assets/icons/Icon.svg" alt="Icon Right Arrow" />
        </a>
      </div>
      <div class="blog__grid__item">
        <img class="blog__grid__item__image" src="assets/images/post3.jpg" alt="Post" />
        <h2 class="blog__grid__item__title">
          Como Rankear seu site no Google
        </h2>
        <p class="blog__grid__item__subtitle">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur
          sit amet eros blandit, hendrerit elit et.
        </p>
        <a href="blog-post.html" class="blog__grid__item__cta">
          <p>Ver mais</p>
          <img src="assets/icons/Icon.svg" alt="Icon Right Arrow" />
        </a>
      </div>
    </div>
  </section>
<?php endwhile; else: endif; ?>

<?php get_footer(); ?>