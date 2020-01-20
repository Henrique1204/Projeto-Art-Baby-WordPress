<?php get_header(); ?>
<?php
    $imagem_id = get_field('img_post');
    $background_large = wp_get_attachment_image_src($imagem_id, 'large');
    $background_medium = wp_get_attachment_image_src($imagem_id, 'medium');
?>
<?php if(have_posts()): while(have_posts()): the_post(); ?>
    <article>
        <section  class="introducao_blog intro_geral">
            <div class="container alinhar_centro">
                <h1 class="titulo"><?php the_title(); ?></h1>
            </div>
        </section>
        <section class="container conteudo_geral">
            <div>
                <img src="<?php echo $background_large[0]; ?>" alt="<?php the_field('alt_img_post') ?>" class="grid-10 img_post">
                <img src="<?php echo $background_medium[0]; ?>" alt="<?php the_field('alt_img_post') ?>" class="grid-10 img_post">
                <div class="grid-6 texto_post"> 
                    <p><?php the_field('texto_principal'); ?></p>
                </div>
            </div>
                <?php if(have_rows('textos_pots')): while(have_rows('textos_pots')): the_row(); ?>
                    <div class="grid-16 texto_post_opcional">
                        <p><?php the_sub_field('texto_secundario'); ?></p>
                    </div>
                <?php endwhile; endif; ?>
            <div>
                <h3 class="data_post"><?php echo get_the_time('d/m/Y'); ?></h3>
                <a href="http://art-baby.local/blog/" class="btn_voltar">Posts</a>
            </div>
        </section>
    </article>
<?php endwhile; else: ?>
    <section class="introducao_blog intro_erro">
        <div class="container alinhar_centro">
            <h1 class="titulo">Página  não encontrada</h1>
        </div>
    </section>
<?php endif; ?>
<section class="posts_recentes blog alinhar_centro">
    <div class="container div_post">
        <h2 class="titulo">Ultimos posts</h2>
        <div class="container links_posts_recentes alinhar_centro">
            <?php
		        $args = array('post' => 'post', 'order' => 'DESC');
			    $the_query = new WP_Query($args);
		    ?>
            <?php if($the_query->have_posts()): while($the_query->have_posts()): $the_query->the_post(); ?>
                <a href="<?php the_permalink(); ?>">
                    <div class="post">
                        <h3 class="titulo_post"><?php the_title(); ?></h3>
                        <figure class="tumb">
                            <img src="<?php the_field('thumbnail_post'); ?>" alt="Thumbnail do post">
                            <figcaption>
                                <h3><?php echo get_the_time('d/m/Y'); ?></h3>
                            </figcaption>
                        </figure>
                        <div class="descricao_post">
                            <p><?php the_field('resumo_post'); ?></p>
                        </div>
                    </div>
                </a>
            <?php endwhile; endif; ?>
            <?php wp_reset_query(); wp_reset_postdata(); ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>