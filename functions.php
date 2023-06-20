<?php

// 登録済みのjQueryを解除して、登録し直す
function remove_default_jquery()
{
    // 管理画面でないなら
    if (!is_admin()) {
        wp_deregister_script('jquery');

        wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery-3.2.1.min.js', array(), 3.2, true);
        wp_enqueue_script('popper_js', get_template_directory_uri() . '/styles/bootstrap4/popper.js', array(), 4.0, true);
        wp_enqueue_script('bootstrap4_js', get_template_directory_uri() . '/styles/bootstrap4/bootstrap.min.js', array(), 4.0, true);
    }
}

function add_link_files() {

    // CSSの読み込み
    wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/styles/bootstrap4/bootstrap.min.css' );
    wp_enqueue_style( 'plugins', get_template_directory_uri().'/plugins/font-awesome-4.7.0/css/font-awesome.min.css' );
    wp_enqueue_style( 'main_style', get_template_directory_uri().'/styles/main_styles.css' );
    
  
    // JavaScriptの読み込み
    wp_enqueue_script( 'jquery', get_template_directory_uri().'/js/jquery-3.2.1.min.js', array('jquery'), '3.2.1', true );
    wp_enqueue_script( 'bootstrap_js', get_template_directory_uri().'/styles/bootstrap4/popper.js', array('jquery'), '1', true );
    wp_enqueue_script( 'bootstrap4_js', get_template_directory_uri().'/styles/bootstrap4/bootstrap.min.js', array('jquery'), '1', true );
  }
  add_action( 'wp_enqueue_scripts', 'add_link_files' );


add_action('wp_enqueue_scripts', 'remove_default_jquery');
