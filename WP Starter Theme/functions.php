<?php
define( 'TEMPPATH', get_bloginfo('stylesheet_directory'));
define( 'IMAGES', TEMPPATH. "/img");

function register_my_menu() {
    register_nav_menu('header-menu',__( 'Header Menu' ));
  }
  add_action( 'init', 'register_my_menu' );

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
}

add_action( 'widgets_init', 'arphabet_widgets_init' );

/* Custom Shortcodes */

// function trainerProfiles() {
//     $trainers = [Jim, Bob, Gary];

//     for($i=0; $i<=2; $i++) {
//         echo '<div class="col-sm-4 well">',$trainers[$i], '</div>'; 
//     }
// }
// add_shortcode( "trainers", "trainerProfiles");

?>
