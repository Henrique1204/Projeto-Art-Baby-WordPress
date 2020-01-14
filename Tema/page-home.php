<?php
	// Template Name: Home
    get_header();
?>
<?php if(have_posts()): while(have_posts()): the_post();?>
    <section class="intro_home">
        <div class="container">
            <div>
                <div class="apresentacao_intro grid-8">
                    <h1 class="titulo">Bebês Reborn</h1>
                    <p><?php the_field('apresentacao_um'); ?></p>
                    <a href="/produto" class="btn">Encomendar bebê</a>
                </div>
            </div>
            <div>
                <div class="apresentacao_intro reversa grid-8">
                    <a href="/produto" class="btn rosa">Encomendar item</a>
                    <p><?php the_field('apresentacao_dois'); ?></p>
                    <h2 class="titulo">Itens de artesanato</h2>
                </div>
            </div>
        </div>
    </section>
    <section class="quem_sou alinhar_centro">
        <div class="container">
            <h2 class="titulo">Quem sou?</h2>
            <img src="<?php echo get_template_directory_uri(); ?>/img/Ícones/ícone interrogacao.svg" alt="Ponto de interrogação" class="grid-6">
            <img src="<?php echo get_template_directory_uri(); ?>/img/Ícones/linhas_interrogacao.svg" alt="Linhas apontando para as informações" class="linhas">
            <div class="container infos">
                <div class="informacao grid-5">
                    <h3 class="sub_titulo">Meu Objetivo</h3>
                    <p class="texto_info"><?php the_field('meu_objetivo'); ?></p>
                </div>
                <div class="informacao_central grid-6">
                    <h3 class="sub_titulo">Minha história</h3>
                    <p class="texto_info_central"><?php the_field('minha_historia'); ?></p>
                </div>
                <div class="informacao grid-5">
                    <h3 class="sub_titulo">Como trabalho</h3>
                    <p class="texto_info"><?php the_field('como_trabalho'); ?></p>
                </div>
            </div>
        </div>
    </section>
    <section class="produtos_home alinhar_centro">
        <div class="container">
            <div>
                <h2 class="titulo">Produtos</h2>
                <p>Aqui você encontra alguns de nossos produtos.</p>
            </div>
            <div  data-slide="produtos_home">
                <div class="container portfolio">
                    <div class="coluna primeiraC">
                        <div class="grid-5">
                            <figure class="foto_produto pequena">
                                <img src="img/produtos/produto-280x170.jpg" alt="Imagem de um bebê reborn">
                                <figcaption>
                                    <h3>Bebê reborn</h3>
                                </figcaption>
                            </figure>
                            <figure class="foto_produto pequena">
                                <img src="img/produtos/produto-280x170.jpg" alt="Imagem de um bebê reborn">
                                <figcaption>
                                    <h3>Bebê reborn</h3>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="grid-6">
                            <figure class="foto_produto media">
                                <img src="img/produtos/porduto2-340x360.jpg" alt="Imagem de um porta fraulda artesanal">
                                <figcaption>
                                    <h3 class="tiutlo_produto">Artesanato</h3>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="grid-11">
                            <figure class="foto_produto grande_larga">
                                <img src="img/produtos/produto-640x340.jpg" alt="Imagem de um bebê reborn">
                                <figcaption>
                                    <h3 class="tiutlo_produto">Bebê reborn</h3>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <div class="coluna segundaC">
                        <div class="grid-5">
                            <figure class="foto_produto grande_cumprida">
                                <img src="img/produtos/produto-280x530.jpg" alt="Imagem de um bebê reborn">
                                <figcaption>
                                    <h3 class="tiutlo_produto">Bebê reborn</h3>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="grid-5">
                            <figure class="foto_produto pequena">
                                <img src="img/produtos/produto2-280x170.jpg" alt="Imagem de um kit de artesanato">
                                <figcaption>
                                    <h3>Bebê reborn</h3>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="container portfolio">
                    <div class="coluna primeiraC">
                        <div class="grid-5">
                            <figure class="foto_produto pequena">
                                <img src="img/produtos/produto2-280x170.jpg" alt="Imagem de um kit de artesanato">
                                <figcaption>
                                    <h3>Bebê reborn</h3>
                                </figcaption>
                            </figure>
                            <figure class="foto_produto pequena">
                                <img src="img/produtos/produto2-280x170.jpg" alt="Imagem de um kit de artesanato">
                                <figcaption>
                                    <h3>Bebê reborn</h3>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="grid-6">
                            <figure class="foto_produto media">
                                <img src="img/produtos/produto-340x360.jpg" alt="Imagem de um bebê reborn">
                                <figcaption>
                                    <h3 class="tiutlo_produto">Artesanato</h3>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="grid-11">
                            <figure class="foto_produto grande_larga">
                                <img src="img/produtos/produto2-640x340.jpg" alt="Imagem de um kit artesanato">
                                <figcaption>
                                    <h3 class="tiutlo_produto">Bebê reborn</h3>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <div class="coluna segundaC">
                        <div class="grid-5">
                            <figure class="foto_produto grande_cumprida">
                                <img src="img/produtos/produto2-280x530.jpg" alt="Imagem de um porta frauldas">
                                <figcaption>
                                    <h3 class="tiutlo_produto">Bebê reborn</h3>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="grid-5">
                            <figure class="foto_produto pequena">
                                <img src="img/produtos/produto-280x170.jpg" alt="Imagem de um bebê reborn">
                                <figcaption>
                                    <h3>Bebê reborn</h3>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
            <div class="chamada_de_acao">
                <p>Clique no botão para ir para ver mais trabalhos.</p>
                <a href="/produto" class="btn">Produtos</a>
            </div>
        </div>
    </section>
    <section class="posts_recentes alinhar_centro">
        <div class="container">
            <h2 class="titulo">Posts recentes</h2>
            <div class="container alinhar_centro">
                <div class="post">
                    <h3 class="titulo_post">Passeio no parque</h3>
                    <figure class="tumb">
                        <img src="img/blog/tumb.jpg" alt="Imagem do post">
                        <figcaption>
                            <h3 class="legenda_impar">25/12/2020</h3>
                        </figcaption>
                    </figure>
                    <div class="descricao_post descricao_impar">
                        <p>Texto explicando o que aconteceu no diário do Miguel. Texto explicando o que aconteceu no diário do Miguel Texto explicando o que aconteceu no diário do Miguel</p>
                    </div>
                </div>
                <div class="post">
                    <h3 class="titulo_post">Passeio no parque</h3>
                    <figure class="tumb">
                        <img src="img/blog/tumb.jpg" alt="Imagem do post">
                        <figcaption>
                            <h3>25/12/2020</h3>
                        </figcaption>
                    </figure>
                    <div class="descricao_post">
                        <p>Texto explicando o que aconteceu no diário do Miguel. Texto explicando o que aconteceu no diário do Miguel Texto explicando o que aconteceu no diário do Miguel</p>
                    </div>
                </div>
                <div class="post ultimos">
                    <h3 class="titulo_post">Passeio no parque</h3>
                    <figure class="tumb">
                        <img src="img/blog/tumb.jpg" alt="Imagem do post">
                        <figcaption>
                            <h3 class="legenda_impar">25/12/2020</h3>
                        </figcaption>
                    </figure>
                    <div class="descricao_post descricao_impar">
                        <p>Texto explicando o que aconteceu no diário do Miguel. Texto explicando o que aconteceu no diário do Miguel Texto explicando o que aconteceu no diário do Miguel</p>
                    </div>
                </div>
                <div class="post ultimos">
                    <h3 class="titulo_post">Passeio no parque</h3>
                    <figure class="tumb">
                        <img src="img/blog/tumb.jpg" alt="Imagem do post">
                        <figcaption>
                            <h3>25/12/2020</h3>
                        </figcaption>
                    </figure>
                    <div class="descricao_post">
                        <p>Texto explicando o que aconteceu no diário do Miguel. Texto explicando o que aconteceu no diário do Miguel Texto explicando o que aconteceu no diário do Miguel</p>
                    </div>
                </div>
            </div>
            <div class="chamada_de_acao">
                <p>Clique no botão para mais posts.</p>
                <a href="/blog" class="btn">Blog</a>
            </div>
        </div>
    </section>
<?php endwhile; endif; ?>
<?php get_footer(); ?>