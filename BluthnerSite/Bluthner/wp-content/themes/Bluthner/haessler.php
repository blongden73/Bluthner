<div class="bp-container bp-products-container">
    <div class="bp-wrapper">
        <div class="bp-piano-category">
            <div class="bp-piano-category-title">
                <h1>
                    <?php echo get_cat_name(5);?>
                </h1>
            </div>
            <div class="bp-piano-description">
                <p>
                    <?php echo category_description(5); ?>
                </p>
            </div>
        </div>
    </div>
</div>
<div class="bp-wrapper">
    <div class="bp-piano-inner">
        <?php query_posts("cat=5"); ?>
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php $name = get_field('name'); ?>
            <?php $type = get_field('type'); ?>
            <?php $image = get_field('front_image'); ?>


            <div id="bp-piano-wrapper" <?php post_class(); ?>>
                <a href="<?php the_permalink(); ?>"></a>
                <div class="bp-piano-image">
                    <img src="<?php echo $image ?>">
                </div>
                <h1><?php echo $name ?></h1>
                <h2><?php echo $type ?></h2>
            </div>

            <?php endwhile; else: ?>
                <p>Sorry, there are no posts to display</p>
        <?php endif; ?>
        <?php rewind_posts(); ?>
    </div>
</div>
