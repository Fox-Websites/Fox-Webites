<?php $blog = get_page_by_title('blog')?>
<section id="posts">
    <div id="posts__container">
        <h2 id="posts__title">
            <?php the_field('blog_noticias_titulo', $blog); ?>
        </h2>
        <div id="posts__list">
            <?php
                $posts = get_posts(array(
                    'numberposts' => 3,
                    'post_type' => 'post',
                    'orderby' => 'date',
                    'order' => 'DESC'
                ));
                if ($posts) : foreach($posts as $post) : ?>
                    <div class="posts__item">
                        <img class="posts__item__image" src="<?php the_field('post_imagem'); ?>" alt="Post">
                        <h2 class="posts__item__title"><?php the_title(); ?></h2>
                        <p class="posts__item__subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur
                            sit amet eros blandit, hendrerit elit et.</p>
                        <a href="<?php the_permalink() ;?>" class="posts__item__cta">
                            <p>Ver mais</p>
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                <?php endforeach; endif; ?>
        </div>
    </div>
</section>