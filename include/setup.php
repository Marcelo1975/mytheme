<?php
function mt_theme_styles(){
	wp_enqueue_style("bootstrap_css", get_template_directory_uri()."/assets/css/bootstrap.min.css");

	wp_enqueue_style("template_css", get_template_directory_uri()."/assets/css/template.css");

	wp_enqueue_script("bootstrap_js", get_template_directory_uri()."/assets/js/bootstrap.min.js", array('jquery'), false, true);

	wp_enqueue_script("script_js", get_template_directory_uri()."/assets/js/script.js", array('jquery'),'bootstrap_js', false, true);
}

function mt_after_setup(){
	add_theme_support("post-thumbnails");
	add_theme_support("title-tag");
	add_theme_support("custom-logo");
	add_theme_support("post-formats", array('video', 'audio'));

	register_nav_menu("primary", __("Menu Primeiro"));
	register_nav_menu("top", __("Menu Superior"));
}

function mt_widgets(){
	register_sidebar(array(
		'name' => 'Sidebar Lateral',
		'id' => 'mt_sidebar',
		'description' => 'Sidebar Lateral',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widget_title">',
		'after_title' => '</h4>'
	));

	register_sidebar(array(
		'name' => 'Sidebar Rodapé',
		'id' => 'mt_footersidebar',
		'description' => 'Sidebar Rodapé',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widget_title">',
		'after_title' => '</h4>'
	));
}