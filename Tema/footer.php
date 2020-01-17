<?php 	$contato = get_page_by_title('contato'); ?>
<footer>
        <div class="container">
            <a href="/" class="grid-3">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo-marca.svg" alt="Logo marca da empresa">
            </a>
            <div class="grid-4">
                <h3>Redes sociais</h3>
                <div class="links_sociais">
                <a href="<?php the_field('link_facebook', $contato); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/Ícones/facebook_icon.svg" alt="ícone Facebook">
                    </a>
                    <a href="<?php the_field('link_instagram', $contato); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/Ícones/instagram_icon.svg" alt="ícone Facebook">
                    </a>
                    <a href="<?php the_field('link_twitter', $contato); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/Ícones/twitter_icon.svg" alt="ícone Facebook">
                    </a>
                </div>
            </div>
            <div class="grid-6">
                <h3>Contato</h3>
                <ul>
                    <li>- <?php the_field('rua', $contato); ?> | <?php the_field('bairro', $contato); ?></li>
                    <li>- <?php the_field('cidade_estado', $contato); ?></li>
                    <li>- <?php the_field('email', $contato); ?></li>
                    <li>- <?php the_field('telefone', $contato); ?></li>
                </ul>
            </div>
        </div>
        <div>
            <p> &copy; <span class="texto_azul">Art</span><span class="texto_rosa">Baby</span> 2019 | Todos direitos reservados </p>
        </div>
    </footer>
    <!-- Footer WP -->
    <?php wp_footer(); ?>
</body>
</html>