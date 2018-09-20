<?php

/**
 * huchasheva.tmweb.ru functions and definitions
 */
add_action('after_setup_theme', function() {

    //регистрируем области меню
    register_nav_menus(array(
        'primary' => 'Главное меню',
        'footer' => 'Меню в футере'
    ));

    //
    add_theme_support('menus');
    add_theme_support('post-thumbnails');


});

add_action('wp_enqueue_scripts', function() {
    //регаем стили
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_register_style('bootstrap-theme', get_template_directory_uri() . '/css/bootstrap-theme.min.css', ['bootstrap']);
    wp_register_style('style', get_template_directory_uri() . '/style.css', ['bootstrap-theme']);
    //регаем скрипты
    wp_register_script('jquery', get_template_directory_uri() . '/js/jquery.min.js', [], FALSE, TRUE);
    wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', ['jquery'], FALSE, TRUE);
    wp_register_script('calculator', get_template_directory_uri() . '/js/calculator.js', ['jquery'], FALSE, TRUE);
    
    //подключаем стили
    wp_enqueue_style('style');
    
    
    //include scripts
    wp_enqueue_script('bootstrap');
    wp_enqueue_script('calculator');
    
});

add_filter('nav_menu_css_class', function ($classes, $item) {
    if (in_array('current-menu-item', $classes)) {
        $classes[] = 'active ';
    }
    return $classes;
}, 10, 2);

add_filter('excerpt_more', function($more) {
        global $post;
	return ' <a href="'. get_permalink($post->ID) . '">Читать дальше......</a>';
});