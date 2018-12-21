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
		'name'          => 'Home Widget 1',
		'id'            => 'home_widget_1',
	)
 	);
	register_sidebar( array(
		'name'          => 'Home Widget 2',
		'id'            => 'home_widget_2',
	)
 	);
	register_sidebar( array(
		'name'          => 'Home Widget 3',
		'id'            => 'home_widget_3',
	)
	 );
	 register_sidebar( array(
		'name'          => 'Home Widget 4',
		'id'            => 'home_widget_4',
	)
 	);
}

add_action( 'widgets_init', 'arphabet_widgets_init' );

/* Custom Shortcodes */

?>
