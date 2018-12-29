<?php
define( 'TEMPPATH', get_bloginfo('stylesheet_directory'));
define( 'IMAGES', TEMPPATH. "/img");

// Register Custom Navigation Walker
require_once get_template_directory() . '/wp-bootstrap-navwalker.php';

register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'primarynav' ),
) );

  /* Register our widgetized areas. */

  function arphabet_widgets_init() {
	register_sidebar( array(
		'name'          => 'Event Widget',
		'id'            => 'event_widget',
	)
 	);
	register_sidebar( array(
		'name'          => 'Landing Photo Widget',
		'id'            => 'landingphoto_widget',
	)
 	);
	register_sidebar( array(
		'name'          => 'Gallery Widget',
		'id'            => 'gallery_widget',
	)
	 );
	 register_sidebar( array(
		'name'          => 'About Widget',
		'id'            => 'about_widget',
	)
 	);
}

add_action( 'widgets_init', 'arphabet_widgets_init' );

/* Custom Shortcodes */

?>
