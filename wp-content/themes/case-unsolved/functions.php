<?php

require 'classes/WHQAssets.php';
require_once 'functions/menus.php';
require_once 'functions/post-types.php';

$GLOBALS['assets'] = new WHQAssets(get_template_directory() . '/build/manifest.json');

add_theme_support( 'post-thumbnails' );

add_action('wp_print_styles', 'wps_deregister_styles', 100);

function wps_deregister_styles()
{
    wp_dequeue_style('wp-block-library');
}
