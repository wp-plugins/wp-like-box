<?php

class Wpfblb_Admin {


	function __construct() {

		add_action( 'admin_menu', array( $this, 'add_menu_page' ) );

		$options = array (
				'status' => false,
				'show_faces' => true,
				'hide_cover' => false,
				'page_posts' => false,
				'page_url' => 'https://www.facebook.com/facebook',
				'width' => 400,
				'height' => 220,
				'use_cookies' => true,
				'cookies_expiration_time' => 0
			);

		if ( ! get_option( 'wpfblb-options' ) )
			update_option( 'wpfblb-options', $options );

	}

	function add_menu_page() {

		add_menu_page( 'Facebook Like Box', 'FB Like Box', 'manage_options',
					 'wpfblb-menu', array( $this, 'settings_page' ) );

	}

	function settings_page() {

		if ( isset( $_POST['wpfblb-options'] ) ) {


			$options = get_option( 'wpfblb-options' );

			if ( ! $options )
				$options = array();

			$options['page_url'] = $_POST['page_url'];

			$options['width'] = $_POST['width'];

			$options['height'] = $_POST['height'];

			$options['cookies_expiration_time'] = $_POST['cookies_expire'];

			//checkbox

			if ( isset( $_POST['status'] ) )
				$options['status'] = true;
			else
				$options['status'] = false;

			if ( isset( $_POST['show_faces'] ) )
				$options['show_faces'] = true;
			else
				$options['show_faces'] = false;

			if ( isset( $_POST['hide_cover'] ) )
				$options['hide_cover'] = true;
			else
				$options['hide_cover'] = false;

			if ( isset( $_POST['page_posts'] ) )
				$options['page_posts'] = true;
			else
				$options['page_posts'] = false;

			if ( isset( $_POST['use_cookies'] ) )
				$options['use_cookies'] = true;
			else
				$options['use_cookies'] = false;


			update_option( 'wpfblb-options', $options );

		}

		$options = get_option( 'wpfblb-options' );
		
		include 'view-settings-page.php';
		
	}


}