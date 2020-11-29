<?php 

function load_more_scripts() {
    global $wp_query; 

    wp_enqueue_script('jquery');

    wp_register_script( 'load-more', get_stylesheet_directory_uri() . '/js/build/load-more.min.js', array('jquery') );

    wp_localize_script( 'load-more', 'load_more_params', array(
        'ajaxurl' => site_url() . '/wp-admin/admin-ajax.php',
        'posts' => json_encode( $wp_query->query_vars ),
        'current_page' => get_query_var( 'paged' ) ? get_query_var('paged') : 1,
        'max_page' => $wp_query->max_num_pages
    ) );

    wp_enqueue_script( 'load-more' );
}

add_action( 'wp_enqueue_scripts', 'load_more_scripts' );

function load_more_ajax_handler(){
 
	$args = json_decode( stripslashes( $_POST['query'] ), true );
	$args['paged'] = $_POST['page'] + 1;
	$args['post_status'] = 'publish';

	query_posts( $args );
 
	if( have_posts() ) :
 
		while( have_posts() ): the_post();
 
			get_template_part( 'template-parts/content' );
 
		endwhile;
 
	endif;
	die;
}
 
add_action('wp_ajax_loadmore', 'load_more_ajax_handler');
add_action('wp_ajax_nopriv_loadmore', 'load_more_ajax_handler');