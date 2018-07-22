<?php get_header(); ?>
<?php get_template_part( 'partials/top-header' ); ?>
<div id="banner-bottom">
    <div id="container">
        <?php if(have_posts()): ?>
            <?php while (have_posts()):the_post(); ?>
                <div class="post">
                    <h4 class="about-info">
                        <?php the_title(); ?>
                    </h4>
                    <div class="post-excerpt">
                        <?php the_content() ?>
                    </div>
                    <div class="post-details">
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>
<?php get_template_part( 'partials/footer' ); ?>
<?php get_template_part( 'partials/footer-bottom-grids' ); ?>
<?php get_footer() ?>
