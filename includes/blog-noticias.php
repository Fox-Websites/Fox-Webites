<?php $blog = get_page_by_title('blog')?>
<section id="posts">
    <div id="posts__container">
        <!-- <h2 id="posts__title">Blog & Notícias Recentes</h2> -->
        <h2 id="posts__title">
            <?php the_field('blog_noticias_titulo', $blog); ?>
        </h2>
        <div id="posts__list">
            <div class="posts__item">
                <img class="posts__item__image" src="assets/images/post1.jpg" alt="Post">
                <h2 class="posts__item__title">Quais os benefícios do SEO para seu site?</h2>
                <p class="posts__item__subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur
                    sit amet eros blandit, hendrerit elit et.</p>
                <a href="blog-post.html" class="posts__item__cta">
                    <p>Ver mais</p>
                    <img src="assets/icons/Icon.svg" alt="Icon Right Arrow">
                </a>
            </div>
            <div class="posts__item">
                <img class="posts__item__image" src="assets/images/post2.jpeg" alt="Post">
                <h2 class="posts__item__title">Site Institucional: qual sua importância</h2>
                <p class="posts__item__subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur
                    sit amet eros blandit, hendrerit elit et.</p>
                <a href="blog-post.html" class="posts__item__cta">
                    <p>Ver mais</p>
                    <img src="assets/icons/Icon.svg" alt="Icon Right Arrow">
                </a>
            </div>
            <div class="posts__item">
                <img class="posts__item__image" src="assets/images/post3.jpg" alt="Post">
                <h2 class="posts__item__title">Como Rankear seu site no Google</h2>
                <p class="posts__item__subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur
                    sit amet eros blandit, hendrerit elit et.</p>
                <a href="blog-post.html" class="posts__item__cta">
                    <p>Ver mais</p>
                    <img src="assets/icons/Icon.svg" alt="Icon Right Arrow">
                </a>
            </div>
        </div>
    </div>
</section>