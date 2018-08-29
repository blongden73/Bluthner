<div class="bp-single-head">
    <div class="bp-wrapper">
        <div class="bp-single-breadcrumb"></div>
        <div class="bp-single-info">
            <div class="bp-single-description">
                <h1><?php the_field('name') ?></h1>
                <h2><?php the_field('type') ?></h2>
                <p><?php the_field('description') ?></p>
                <div class="bp-cta">
                    <span class="bp-cta-inner">ENQUIRE ABOUT THIS PIANO</span>
                </div>
            </div>
            <div class="bp-single-image">
                <img src="<?php the_field('image') ?>">
            </div>
        </div>
    </div>
</div>
<div class="bp-more-information">
    <div class="bp-wrapper">
        <div class="bp-more-deatails">
            <h3>More about <?php the_field('name') ?></h3>
            <p><?php the_field('more_details') ?></p>
        </div>
        <div class="bp-more-size">
            <h3>Size</h3>
            <p><?php the_field('size') ?></p>
        </div>
    </div>
    <div class="bp-wrapper">
        <div class="bp-colours">
            <?php if( have_rows('colours') ): ?>
                   <?php while( have_rows('colours') ): the_row();
                    // vars
                    $colour = get_sub_field('colour_name');
                    ?>
                    <?php if( $colour == 'all' ): ?>
                        <div class="bp-colour-all">
                            <div class="bp-colour Black-Polished"></div>
                            <div class="bp-colour Black-Satin"></div>
                            <div class="bp-colour White-Polished"></div>
                            <div class="bp-colour Mahogany-Polished"></div>
                            <div class="bp-colour Pyramid-Mahogany-Polished"></div>
                            <div class="bp-colour Mahogany-Satin"></div>
                            <div class="bp-colour Walut-Polished"></div>
                            <div class="bp-colour Burl-Walnut-Polished"></div>
                            <div class="bp-colour Walnut-Satin"></div>
                            <div class="bp-colour Cherry-Polished"></div>
                            <div class="bp-colour Cherry-Satin"></div>
                            <div class="bp-colour Palisander-Rosewood-Polished"></div>
                            <div class="bp-colour Palisander-Rosewood-Satin"></div>
                            <div class="bp-colour Bubinga-Polished"></div>
                            <div class="bp-colour Bubinga-Satin"></div>
                            <div class="bp-colour Yew-Polished"></div>
                            <div class="bp-colour Yew-Satin"></div>
                            <div class="bp-colour Makassar-Ebony-Polished"></div>
                            <div class="bp-colour Makassar-Ebony-Satin"></div>
                        </div>
                    <?php endif; ?>
                    <?php if( $colour != 'all' ): ?>
                        <div class="bp-colour <?php echo $colour ?>"></div>
                    <?php endif; ?>

                   <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</div>
<div class="bp-single-lower-module">
    <div class="bp-wrapper">
        <div class="bp-single-lower-module-description">
            <h1><?php the_field('lower_block_title') ?></h1>
            <p><?php the_field('lower_block_description') ?></p>
        </div>
        <div class="bp-single-lower-module-image">
            <img src="<?php the_field('lower_block_image') ?>">
        </div>
    </div>
</div>
<div class="bp-single-bottom-module">
    <div class="bp-wrapper">
        <div class="bp-single-bottom-module-description">
            <h1><?php the_field('bottom_block_title') ?></h1>
            <p><?php the_field('bottom_block_description') ?></p>
        </div>
        <div class="bp-single-bottom-module-image">
            <img src="<?php the_field('bottom_block_image') ?>">
        </div>
    </div>
</div>
