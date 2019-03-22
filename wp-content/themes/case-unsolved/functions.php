<?php

require 'classes/WHQAssets.php';

$GLOBALS['assets'] = new WHQAssets(get_template_directory() . '/build/manifest.json');

function register_my_menu()
{
    register_nav_menu('header-menu',__('Header Menu'));
}
add_action('init', 'register_my_menu');
