<?php
    // Funções para registrar scripts e css
    function foxwebsites_scripts() {
        wp_register_script( 'swipper', get_template_directory_uri() . '/js/swiper.js', [], false, true );
        wp_register_script( 'scroll-reveal', get_template_directory_uri() . '/js/scrollReveal.js', [], false, true );
        wp_register_script( 'modal', get_template_directory_uri() . '/js/modal.js', [], false, true );

        // Registrar Script
        wp_register_script( 'main-script', get_template_directory_uri() . '/js/script.js', ['swipper', 'scroll-reveal', 'modal'], false, true );

        wp_enqueue_script( 'main-script' );
    }
    add_action( 'wp_enqueue_scripts', 'foxwebsites_scripts' );

    function foxwebsites_css() {
        wp_register_style('style', get_template_directory_uri() . '/style.css', [], false, false);
        wp_enqueue_style('style');
    }
    add_action( 'wp_enqueue_scripts', 'foxwebsites_css' );

    // Funções para Limpar o Header
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'start_post_rel_link', 10, 0 );
    remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
    remove_action('wp_head', 'feed_links_extra', 3);
    remove_action('wp_head', 'wp_generator');
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('admin_print_styles', 'print_emoji_styles');

    // Habilita Menus
    add_theme_support('menus');
?>