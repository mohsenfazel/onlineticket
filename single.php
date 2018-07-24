<?php get_header(); ?>
<!-- banner-bottom -->
<div class="banner-bottom">
    <!-- container -->
    <div class="container">
        <div class="faqs-top-grids">
            <div class="blog-grids">
                <div class="col-md-8 blog-left">
					<?php if ( have_posts() ): ?>
					<?php while ( have_posts() ):
					the_post() ?>
                    <div class="blog-left-grid single-left-grid">
                        <p>Posted By <a href="#"><?php the_author(); ?></a> &nbsp;&nbsp;<?php the_date(); ?> &nbsp;&nbsp;
                            <a href="#"><?php comments_number(); ?></a></p>
						<?php the_post_thumbnail(); ?>
                        <div class="blog-left-right">
							<?php the_content(); ?>
                        </div>
                        <!-- if comments are open or we have at least one comment, load up the comment template.-->
						<?php get_template_part( 'partials/activate_comment' ); ?>
                        <!-- if comments are open or we have at least one comment, load up the comment template.-->
						<?php endwhile; ?>
						<?php endif; ?>
                        <div class="response">
                            <h3>Responses</h3>
                            <div class="media response-info">
                                <div class="media-left response-text-left">
                                    <a href="#">
                                        <img class="media-object" src="images/user1.jpg" alt="">
                                    </a>
                                    <h5><a href="#">Admin</a></h5>
                                </div>
                                <div class="media-body response-text-right">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many
                                        variations of passages of Lorem Ipsum available,
                                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <ul>
                                        <li>June 21, 2013</li>
                                        <li><a href="single.html">Reply</a></li>
                                    </ul>
                                    <div class="media response-info">
                                        <div class="media-left response-text-left">
                                            <a href="#">
                                                <img class="media-object" src="images/user2.jpg" alt="">
                                            </a>
                                            <h5><a href="#">Admin</a></h5>
                                        </div>
                                        <div class="media-body response-text-right">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many
                                                variations of passages of Lorem Ipsum available,
                                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                            <ul>
                                                <li>June 21, 2014</li>
                                                <li><a href="single.html">Reply</a></li>
                                            </ul>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="media response-info">
                                <div class="media-left response-text-left">
                                    <a href="#">
                                        <img class="media-object" src="images/user3.jpg" alt="">
                                    </a>
                                    <h5><a href="#">Admin</a></h5>
                                </div>
                                <div class="media-body response-text-right">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many
                                        variations of passages of Lorem Ipsum available,
                                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <ul>
                                        <li>June 21, 2013</li>
                                        <li><a href="single.html">Reply</a></li>
                                    </ul>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <!--                        <div class="opinion">-->
                        <!--                            <h3>Leave your comment</h3>-->
                        <!--                            <form>-->
                        <!--                                <input type="text" placeholder="Name" required="">-->
                        <!--                                <input type="text" placeholder="Email" required="">-->
                        <!--                                <textarea placeholder="Message" required=""></textarea>-->
                        <!--                                <input type="submit" value="SEND">-->
                        <!--                            </form>-->
                        <!--                        </div>-->
                    </div>
                </div>
				<?php get_sidebar(); ?>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!-- //container -->
</div>
<!-- //banner-bottom -->
<?php get_footer(); ?>
