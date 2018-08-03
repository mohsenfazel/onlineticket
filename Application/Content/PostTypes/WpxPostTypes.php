<?php
/**
 * Created by PhpStorm.
 * User: Mohsen
 * Date: 02/08/2018
 * Time: 02:35
 */

namespace Application\Content\PostTypes;


class WpxPostTypes {
	public static function init(  ) {
		call_user_func([new TicketPostType(),'register']);
	}
}