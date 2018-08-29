<div class="bp-home-blocks">
    <div class="bp-wrapper">
        <?php
        // check for rows (parent repeater)
        if( have_rows('blocks', 51) ): ?>
            <?php
            // loop through rows (parent repeater)
            while( have_rows('blocks', 51) ): the_row(); ?>
            <?php if( get_sub_field('type', 51) == 'grand' ): ?>
                <div class="bp-home-block">
                    <?php
                    // check for rows (sub repeater)
                    if( have_rows('Block_options', 51) ): ?>
                        <?php
                        // loop through rows (sub repeater)
                        while( have_rows('Block_options', 51) ): the_row();
                            // display each item as a list - with a class of completed ( if completed )
                            $title = get_sub_field('title');
                            $image = get_sub_field('image');
                            $ctatext = get_sub_field('link_text');
                            $link = get_sub_field('link');
                            ?>
                            <div class="bp-grand">
                                <div class="bp-grand-image">
                                    <a href="<?php echo $link ?>"></a>
                                    <img src="<?php echo $image?>">
                                    <h1><?php echo $title ?></h1>
                                    <div class="bp-grand-cta">
                                        <?php echo $ctatext ?>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; //if( get_sub_field('items') ): ?>
                </div>
                <?php endif; ?>
                <?php if( get_sub_field('type', 51) == 'upright' ): ?>
                    <div class="bp-home-block">
                        <?php
                        // check for rows (sub repeater)
                        if( have_rows('Block_options', 51) ): ?>
                            <?php
                            // loop through rows (sub repeater)
                            while( have_rows('Block_options', 51) ): the_row();
                                // display each item as a list - with a class of completed ( if completed )
                                $title = get_sub_field('title');
                                $content = get_sub_field('content');
                                $mini_text_link = get_sub_field('mini_link_text');
                                $image = get_sub_field('image');
                                $upright_link_text = get_sub_field('upright_link_text');
                                $upright_link = get_sub_field('upright_link');
                                $mini_link = get_sub_field('mini_link');
                                ?>
                                <div class="bp-upright">
                                    <div class="bp-upright-left">
                                        <h1><?php echo $title ?></h1>
                                        <div class="bp-upright-copy"><?php echo $content ?></div>
                                    </div>
                                    <div class="bp-upright-right">
                                        <div class="bp-right-left">
                                            <div class="bp-small-block">
                                                <div class="bp-small-block-copy">
                                                    <a href="<?php echo $link ?>"></a>
                                                    <div class="bp-grand-cta">
                                                        <?php echo $mini_text_link ?>
                                                    </div>
                                                </div>
                                                <div class="bp-small-block-copy mobile">
                                                    <a href="<?php echo $link ?>"></a>
                                                    <div class="bp-grand-cta">
                                                        <?php echo $upright_link_text ?>
                                                    </div>
                                                </div>
                                                <div class="bp-small-block-image">
                                                    <img src="<?php echo $image ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bp-right-right desktop">
                                            <div class="bp-tall-block">
                                                <div class="bp-tall-block-copy">
                                                    <a href="<?php echo $link ?>"></a>
                                                    <div class="bp-grand-cta">
                                                        <?php echo $upright_link_text ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; //if( get_sub_field('items') ): ?>
                    </div>
                    <?php endif; ?>
            <?php endwhile; // while( has_sub_field('to-do_lists') ): ?>
        <?php endif; // if( get_field('to-do_lists') ): ?>
    </div>
</div>
