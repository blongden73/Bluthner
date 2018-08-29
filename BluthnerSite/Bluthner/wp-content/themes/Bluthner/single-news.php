<div class="bp-wrapper">
    <div class="bp-page-image">
        <img src="<?php the_field('news_image')?>" >
    </div>
    <div class="bp-page-content">
        <div class="bp-page-title bp-page-news">
            <h1><?php the_title(); ?></h1>
        </div>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; else : ?>
        	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>
    </div>
    <div class="bp-page-blocks">
        <?php if( have_rows('page_block') ): ?>
            <div class="block">
            	<?php while( have_rows('page_block') ): the_row();
            		// vars
            		$title = get_sub_field('title');
            		$content = get_sub_field('content');
            		?>
                    <h1><?php echo $title ?></h1>
                    <div class="bp-page-block__content">
                        <?php echo $content ?>
                    </div>
            	<?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
</div>
