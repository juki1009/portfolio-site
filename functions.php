<?php
// テーマサポートの追加
add_theme_support('title-tag');
add_theme_support('post-thumbnails');
add_theme_support('menus');

// スタイル・スクリプトの読み込み
function enqueue_my_theme_assets() {
    wp_enqueue_style('main-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'enqueue_my_theme_assets');
