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
            <?php if(have_rows('imagens_portfolio_bebe')): while(have_rows('imagens_portfolio_bebe')): the_row(); ?>
                <div class="container portfolio">
                    <div class="coluna primeiraC">
                        <div class="grid-5">
                            <figure class="foto_produto pequena">
                                <img src="<?php the_sub_field('imagem_um'); ?>" alt="<?php the_sub_field('alt_um'); ?>">
                                <figcaption>
                                    <h3><?php the_sub_field('nome_um'); ?></h3>
                                </figcaption>
                            </figure>
                            <figure class="foto_produto pequena">
                                <img src="<?php the_sub_field('imagem_dois'); ?>" alt="<?php the_sub_field('alt_dois'); ?>">
                                <figcaption>
                                    <h3><?php the_sub_field('nome_dois'); ?></h3>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="grid-6">
                            <figure class="foto_produto media">
                                <img src="<?php the_sub_field('imagem_tres'); ?>" alt="<?php the_sub_field('alt_tres'); ?>">
                                <figcaption>
                                    <h3 class="tiutlo_produto"><?php the_sub_field('nome_tres'); ?></h3>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="grid-11">
                            <figure class="foto_produto grande_larga">
                                <img src="<?php the_sub_field('imagem_quatro'); ?>" alt="<?php the_sub_field('alt_quatro'); ?>">
                                <figcaption>
                                    <h3 class="tiutlo_produto"><?php the_sub_field('nome_quatro'); ?></h3>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <div class="coluna segundaC">
                        <div class="grid-5">
                            <figure class="foto_produto grande_cumprida">
                                <img src="<?php the_sub_field('imagem_cinco'); ?>" alt="<?php the_sub_field('alt_cinco'); ?>">
                                <figcaption>
                                    <h3 class="tiutlo_produto"><?php the_sub_field('nome_cinco'); ?></h3>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="grid-5">
                            <figure class="foto_produto pequena">
                                <img src="<?php the_sub_field('imagem_seis'); ?>" alt="<?php the_sub_field('alt_seis'); ?>">
                                <figcaption>
                                    <h3><?php the_sub_field('nome_seis'); ?></h3>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
                <?php endwhile; endif; ?>
            </div>
            <div>
                <h2 class="titulo">Artesanato</h2>
            </div>
            <div data-slide="produtos_produtos2">
            <?php if(have_rows('imagens_portfolio_artesanato')): while(have_rows('imagens_portfolio_artesanato')): the_row(); ?>
                <div class="container portfolio">
                    <div class="coluna primeiraC">
                        <div class="grid-5">
                            <figure class="foto_produto pequena">
                                <img src="<?php the_sub_field('imagem_um'); ?>" alt="<?php the_sub_field('alt_um'); ?>">
                                <figcaption>
                                    <h3><?php the_sub_field('nome_um'); ?></h3>
                                </figcaption>
                            </figure>
                            <figure class="foto_produto pequena">
                                <img src="<?php the_sub_field('imagem_dois'); ?>" alt="<?php the_sub_field('alt_dois'); ?>">
                                <figcaption>
                                    <h3><?php the_sub_field('nome_dois'); ?></h3>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="grid-6">
                            <figure class="foto_produto media">
                                <img src="<?php the_sub_field('imagem_tres'); ?>" alt="<?php the_sub_field('alt_tres'); ?>">
                                <figcaption>
                                    <h3 class="tiutlo_produto"><?php the_sub_field('nome_tres'); ?></h3>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="grid-11">
                            <figure class="foto_produto grande_larga">
                                <img src="<?php the_sub_field('imagem_quatro'); ?>" alt="<?php the_sub_field('alt_quatro'); ?>">
                                <figcaption>
                                    <h3 class="tiutlo_produto"><?php the_sub_field('nome_quatro'); ?></h3>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <div class="coluna segundaC">
                        <div class="grid-5">
                            <figure class="foto_produto grande_cumprida">
                                <img src="<?php the_sub_field('imagem_cinco'); ?>" alt="<?php the_sub_field('alt_cinco'); ?>">
                                <figcaption>
                                    <h3 class="tiutlo_produto"><?php the_sub_field('nome_cinco'); ?></h3>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="grid-5">
                            <figure class="foto_produto pequena">
                                <img src="<?php the_sub_field('imagem_seis'); ?>" alt="<?php the_sub_field('alt_seis'); ?>">
                                <figcaption>
                                    <h3><?php the_sub_field('nome_seis'); ?></h3>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
                <?php endwhile; endif; ?>
            </div>
            <div>
                <h2 class="titulo">Materiais</h2>
            </div>
            <div data-slide="materiais">
                <?php if(have_rows('imagens_portfolio_materiais')): while(have_rows('imagens_portfolio_materiais')): the_row(); ?>
                <div class="container materias">
                    <div class="material grid-4">
                        <img src="<?php the_sub_field('imagem_um'); ?>" alt="<?php the_sub_field('alt_um'); ?>">
                        <h3><?php the_sub_field('nome_um'); ?></h3>
                    </div>
                    <div class="material grid-4">
                        <img src="<?php the_sub_field('imagem_dois'); ?>" alt="<?php the_sub_field('alt_dois'); ?>">
                        <h3><?php the_sub_field('nome_dois'); ?></h3>
                    </div>
                    <div class="material grid-4">
                        <img src="<?php the_sub_field('imagem_tres'); ?>" alt="<?php the_sub_field('alt_tres'); ?>">
                        <h3><?php the_sub_field('nome_tres'); ?></h3>
                    </div>
                    <div class="material grid-4">
                        <img src="<?php the_sub_field('imagem_quatro'); ?>" alt="<?php the_sub_field('alt_quatro'); ?>">
                        <h3><?php the_sub_field('nome_quatro'); ?></h3>
                    </div>
                    <div class="material ultimos grid-4">
                        <img src="<?php the_sub_field('imagem_cinco'); ?>" alt="<?php the_sub_field('alt_cinco'); ?>">
                        <h3><?php the_sub_field('nome_cinco'); ?></h3>
                    </div>
                    <div class="material ultimos grid-4">
                        <img src="<?php the_sub_field('imagem_seis'); ?>" alt="<?php the_sub_field('alt_seis'); ?>">
                        <h3><?php the_sub_field('nome_seis'); ?></h3>
                    </div>
                    <div class="material ultimos grid-4">
                        <img src="<?php the_sub_field('imagem_sete'); ?>" alt="<?php the_sub_field('alt_sete'); ?>">
                        <h3><?php the_sub_field('nome_sete'); ?></h3>
                    </div>
                    <div class="material ultimos grid-4">
                        <img src="<?php the_sub_field('imagem_oito'); ?>" alt="<?php the_sub_field('alt_oito'); ?>">
                        <h3><?php the_sub_field('nome_oito'); ?></h3>
                    </div>
                </div>
                <?php endwhile; endif; ?>
            </div>
        </section>
        <section class="pedido">
            <h2 class="titulo" >Fazer pedido</h2>
            <form method="post" action="<?php echo get_template_directory_uri(); ?>/enviar.php" class="container alinhar_centro form_php">
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
                        <label for="bebe" class="texto_direita">Bebê reborn <input type="checkbox" name="produto" id="bebe" value="bebe"></label>
                        <label for="arte"><input type="checkbox" name="produto" id="arte" value="arte"> Artesanato</label>
                    </div>
                </div>
                <button type="submit" class="btn" id="enviar">Fazer pedido</button>
            </form>
        </section>
<?php endwhile; endif; ?>
<?php get_footer(); ?>