<?php
	// Template Name: Contato
    get_header();
?>
<?php if(have_posts()): while(have_posts()): the_post();?>
    <?php include(TEMPLATEPATH.'/inc/introducao.php'); ?>
    <section class="dados_contato">
        <div class="container">
            <div class="grid-4">
                <h3>Redes sociais</h3>
                <div class="links_sociais">
                    <a href="<?php the_field('link_facebook'); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/Ícones/facebook_icon.svg" alt="ícone Facebook">
                    </a>
                    <a href="<?php the_field('link_instagram'); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/Ícones/instagram_icon.svg" alt="ícone Facebook">
                    </a>
                    <a href="<?php the_field('link_twitter'); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/Ícones/twitter_icon.svg" alt="ícone Facebook">
                    </a>
                </div>
            </div>
            <div class="grid-7">
                <h3>Mapa</h3>
                <a href="<?php the_field('link_mapa'); ?>"><img src="<?php the_field('imagem_endereco') ?>" alt="<?php the_field('alt_endereco') ?>"></a>
            </div>
            <div class="grid-5">
                <h3>Contato</h3>
                <ul>
                    <li><?php the_field('rua'); ?></li>
                    <li><?php the_field('bairro'); ?></li>
                    <li><?php the_field('cidade_estado'); ?></li>
                    <li><?php the_field('email'); ?></li>
                    <li><?php the_field('telefone'); ?></li>
                </ul>
            </div>
        </div>
    </section>
    <section class="enviar_mensagem alinhar_centro">
        <div class="container">
            <h2 class="titulo">Enviar mensagem</h2>
            <form method="post" action="<?php echo get_template_directory_uri(); ?>/enviar.php" class="grid-8 form_php">
                <div>
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" id="nome" placeholder="Nome Completo" required>
                </div>
                <div>
                    <label for="email">E-mail</label>
                    <input type="text" name="email" id="email" placeholder="exemplo@gmail.com" required>
                </div>
                <div>
                    <label for="ass">Assunto</label>
                    <input type="text" name="ass" id="ass" placeholder="Escolha o assunto" required>
                </div>
                <div>
                    <label for="msg">Mensagem</label>
                    <textarea name="msg" id="msg" required></textarea>
                </div>
                <button type="submit" class="btn rosa" id="enviar">Enviar</button>
            </form>
        </div>
    </section>
<?php endwhile; endif; ?>
<?php get_footer(); ?>