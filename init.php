<?php

	// Exit if accessed directly
	if ( ! defined( 'ABSPATH' ) ) exit;

	/**
	 * Plugin version
	 *
	 * @var string
	 */

	if ( ! defined( 'LEADBOXER_DIR' ) ) {
		define( 'LEADBOXER_DIR', plugin_dir_path( __FILE__ ) );
	}

	if ( ! defined( 'LEADBOXER_URL' ) ) {
		define( 'LEADBOXER_URL', plugins_url( '/', __FILE__ ) );
	}

?>