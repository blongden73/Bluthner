<div class="bp-footer">
    <div class="bp-wrapper">
        <div class="bp-col">
            <div class="bp-logo">
                <?php get_template_part('bp-logo')?>
            </div>
            <div class="bp-address">
                <?php the_field('address', 81)?>
            </div>
        </div>
        <div class="bp-col">
            <div class="bp-opening-times">
                <?php the_field('showroom', 81)?>
            </div>
        </div>
        <div class="bp-col">
            <div class="bp-email">
            </div>
        </div>
<?php wp_footer(); ?>
</body>
</html>
