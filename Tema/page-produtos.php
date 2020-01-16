<?php
	// Template Name: Produtos
    get_header();
?>
<?php if(have_posts()): while(have_posts()): the_post();?>
    <?php include(TEMPLATEPATH.'/inc/introducao.php'); ?>
    <section class="produtos_produtos alinhar_centro">
        <div class="container">
            <div>
                <h2 class="titulo">Bebês Reborn</h2>
            </div>
            <div data-slide="produtos_produtos1">
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
                                <img src="img/produtos/produto-340x360.jpg" alt="Imagem de um bebê reborn">
                                <figcaption>
                                    <h3 class="tiutlo_produto">Bebê rebonr</h3>
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
                                <img src="img/produtos/produto-280x170.jpg" alt="Imagem de um bebê reborn">
                                <figcaption>
                                    <h3>Bebê reborn</h3>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <h2 class="titulo">Artesanato</h2>
            </div>
            <div data-slide="produtos_produtos2">
                <div class="container portfolio">
                    <div class="coluna primeiraC">
                        <div class="grid-5">
                            <figure class="foto_produto pequena">
                                <img src="img/produtos/produto2-280x170.jpg" alt="Imagem de um kit de artesanato">
                                <figcaption>
                                    <h3>Artesanato</h3>
                                </figcaption>
                            </figure>
                            <figure class="foto_produto pequena">
                                <img src="img/produtos/produto2-280x170.jpg" alt="Imagem de um kit de artesanato">
                                <figcaption>
                                    <h3>Artesanato</h3>
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
                                <img src="img/produtos/produto2-640x340.jpg" alt="Imagem de um kit artesanato">
                                <figcaption>
                                    <h3 class="tiutlo_produto">Artesanato</h3>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <div class="coluna segundaC">
                        <div class="grid-5">
                            <figure class="foto_produto grande_cumprida">
                                <img src="img/produtos/produto2-280x530.jpg" alt="Imagem de um kit artesanato">
                                <figcaption>
                                    <h3 class="tiutlo_produto">Artesanato</h3>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="grid-5">
                            <figure class="foto_produto pequena">
                                <img src="img/produtos/produto2-280x170.jpg" alt="Imagem de um kit de artesanato">
                                <figcaption>
                                    <h3>Artesanato</h3>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <h2 class="titulo">Materiais</h2>
            </div>
            <div data-slide="materiais">
                <div class="container materias">
                    <div class="material grid-4">
                        <img src="img/material.jpg" alt="tinta pvc vermelha">
                        <h3>Nome material</h3>
                    </div>
                    <div class="material grid-4">
                        <img src="img/material.jpg" alt="tinta pvc vermelha">
                        <h3>Nome material</h3>
                    </div>
                    <div class="material grid-4">
                        <img src="img/material.jpg" alt="tinta pvc vermelha">
                        <h3>Nome material</h3>
                    </div>
                    <div class="material grid-4">
                        <img src="img/material.jpg" alt="tinta pvc vermelha">
                        <h3>Nome material</h3>
                    </div>
                    <div class="material ultimos grid-4">
                        <img src="img/material.jpg" alt="tinta pvc vermelha">
                        <h3>Nome material</h3>
                    </div>
                    <div class="material ultimos grid-4">
                        <img src="img/material.jpg" alt="tinta pvc vermelha">
                        <h3>Nome material</h3>
                    </div>
                    <div class="material ultimos grid-4">
                        <img src="img/material.jpg" alt="tinta pvc vermelha">
                        <h3>Nome material</h3>
                    </div>
                    <div class="material ultimos grid-4">
                        <img src="img/material.jpg" alt="tinta pvc vermelha">
                        <h3>Nome material</h3>
                    </div>
                </div>
            </div>
        </section>
        <section class="pedido">
            <h2 class="titulo" >Fazer pedido</h2>
            <form class="container alinhar_centro">
                <div class="grid-8 dados_pedidos">
                    <div>
                        <label for="nome">Nome</label>
                        <input type="text" name="nome" id="nome" placeholder="Nome Completo" required>
                    </div>
                    <div>
                        <label for="email">E-mail</label>
                        <input type="text" name="email" id="email" placeholder="exemplo@gnail.com" required>
                    </div>
                    <div>
                        <label for="tel">Telefone</label>
                        <input type="text" name="tel" id="tel" placeholder="(xx) xxxxx-xxxx">
                    </div>
                </div>
                <div class="grid-8 produto_pedido">
                    <div class="alinhar_centro">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/Ícones/sacola.svg" alt="sacola de compra" class="icone_produto icone_produto_ativo">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/Ícones/babê.svg" alt="sacola de bebê" class="icone_produto">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/Ícones/artesanato.svg" alt="sacola de artesanato" class="icone_produto">
                    </div>
                    <div>
                        <label for="bebe" class="texto_direita">Bebê reborn <input type="checkbox" name="produto" id="bebe"></label>
                        <label for="arte"><input type="checkbox" name="produto" id="arte"> Artesanato</label>
                    </div>
                </div>
                <button type="submit" class="btn">Fazer pedido</button>
            </form>
        </section>
<?php endwhile; endif; ?>
<?php get_footer(); ?>