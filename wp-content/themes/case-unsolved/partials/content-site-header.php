<header class="site-header">
    <div class="container">
        <button class="site-menu-toggle">
            <span class="bar"></span>
            <span class="bar"></span>
        </button>
    </div>
</header>
<div class="site-menu">
    <div class="container">
        <nav>
            <?php echo strip_tags(wp_nav_menu([
                'echo' => false,
                'items_wrap' => '%3$s',
                'theme_location' => 'header-menu',
            ]), '<a>'); ?>
        </nav>
    </div>
</div>
