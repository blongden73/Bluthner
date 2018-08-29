<?php get_template_part('meta')?>
<div class="bp-header">
    <div class="bp-wrapper">
        <div class="bp-logo">
            <a href="<?php bloginfo('url'); ?>"><?php get_template_part('bp-logo')?></a>
        </div>
        <div class="bp-menu">
            <div class="desktop bp-menu-links">
                <?php wp_nav_menu( array( 'theme_location' => 'site-menu' ) ); ?>
            </div>
            <div class="mobile bp-menu-links">
                <div class="bp-menu-button">Menu</div>
            </div>
        </div>
    </div>
</div>
<div class="bp-mobile-menu">
    <?php wp_nav_menu( array( 'theme_location' => 'site-menu' ) ); ?>
</div>
