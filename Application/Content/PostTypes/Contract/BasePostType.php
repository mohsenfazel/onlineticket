<?php

namespace Application\Content\PostTypes\Contract;


class BasePostType {
	protected $id;
	protected $labels;
	protected $args;

	public function __construct(  ) {
		$this->args=array(
			'labels'             => $this->labels,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => $this->id ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => null,
			'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
		);
	}

	public function register(  ) {
		register_post_type($this->id,$this->args);
	}
}