<?php 
function themaVadim_bronnen(){
	wp_enqueue_script('Vadim-scripts', get_theme_file_uri('/js/scriptVadim.js'), NULL, '1.0', true);
	wp_enqueue_style('style', get_stylesheet_uri());
	
}
	add_action(wp_enqueue_scripts, 'themaVadim_bronnen');
?>

<!-- Registeer menu's -->
<?php 
register_nav_menus(array(
'hoofd' => __('Hoofd menu'),
'footer' => __('Menu in footer'),
));