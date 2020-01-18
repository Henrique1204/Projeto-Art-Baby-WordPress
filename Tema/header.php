<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
	<meta name="description" content="<?php bloginfo('name'); wp_title(' - '); the_field('descricao_seo'); ?>">
	<meta property="og:type" content="website"/>
	<meta property="og:title" content="<?php bloginfo('name'); wp_title(' - '); the_field('titulo_seo'); ?>"/>
	<meta property="og:description" content="<?php the_field('descricao_seo'); ?>"/>
	<meta property="og:url" content="<?php bloginfo('url'); ?>"/>
	<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/img/og-artbaby.png"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Righteous&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amiri&display=swap" rel="stylesheet">
    <!-- Scripts-->
    <script>document.documentElement.classList.add('js')</script>
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.png">
    <title><?php bloginfo('name'); wp_title(' | ');?> - <?php the_field('titulo_seo'); ?></title>
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
                <?php $args = array(
                    'menu' => 'principal',
                    'theme_location' => 'menu-principal',
                    'container' => false
                    );
                    wp_nav_menu($args);
                ?>
            </nav>
        </div>
    </header>