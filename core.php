<?php

function load_wpfblb() {
	
	include 'admin/class-wpfblb-admin.php';
	include 'public/class-wpfblb-public.php';

	new Wpfblb_Admin();

	if ( ! is_admin() )
		new Wpfblb_Public();
}