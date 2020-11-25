<?php
/**
 * Create A Simple Theme Options Panel
 *
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Start Class
if ( ! class_exists( 'Custom_Theme_Settings' ) ) {

	class Custom_Theme_Settings {

		/**
		 * Start things up
		 *
		 * @since 1.0.0
		 */
		public function __construct() {

			// We only need to register the admin panel on the back-end
			if ( is_admin() ) {
				add_action( 'admin_menu', array( 'Custom_Theme_Settings', 'add_admin_menu' ) );
				add_action( 'admin_init', array( 'Custom_Theme_Settings', 'register_settings' ) );
			}

		}

		/**
		 * Returns all theme options
		 *
		 * @since 1.0.0
		 */
		public static function get_theme_options() {
			return get_option( 'theme_options' );
		}

		/**
		 * Returns single theme option
		 *
		 * @since 1.0.0
		 */
		public static function get_theme_option( $id ) {
			$options = self::get_theme_options();
			if ( isset( $options[$id] ) ) {
				return $options[$id];
			}
		}

		/**
		 * Add sub menu page
		 *
		 * @since 1.0.0
		 */
		public static function add_admin_menu() {
			add_menu_page(
				esc_html__( 'LASS', 'custom-options' ),
				esc_html__( 'Theme Settings', 'custom-options' ),
				'manage_options',
				'theme-settings',
				array( 'Custom_Theme_Settings', 'create_admin_page' )
			);
		}

		/**
		 * Register a setting and its sanitization callback.
		 *
		 * We are only registering 1 setting so we can store all options in a single option as
		 * an array. You could, however, register a new setting for each option
		 *
		 * @since 1.0.0
		 */
		public static function register_settings() {
			register_setting( 'theme_options', 'theme_options', array( 'Custom_Theme_Settings', 'sanitize' ) );
		}

		/**
		 * Sanitization callback
		 *
		 * @since 1.0.0
		 */
		public static function sanitize( $options ) {

			if ( $options ) {

				if ( ! empty( $options['timeline-page-url'] ) ) {
					$options['timeline-page-url'] = sanitize_text_field( $options['timeline-page-url'] );
				} else {
					unset( $options['timeline-page-url'] );
                }
				 
			}

			return $options;

		}

		/**
		 * Settings page output
		 *
		 * @since 1.0.0
		 */
		public static function create_admin_page() { ?>

			<div class="wrap">

				<h1><?php esc_html_e( 'Theme Options', 'custom-options' ); ?></h1>

				<form method="post" action="options.php">

					<?php settings_fields( 'theme_options' ); ?>

                    <h2>Galvenie uzstādījumi</h2>
					<table class="form-table ui celled table">

						<tr valign="top">
							<th scope="row">
                                <?php esc_html_e( 'Pasākumu kalendāra links', 'custom-options' ); ?>
                            </th>
							<td>
								<?php $value = self::get_theme_option( 'timeline-page-url' ); ?>
								<input type="text" name="theme_options[timeline-page-url]" value="<?php echo esc_attr( $value ); ?>">
							</td>
						</tr>

					</table>

					<?php submit_button(); ?>

				</form>

			</div>
		<?php }

	}
}
new Custom_Theme_Settings();

function get_custom_theme_option( $id = '' ) {
	return Custom_Theme_Settings::get_theme_option( $id );
}