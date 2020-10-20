<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area col-sm-12 col-lg-3 " role="complementary">

	<button class="sidebar-nav-toggler btn btn-light btn-block  d-lg-none"
		type="button"
		data-toggle="collapse"
		data-target="#menu-wrap"
		aria-controls=""
		aria-expanded="false"
		aria-label="Toggle navigation">
		<span class="open-btn"><?php echo __( 'Atvērt izvēlni', 'wp-bootstrap-starter' ); ?> </span>
		<span class="close-btn"><?php echo __( 'Aizvērt izvēlni', 'wp-bootstrap-starter' ); ?> </span>
		<i class="fas fa-chevron-up"></i>
	</button>

	<div id="menu-wrap" class="collapse show">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</div>
</aside>
