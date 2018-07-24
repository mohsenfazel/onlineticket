<?php
//To enable comment on any page or post, just add this file.
// if comments are open or we have at least one comment, load up the comment template.
if ( comments_open() || get_comments_number() ) :
	comments_template();
endif;