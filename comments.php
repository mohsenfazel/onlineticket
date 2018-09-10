
<div class="opinion">
    <div class="custom-comments">
        <div class="container">
			<?php
			$commenter = wp_get_current_commenter();
			$req      = get_option( 'require_name_email' );
			$aria_req = ( $req ? " aria-required='true'" : '' );

			$fields = array(
				'author' => '<div class="comment-form-author"><label for="author"> Name '.( $req ? '<span class="required">*</span>' : '' ) .'  </label> 
				            <input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
				            '" size="30"' . $aria_req . ' /></div>',
				'email'  =>
					'<p class="comment-form-email"><label for="email"> Email '.( $req ? '<span class="required">*</span>' : '' ) .'</label> 
					<input id="email" name="email" type="text" value="' . esc_attr( $commenter['comment_author_email'] ) .
					'" size="30"' . $aria_req . ' /></p>',
				'url'    =>
					'<p class="comment-form-url"><label for="url"> Website </label>' .
					'<input id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) .
					'" size="30" /></p>',

			);
			$args   = array(
				'id_form'              => 'commentform',
				'class_form'           => 'comment-form',
				'id_submit'            => 'submit',
				'class_submit'         => 'submit',
				'name_submit'          => 'submit',
//	'title_reply'       => __( '<span>write your comment</span>' ),
				'title_reply_to'       => __( 'Leave a reply to %s' ),
				'cancel_reply_link'    => __( 'Cancel comment' ),
				'label_submit'         => __( 'Post Comment' ),
				'format'               => 'html5',
				'comment_field'        => '<p class="comment-form-comment"><label for="comment">دیدگاه<span class="required">*</span></label><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true" placeholder=""></textarea></p>',
				'must_log_in'          => '<p class="must-log-in">' .
				                          sprintf(
					                          __( 'You must be <a href="%s">logged in</a> to post a comment.' ),
					                          wp_login_url( apply_filters( 'the_permalink', get_permalink() ) )
				                          ) . '</p>',
				'logged_in_as'         => '<p class="logged-in-as">' .
				                          sprintf(
					                          __( 'Logged in as <a href="%1$s">%2$s</a>. <a href="%3$s" title="Log out of this account">Log out?</a>' ),
					                          admin_url( 'profile.php' ),
					                          $user->user_nicename,
					                          wp_logout_url( apply_filters( 'the_permalink', get_permalink() ) )
				                          ) . '</p>',
				'comment_notes_before' => '<p class="comment-notes">' .
				                          __( 'Your email address will not be published.' ) . ( $req ? $required_text : '' ) .
				                          '</p>',
//				'comment_notes_after'  => '<p class="form-allowed-tags">' .
//				                          sprintf(
//					                          __( 'You may use these <abbr title="HyperText Markup Language">HTML</abbr> tags and attributes: %s' ),
//					                          ' <code>' . allowed_tags() . '</code>'
//				                          ) . '</p>',
				'fields'               => apply_filters( 'comment_form_default_fields', $fields ),
			);
			comment_form( $args ); ?>
            <div class="nav-links">
                <div class="nav-previous">
					<?php previous_comments_link( 'دیدگاه های قدیمی تر' ); ?>
                </div>
                <div class="nav-next">
					<?php next_comments_link( 'دیدگا های جدید تر' ); ?>
                </div>
            </div>
            <ol class="comments" id="comments">
				<?php
				wp_list_comments(
					array(
						'style'     => 'ol',
						'max_depth' => '5',
						'callback'  => 'ticket_online_comment',
					)
				);
				?>
            </ol>
            <div class="nav-links">
                <div class="nav-previous">
					<?php previous_comments_link( 'دیدگاه های قدیمی تر' ); ?>
                </div>
                <div class="nav-next">
					<?php next_comments_link( 'دیدگا های جدید تر' ); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!--function callback for function wp_list_comments-->
<?php
function ticket_online_comment( $comment, $args, $depth ) {
	?>
    <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
        <div id="comment-<?php comment_ID() ?>">
            <div class="comment-author vcard">
                <!--Show avatar-->
				<?php echo get_avatar( $comment->comment_author_email ); ?>
                <!--/Show avatar-->
                <!--show author-->
                <cite class="fn"><?php echo get_comment_author_link(); ?></cite>
                <!--/show author-->

            </div>
            <!--Checking out the comment-->
			<?php if ( $comment->comment_approved == 0 ) { ?>
                <em>دیدگاه شما در حال بررسی توسط مدیر می باشد.</em>
			<?php } ?>
            <!--/Checking out the comment-->
            <div class="comment-meta commentmetadata">
                <!--comment date and time-->
                <a class="comment-date"
                   href="<?php echo get_comment_link( $comment->comment_ID ) ?>"><?php echo get_comment_date();
					echo ' ' . get_comment_time() ?></a>
                <!--/comment date and time-->
                <!--edit comment-->
				<?php edit_comment_link( 'ویرایش' ) ?>
                <!--/edit comment-->
            </div>
            <!--content comment-->
            <div class="comment-text">
				<?php comment_text(); ?>
            </div>
            <!--/content comment-->
            <!--Reply to comment-->
            <div class="reply">
				<?php comment_reply_link( array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ?>
            </div>
            <!--/Reply to comment-->
        </div>
    </li>
	<?php
}

?>
<!--/function callback for function wp_list_comments-->
