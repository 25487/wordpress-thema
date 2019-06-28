<?php
function custom_bronnen() {
	wp_enqueue_script('custom', get_theme_file_uri('/js/custom.js'), NULL , '1.0', true);
	wp_enqueue_style('Font', '//fonts.googleapis.com/css?family=Open+Sans&display=swap');
	wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'custom_bronnen');
register_nav_menus(array(
	'hoofd' => __('Hoofd menu'),
	'footer' => __('Menu in footer'),
));

function custom_widgets() {
	register_sidebar( array(
		'name'          => __('Widget aside'),
		'id'            => __('widget_aside'),
		'description'   => __('Hier komen widgets'),
	  'class'         => '',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>'
	));
}
add_action('widgets_init', 'custom_widgets');
?>

 
