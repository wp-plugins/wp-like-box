<?php

class Wpfblb_Public {

	function __construct() {

		add_action( 'init', array( $this, 'add_assets' ) );

		add_action ( 'wp_footer', array( $this, 'popup_view'), 99 );

	}

	function add_assets() {


		wp_enqueue_script( 'magnific-popup', plugins_url( 'public/assets/jquery.magnific-popup.min.js', WPFBLB_PATH ), array( 'jquery' ), '1.0', true );

		wp_enqueue_style( 'magnific-popup', plugins_url( 'public/assets/magnific-popup.css', WPFBLB_PATH ) );

	}

	function popup_view() {

		$options = get_option( 'wpfblb-options' );

		if ( $options['status']  )
			include 'popup-views.php';

	}


}