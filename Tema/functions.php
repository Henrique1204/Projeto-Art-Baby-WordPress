<?php

//Função para registrar Javascript e css

function art_baby_scripts(){
	// Tirar o registro do JQuery padrão
	wp_deregister_script('jquery');

	//Rgistrar Plugin
	wp_register_script('simple-slide', get_template_directory_uri().'/JS/simple-slide.js', array(), false, true);

	wp_register_script('script', get_template_directory_uri().'/JS/script.js', array('simple-slide'), false, true);
	
	wp_register_script('funcoes', get_template_directory_uri().'/JS/funcoes.js', array(), false, true);
    
    // Carregar os scripts
	wp_enqueue_script('script');
	wp_enqueue_script('funcoes');
}
add_action('wp_enqueue_scripts', 'art_baby_scripts');

function art_baby_css(){

	//Registrar css
    wp_register_style('art-baby-style', get_template_directory_uri().'/style.css', array(), false, false);

	wp_register_style('art-baby-responsividade', get_template_directory_uri().'/CSS/responsividade.css', array(), false, false);

	//Carregar css
    wp_enqueue_style('art-baby-style');
    wp_enqueue_style('art-baby-responsividade');
}
add_action('wp_enqueue_scripts', 'art_baby_css');

// Funções limpar Header
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');

// Habilitar Menus
add_theme_support('menus');

//registrar menu
function register_my_menu(){
	register_nav_menu('menu-principal',__('Menu Principal'));
}
add_action('init', 'register_my_menu');

// Formatar imagens responsivas
function meus_tamanhos_personalizados(){
	add_image_size('large', 580, 580, true);
	add_image_size('medium', 300, 300, true);
}
add_action('after_setup_theme', 'meus_tamanhos_personalizados');