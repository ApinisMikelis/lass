<?php

function cptui_register_my_taxes() {

/**
 * Taxonomy: Biedru kategorijas.
 */

$labels = [
    "name" => __( "Biedru kategorijas", "wp-bootstrap-starter" ),
    "singular_name" => __( "Biedru kategorija", "wp-bootstrap-starter" ),
    "menu_name" => __( "Biedru kategorijas", "wp-bootstrap-starter" ),
    "all_items" => __( "All Biedru kategorijas", "wp-bootstrap-starter" ),
    "edit_item" => __( "Edit Biedru kategorija", "wp-bootstrap-starter" ),
    "view_item" => __( "View Biedru kategorija", "wp-bootstrap-starter" ),
    "update_item" => __( "Update Biedru kategorija name", "wp-bootstrap-starter" ),
    "add_new_item" => __( "Add new Biedru kategorija", "wp-bootstrap-starter" ),
    "new_item_name" => __( "New Biedru kategorija name", "wp-bootstrap-starter" ),
    "parent_item" => __( "Parent Biedru kategorija", "wp-bootstrap-starter" ),
    "parent_item_colon" => __( "Parent Biedru kategorija:", "wp-bootstrap-starter" ),
    "search_items" => __( "Search Biedru kategorijas", "wp-bootstrap-starter" ),
    "popular_items" => __( "Popular Biedru kategorijas", "wp-bootstrap-starter" ),
    "separate_items_with_commas" => __( "Separate Biedru kategorijas with commas", "wp-bootstrap-starter" ),
    "add_or_remove_items" => __( "Add or remove Biedru kategorijas", "wp-bootstrap-starter" ),
    "choose_from_most_used" => __( "Choose from the most used Biedru kategorijas", "wp-bootstrap-starter" ),
    "not_found" => __( "No Biedru kategorijas found", "wp-bootstrap-starter" ),
    "no_terms" => __( "No Biedru kategorijas", "wp-bootstrap-starter" ),
    "items_list_navigation" => __( "Biedru kategorijas list navigation", "wp-bootstrap-starter" ),
    "items_list" => __( "Biedru kategorijas list", "wp-bootstrap-starter" ),
];

$args = [
    "label" => __( "Biedru kategorijas", "wp-bootstrap-starter" ),
    "labels" => $labels,
    "public" => true,
    "publicly_queryable" => true,
    "hierarchical" => false,
    "show_ui" => true,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "query_var" => true,
    "rewrite" => [ 'slug' => 'member_category', 'with_front' => true, ],
    "show_admin_column" => false,
    "show_in_rest" => true,
    "rest_base" => "member_category",
    "rest_controller_class" => "WP_REST_Terms_Controller",
    "show_in_quick_edit" => false,
        ];
register_taxonomy( "member_category", [ "biedri" ], $args );

/**
 * Taxonomy: Pasākumu kategorijas.
 */

$labels = [
    "name" => __( "Pasākumu kategorijas", "wp-bootstrap-starter" ),
    "singular_name" => __( "Pasākuma kategorija", "wp-bootstrap-starter" ),
];

$args = [
    "label" => __( "Pasākumu kategorijas", "wp-bootstrap-starter" ),
    "labels" => $labels,
    "public" => true,
    "publicly_queryable" => true,
    "hierarchical" => false,
    "show_ui" => true,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "query_var" => true,
    "rewrite" => [ 'slug' => 'event_category', 'with_front' => true, ],
    "show_admin_column" => false,
    "show_in_rest" => true,
    "rest_base" => "event_category",
    "rest_controller_class" => "WP_REST_Terms_Controller",
    "show_in_quick_edit" => false,
        ];
register_taxonomy( "event_category", [ "event" ], $args );
}
add_action( 'init', 'cptui_register_my_taxes' );
