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
        <div class="bp-piano-filters">
            <div class="bp-piano-categories">
                <h1>By Brand</h1>
                <ul>
                    <a href="<?php bloginfo('url') ?>/explore"><li>All</li></a>
                    <a href="<?php bloginfo('url') ?>/category/bluthner/"><li>Bluthner</li></a>
                    <a href="<?php bloginfo('url') ?>/category/haessler/"><li>Haessler</li></a>
                    <a href="<?php bloginfo('url') ?>/category/irmler/"><li>Irmler</li></a>
                    <a href="<?php bloginfo('url') ?>/category/eklavier/"><li>E-Klavier</li></a>
                    <a href="<?php bloginfo('url') ?>/category/design/"><li>Design</li></a>
                    <a href="<?php bloginfo('url') ?>/category/secondhand/"><li>Secondhand</li></a>
                </ul>
            </div>
            <div class="bp-piano-tag">
                <h1>By Type</h1>
                <ul>
                    <a href="<?php bloginfo('url') ?>/category/bluthner/"><li>All</li></a>
                    <a href="<?php bloginfo('url') ?>/category/grand/"><li>Grand</li></a>
                    <a href="<?php bloginfo('url') ?>/category/baby-grand/"><li>Baby Grand</li></a>
                    <a href="<?php bloginfo('url') ?>/category/upright/"><li>Upright</li></a>
                    <a href="<?php bloginfo('url') ?>/category/digital/"><li>Digital</li></a>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="bp-mobile-menu">
    <?php wp_nav_menu( array( 'theme_location' => 'site-menu' ) ); ?>
</div>
