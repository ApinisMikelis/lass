<?php

function cptui_register_my_cpts() {

	/**
	 * Post Type: Events.
	 */

	$labels = [
		"name" => __( "Events", "wp-bootstrap-starter" ),
		"singular_name" => __( "Event", "wp-bootstrap-starter" ),
		"menu_name" => __( "Pasākumi", "wp-bootstrap-starter" ),
		"all_items" => __( "Visi pasākumi", "wp-bootstrap-starter" ),
		"add_new" => __( "Pievienot jaunu", "wp-bootstrap-starter" ),
		"add_new_item" => __( "Pievienot jaunu pasākumu", "wp-bootstrap-starter" ),
		"edit_item" => __( "Labot pasākumu", "wp-bootstrap-starter" ),
		"new_item" => __( "Jauns pasākums", "wp-bootstrap-starter" ),
		"view_item" => __( "Skatīt pasākumu", "wp-bootstrap-starter" ),
		"view_items" => __( "Skatīt pasākumus", "wp-bootstrap-starter" ),
		"search_items" => __( "Meklēt pasākumus", "wp-bootstrap-starter" ),
		"not_found" => __( "Netika atrasts neviens pasākums", "wp-bootstrap-starter" ),
		"not_found_in_trash" => __( "No Events found in trash", "wp-bootstrap-starter" ),
		"parent" => __( "Parent Event:", "wp-bootstrap-starter" ),
		"featured_image" => __( "Featured image for this Event", "wp-bootstrap-starter" ),
		"set_featured_image" => __( "Set featured image for this Event", "wp-bootstrap-starter" ),
		"remove_featured_image" => __( "Remove featured image for this Event", "wp-bootstrap-starter" ),
		"use_featured_image" => __( "Use as featured image for this Event", "wp-bootstrap-starter" ),
		"archives" => __( "Pasākumu arhīvs", "wp-bootstrap-starter" ),
		"insert_into_item" => __( "Pievienot pasākumam", "wp-bootstrap-starter" ),
		"uploaded_to_this_item" => __( "Augšupielādēt uz šī pasākuma", "wp-bootstrap-starter" ),
		"filter_items_list" => __( "Filter Events list", "wp-bootstrap-starter" ),
		"items_list_navigation" => __( "Events list navigation", "wp-bootstrap-starter" ),
		"items_list" => __( "Events list", "wp-bootstrap-starter" ),
		"attributes" => __( "Events attributes", "wp-bootstrap-starter" ),
		"name_admin_bar" => __( "Pasākums", "wp-bootstrap-starter" ),
		"item_published" => __( "Pasākums publicēts", "wp-bootstrap-starter" ),
		"item_published_privately" => __( "Pasākums publicēts privāti", "wp-bootstrap-starter" ),
		"item_reverted_to_draft" => __( "Event reverted to draft.", "wp-bootstrap-starter" ),
		"item_scheduled" => __( "Event scheduled", "wp-bootstrap-starter" ),
		"item_updated" => __( "Event updated.", "wp-bootstrap-starter" ),
		"parent_item_colon" => __( "Parent Event:", "wp-bootstrap-starter" ),
	];

	$args = [
		"label" => __( "Events", "wp-bootstrap-starter" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "event",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "event", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-calendar-alt",
		"supports" => [ "title", "editor", "custom-fields" ],
		"taxonomies" => [ "post_tag" ],
	];

	register_post_type( "event", $args );

	/**
	 * Post Type: Galerijas.
	 */

	$labels = [
		"name" => __( "Galerijas", "wp-bootstrap-starter" ),
		"singular_name" => __( "Galerija", "wp-bootstrap-starter" ),
		"menu_name" => __( "Galerijas", "wp-bootstrap-starter" ),
		"all_items" => __( "Visas galerijas", "wp-bootstrap-starter" ),
		"add_new" => __( "Pievienot jaunu", "wp-bootstrap-starter" ),
		"add_new_item" => __( "Pievienot jaunu galeriju", "wp-bootstrap-starter" ),
		"edit_item" => __( "Rediģēt galeriju", "wp-bootstrap-starter" ),
		"new_item" => __( "Jauna galerija", "wp-bootstrap-starter" ),
		"view_item" => __( "Skatīt galeriju", "wp-bootstrap-starter" ),
		"view_items" => __( "Skatīt galerijas", "wp-bootstrap-starter" ),
		"search_items" => __( "Meklēt", "wp-bootstrap-starter" ),
		"not_found" => __( "Nekas netika atrasts", "wp-bootstrap-starter" ),
		"not_found_in_trash" => __( "Nekas netika atrasts", "wp-bootstrap-starter" ),
		"parent" => __( "Parent Galerija:", "wp-bootstrap-starter" ),
		"featured_image" => __( "Galerijas titulbilde", "wp-bootstrap-starter" ),
		"set_featured_image" => __( "Iestatīt galerijas titulbildi", "wp-bootstrap-starter" ),
		"remove_featured_image" => __( "Remove featured image for this Galerija", "wp-bootstrap-starter" ),
		"use_featured_image" => __( "Use as featured image for this Galerija", "wp-bootstrap-starter" ),
		"archives" => __( "Galerija archives", "wp-bootstrap-starter" ),
		"insert_into_item" => __( "Insert into Galerija", "wp-bootstrap-starter" ),
		"uploaded_to_this_item" => __( "Upload to this Galerija", "wp-bootstrap-starter" ),
		"filter_items_list" => __( "Filter Galerijas list", "wp-bootstrap-starter" ),
		"items_list_navigation" => __( "Galerijas list navigation", "wp-bootstrap-starter" ),
		"items_list" => __( "Galerijas list", "wp-bootstrap-starter" ),
		"attributes" => __( "Galerijas attributes", "wp-bootstrap-starter" ),
		"name_admin_bar" => __( "Galerija", "wp-bootstrap-starter" ),
		"item_published" => __( "Galerija publicēta", "wp-bootstrap-starter" ),
		"item_published_privately" => __( "Galerija published privately.", "wp-bootstrap-starter" ),
		"item_reverted_to_draft" => __( "Galerija reverted to draft.", "wp-bootstrap-starter" ),
		"item_scheduled" => __( "Galerija scheduled", "wp-bootstrap-starter" ),
		"item_updated" => __( "Galerija updated.", "wp-bootstrap-starter" ),
		"parent_item_colon" => __( "Parent Galerija:", "wp-bootstrap-starter" ),
	];

	$args = [
		"label" => __( "Galerijas", "wp-bootstrap-starter" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "bilzu-galerija", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-format-gallery",
		"supports" => [ "title" ],
	];

	register_post_type( "bilzu-galerija", $args );

	/**
	 * Post Type: Biedri.
	 */

	$labels = [
		"name" => __( "Biedri", "wp-bootstrap-starter" ),
		"singular_name" => __( "Biedrs", "wp-bootstrap-starter" ),
		"menu_name" => __( "Biedri", "wp-bootstrap-starter" ),
		"all_items" => __( "Visi biedri", "wp-bootstrap-starter" ),
		"add_new" => __( "Add new", "wp-bootstrap-starter" ),
		"add_new_item" => __( "Add new Biedrs", "wp-bootstrap-starter" ),
		"edit_item" => __( "Edit Biedrs", "wp-bootstrap-starter" ),
		"new_item" => __( "New Biedrs", "wp-bootstrap-starter" ),
		"view_item" => __( "View Biedrs", "wp-bootstrap-starter" ),
		"view_items" => __( "View Biedri", "wp-bootstrap-starter" ),
		"search_items" => __( "Search Biedri", "wp-bootstrap-starter" ),
		"not_found" => __( "No Biedri found", "wp-bootstrap-starter" ),
		"not_found_in_trash" => __( "No Biedri found in trash", "wp-bootstrap-starter" ),
		"parent" => __( "Parent Biedrs:", "wp-bootstrap-starter" ),
		"featured_image" => __( "Featured image for this Biedrs", "wp-bootstrap-starter" ),
		"set_featured_image" => __( "Set featured image for this Biedrs", "wp-bootstrap-starter" ),
		"remove_featured_image" => __( "Remove featured image for this Biedrs", "wp-bootstrap-starter" ),
		"use_featured_image" => __( "Use as featured image for this Biedrs", "wp-bootstrap-starter" ),
		"archives" => __( "Biedrs archives", "wp-bootstrap-starter" ),
		"insert_into_item" => __( "Insert into Biedrs", "wp-bootstrap-starter" ),
		"uploaded_to_this_item" => __( "Upload to this Biedrs", "wp-bootstrap-starter" ),
		"filter_items_list" => __( "Filter Biedri list", "wp-bootstrap-starter" ),
		"items_list_navigation" => __( "Biedri list navigation", "wp-bootstrap-starter" ),
		"items_list" => __( "Biedri list", "wp-bootstrap-starter" ),
		"attributes" => __( "Biedri attributes", "wp-bootstrap-starter" ),
		"name_admin_bar" => __( "Biedrs", "wp-bootstrap-starter" ),
		"item_published" => __( "Biedrs published", "wp-bootstrap-starter" ),
		"item_published_privately" => __( "Biedrs published privately.", "wp-bootstrap-starter" ),
		"item_reverted_to_draft" => __( "Biedrs reverted to draft.", "wp-bootstrap-starter" ),
		"item_scheduled" => __( "Biedrs scheduled", "wp-bootstrap-starter" ),
		"item_updated" => __( "Biedrs updated.", "wp-bootstrap-starter" ),
		"parent_item_colon" => __( "Parent Biedrs:", "wp-bootstrap-starter" ),
	];

	$args = [
		"label" => __( "Biedri", "wp-bootstrap-starter" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "biedri", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-businessperson",
		"supports" => [ "title", "thumbnail" ],
	];

	register_post_type( "biedri", $args );

	/**
	 * Post Type: Atbalstītāji.
	 */

	$labels = [
		"name" => __( "Atbalstītāji", "wp-bootstrap-starter" ),
		"singular_name" => __( "Atbalstītājs", "wp-bootstrap-starter" ),
		"menu_name" => __( "Atbalstītāji", "wp-bootstrap-starter" ),
		"all_items" => __( "Visi Atbalstītāji", "wp-bootstrap-starter" ),
		"add_new" => __( "Pievienot jaunu", "wp-bootstrap-starter" ),
		"add_new_item" => __( "Pievienot jaunu atbalstītāju", "wp-bootstrap-starter" ),
		"edit_item" => __( "Rediģēt atbalstītāju", "wp-bootstrap-starter" ),
		"new_item" => __( "Jauns atbalstītājs", "wp-bootstrap-starter" ),
		"view_item" => __( "View Atbalstītājs", "wp-bootstrap-starter" ),
		"view_items" => __( "View Atbalstītāji", "wp-bootstrap-starter" ),
		"search_items" => __( "Search Atbalstītāji", "wp-bootstrap-starter" ),
		"not_found" => __( "No Atbalstītāji found", "wp-bootstrap-starter" ),
		"not_found_in_trash" => __( "No Atbalstītāji found in trash", "wp-bootstrap-starter" ),
		"parent" => __( "Parent Atbalstītājs:", "wp-bootstrap-starter" ),
		"featured_image" => __( "Atbalstītāja logo", "wp-bootstrap-starter" ),
		"set_featured_image" => __( "Uzstādīt atbalstītāja logo", "wp-bootstrap-starter" ),
		"remove_featured_image" => __( "Noņemt atbalstītāja logo", "wp-bootstrap-starter" ),
		"use_featured_image" => __( "Uzstādīt atbalstītāja logo", "wp-bootstrap-starter" ),
		"archives" => __( "Atbalstītājs archives", "wp-bootstrap-starter" ),
		"insert_into_item" => __( "Insert into Atbalstītājs", "wp-bootstrap-starter" ),
		"uploaded_to_this_item" => __( "Upload to this Atbalstītājs", "wp-bootstrap-starter" ),
		"filter_items_list" => __( "Filter Atbalstītāji list", "wp-bootstrap-starter" ),
		"items_list_navigation" => __( "Atbalstītāji list navigation", "wp-bootstrap-starter" ),
		"items_list" => __( "Atbalstītāji list", "wp-bootstrap-starter" ),
		"attributes" => __( "Atbalstītāji attributes", "wp-bootstrap-starter" ),
		"name_admin_bar" => __( "Atbalstītājs", "wp-bootstrap-starter" ),
		"item_published" => __( "Atbalstītājs published", "wp-bootstrap-starter" ),
		"item_published_privately" => __( "Atbalstītājs published privately.", "wp-bootstrap-starter" ),
		"item_reverted_to_draft" => __( "Atbalstītājs reverted to draft.", "wp-bootstrap-starter" ),
		"item_scheduled" => __( "Atbalstītājs scheduled", "wp-bootstrap-starter" ),
		"item_updated" => __( "Atbalstītājs updated.", "wp-bootstrap-starter" ),
		"parent_item_colon" => __( "Parent Atbalstītājs:", "wp-bootstrap-starter" ),
	];

	$args = [
		"label" => __( "Atbalstītāji", "wp-bootstrap-starter" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "supporter", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-thumbs-up",
		"supports" => [ "title", "thumbnail" ],
	];

	register_post_type( "supporter", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );
