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
                    <a>
                        <img src="img/Ícones/facebook_icon.svg" alt="ícone Facebook">
                    </a>
                    <a>
                        <img src="img/Ícones/instagram_icon.svg" alt="ícone Facebook">
                    </a>
                    <a>
                        <img src="img/Ícones/twitter_icon.svg" alt="ícone Facebook">
                    </a>
                </div>
            </div>
            <div class="grid-7">
                <h3>Mapa</h3>
                <img src="img/mapa.jpg" alt="Av. Primavera, 107 - Vargem Grande">
            </div>
            <div class="grid-5">
                <h3>Contato</h3>
                <ul>
                    <li>Av. Primavera, 107</li>
                    <Li> Vargem Grande</Li>
                    <li> São Paulo, SP</li>
                    <li> rita_seilaoq@gmail.com</li>
                    <li> (11) 99999-9999</li>
                </ul>
            </div>
        </div>
    </section>
    <section class="enviar_mensagem alinhar_centro">
        <div class="container">
            <h2 class="titulo">Enviar mensagem</h2>
            <form class="grid-8">
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
                    <textarea name="msg" id="msg"></textarea>
                </div>
                <button type="submit" class="btn rosa">Enviar</button>
            </form>
        </div>
    </section>
<?php endwhile; endif; ?>
<?php get_footer(); ?>