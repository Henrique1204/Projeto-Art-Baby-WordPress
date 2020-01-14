<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Righteous&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amiri&display=swap" rel="stylesheet">
    <!-- Scripts-->
    <script>document.documentElement.classList.add('js')</script>
    <script src="JS/simple-slide.js" defer></script>
    <script src="JS/script.js" defer></script>
    <script src="JS/funcoes.js" defer></script>
    <title>Art baby - Bebês Reborn e Artesanato para enxoval</title>
    <!-- Header WP -->
    <?php wp_head(); ?>
</head>
<body>
    <header class="alinhar_centro">
        <div class="container">
            <div class="grid-3">
                <a href="/">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo-marca.svg" alt="Logo marca da empresa">
                </a>
            </div>
            <nav class="menu_navegacao">
                <ul class="grid-10">
                    <li><a href="/produtos" class="caminho_menu">Produtos</a></li>
                    <li><a href="/contato" class="caminho_menu">Contato</a></li>
                    <li><a href="/blog" class="caminho_menu">Blog</a></li>
                </ul>
            </nav>
        </div>
    </header>