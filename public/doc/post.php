<?php

function itech_doc_register_my_cpts_doc() {

	/**
	 * Post Type: Docs.
	 */

	$labels = [
		"name" => __( "iTech Docs", "itech-doc" ),
		"singular_name" => __( "iTech Doc", "itech-doc" ),
	];

	$args = [
		"label" => __( "iTech Docs", "itech_doc" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => true,
		"rewrite" => [ "slug" => "idoc", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-media-document",
		"supports" => [ "title", "editor", "thumbnail" ],
	];

	register_post_type( "doc", $args );
}

add_action( 'init', 'itech_doc_register_my_cpts_doc' );
