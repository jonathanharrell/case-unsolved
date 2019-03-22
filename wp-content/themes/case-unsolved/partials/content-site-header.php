<?php echo strip_tags(wp_nav_menu([
    'container' => 'nav',
    'container_class' => 'site-nav',
    'echo' => false,
    'items_wrap' => '%3$s',
    'theme_location' => 'header-menu',
]), '<a>'); ?>
