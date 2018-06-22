<?php
require get_template_directory().'/include/customizer/social.php';
require get_template_directory().'/include/customizer/layout.php';

function mt_customize_register( $wp_customize ){
	$wp_customize->get_section('custom_css')->description = '';

	$wp_customize->add_panel('opcoes', array(
		'title' => 'Opções do Tema',
		'priority' => 200
	));

	mt_social_customizer( $wp_customize );

	mt_layout_customizer( $wp_customize );
}