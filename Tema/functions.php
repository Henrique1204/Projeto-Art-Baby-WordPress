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