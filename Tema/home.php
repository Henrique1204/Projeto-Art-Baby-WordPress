<?php
    get_header();
?>
<section class="introducao_blog">
    <h1 class="titulo">Blog</h1>
</section>
<section class="posts_blog alinhar_centro">
    <div class="container alinhar_centro">
        <?php if(have_posts()): while(have_posts()): the_post(); ?>
            <article class="grid-12 blog_post">
                <h3 class="data_post"><?php echo get_the_time('d/m/Y'); ?></h3>
                <div class="post_desktop">
                    <img src="<?php the_field('thumbnail_post'); ?>" alt="thumbnail do post">
                    <div class="conteudo_post">
                        <h2 class="sub_titulo"><?php the_title(); ?></h2>
                        <p><?php the_field('resumo_post'); ?></p>
                    </div> 
                    <a href="<?php the_permalink(); ?>" class="btn_blog"></a>
                </div>
                <a href="<?php the_permalink(); ?>" class="post_smartphone"><?php the_title(); ?></a>
            </article>
        <?php endwhile; ?>
        <div class="nav_blog grid-12">
		    <?php
                previous_posts_link('<< Anterior');
			    next_posts_link('Próximo >>');
		    ?>
	    </div>
        <?php endif; ?>
    </div>
</section>

</div>
<?php get_footer(); ?>