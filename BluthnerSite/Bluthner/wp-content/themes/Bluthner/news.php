<div class="bp-news-container">
    <div class="bp-wrapper">
        <h3>News & Events</h3>

        <div class="bp-news-wrapper-outer">
        <?php query_posts("cat=14"); ?>
              <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                  <div class="bp-news-wrapper">
                      <div class="bp-news-title">
                          <?php the_title(); ?>
                      </div>
                      <div class="bp-news-description">
                          <?php the_excerpt(); ?>
                      </div>
                      <div class="bp-news-image">
                          <img src="<?php the_field('news_image'); ?>">
                      </div>
                  </div>
              <?php endwhile; else: ?>
                <p>Sorry, there are no posts to display</p>
            <?php endif; ?>
            <?php rewind_posts(); ?>
        </div>
    </div>
</div>
