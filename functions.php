<?php 
add_action('wp_print_styles', function () {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
});
register_nav_menus(array(
	'top'    => 'Верхнее меню',    //Название месторасположения меню в шаблоне
	'bottom' => 'Нижнее меню'      //Название другого месторасположения меню в шаблоне
));

function add_menu_link_class( $atts, $item, $args ) {
	if (property_exists($args, 'link_class')) {
	  $atts['class'] = $args->link_class;
	}
	return $atts;
  }
  add_filter( 'nav_menu_link_attributes', 'add_menu_link_class', 1, 3 );

  function add_menu_list_item_class($classes, $item, $args) {
	 if (property_exists($args, 'list_item_class')) {
	 $classes[] = $args->list_item_class;
	 }
	 return $classes;
	}
	add_filter('nav_menu_css_class', 'add_menu_list_item_class', 1, 3);
add_theme_support( 'post-thumbnails' );
add_theme_support( 'custom-background' );