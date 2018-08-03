<?php

namespace Application\Content\PostTypes;


use Application\Content\PostTypes\Contract\BasePostType;

class TicketPostType extends BasePostType {
	public function __construct(  ) {
		$this->id='ticket';
		$this->labels=array(
			'name'                  => _x( 'بلیت ها', 'Post type general name', 'textdomain' ),
			'singular_name'         => _x( 'بلیت', 'Post type singular name', 'textdomain' ),
			'menu_name'             => _x( 'بلیت ها', 'Admin Menu text', 'textdomain' ),
			'name_admin_bar'        => _x( 'بلیت', 'Add New on Toolbar', 'textdomain' ),
			'add_new'               => __( 'افزودن جدید', 'textdomain' ),
			'add_new_item'          => __( 'افزودن بلیت جدید', 'textdomain' ),
			'new_item'              => __( 'بلیت جدید', 'textdomain' ),
			'edit_item'             => __( 'ویرایش بلیت', 'textdomain' ),
			'view_item'             => __( 'مشاهده بلیت', 'textdomain' ),
			'all_items'             => __( 'همه بلیت ها', 'textdomain' ),
			'search_items'          => __( 'جستجوی بلیت ها', 'textdomain' ),
			'parent_item_colon'     => __( 'بلیت های والد:', 'textdomain' ),
			'not_found'             => __( 'بلیتی یافت نشد.', 'textdomain' ),
			'not_found_in_trash'    => __( 'بلیتی در زباله دان یافت نشد.', 'textdomain' ),
			'featured_image'        => _x( 'تصویر شاخص بلیت', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain' ),
			'set_featured_image'    => _x( 'تنظیم تصویر شاخص بلیت', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
			'remove_featured_image' => _x( 'حذف تصویر شاخص', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
			'use_featured_image'    => _x( 'استفاده به عنوان تصویر شاخص', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
			'archives'              => _x( 'آرشیو بلیت ها', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain' ),
			'insert_into_item'      => _x( 'افزودن به بلیت ها', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'textdomain' ),
			'uploaded_to_this_item' => _x( 'آپلود شده در این بلیت', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'textdomain' ),
			'filter_items_list'     => _x( 'فیلتر لیست بلیت ها', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'textdomain' ),
			'items_list_navigation' => _x( 'پیمایش لیست بلیت ها', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'textdomain' ),
			'items_list'            => _x( 'لیست بلیت ها', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'textdomain' ),
		);
		parent::__construct();

	}
}