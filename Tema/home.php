<?php
    get_header();
?>
<section class="introducao_blog">
    <h1 class="titulo">Blog</h1>
</section>
<section class="posts_blog">
    <div class="container alinhar_centro">
        <?php if(have_posts()): while(have_posts()): the_post(); ?>
            <article class="grid-12 blog_post">
                <h3 class="data_post"><?php echo get_the_time('d/m/Y'); ?></h3>
                <div>
                    <img src="<?php the_field('thumbnail_post'); ?>" alt="thumbnail do post">
                    <div class="conteudo_post">
                        <h2 class="sub_titulo"><?php the_title(); ?></h2>
                        <p><?php the_field('resumo_post'); ?></p>
                    </div> 
                    <a href="<?php the_permalink(); ?>" class="btn_blog alinhar_centro"></a>
                </div>
            </article>
        <?php endwhile; endif; ?>
    </div>
</section>

</div>
<?php get_footer(); ?>