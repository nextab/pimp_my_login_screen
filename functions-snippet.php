<?php
// Load a stylesheet for the login page to make it look pretty! :-)
function nextab_login_stylesheet() {
	wp_enqueue_style( 'custom-login', get_stylesheet_directory_uri() . '/css/loginpage.css' );
}
add_action( 'login_enqueue_scripts', 'nextab_login_stylesheet' );

// The following function will create a footer that will be displayed on the login page. Change the ID of the menu ("XXX" in the code below) to load the menu you want to display there.
function nextab_footer_login_form() {
	$args = [
		'menu' => XXX,
		'container_class' => 'nxt-login-footer-menu',
	];
	echo '<footer class="nxt-login-footer">';
	wp_nav_menu($args);
	echo '</footer>';
}
add_action('login_footer', 'nextab_footer_login_form');