<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 2/13/2019
 * Time: 3:45 PM
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'SSWT5_Maintenance' ) ) {
	class SSWT5_Maintenance {
		public static function maintenance() {
			add_action( 'get_header', array( 'SSWT5_Maintenance', 'maintenace_mode' ) );
		}

		function maintenace_mode() {
			if ( of_get_option( 'ss_maintenance' ) ) :
				if ( ! current_user_can( 'edit_themes' ) || ! is_user_logged_in() ) :
					wp_die( 'Sorry, we are having regular maintenance.' );
				endif;
			endif;
		}
	}
}