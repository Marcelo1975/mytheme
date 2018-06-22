<?php
require get_template_directory().'/include/customizer/social.php';
require get_template_directory().'/include/customizer/layout.php';

function mt_customize_register( $wp_customize ){

	mt_social_customizer( $wp_customize );

	mt_layout_customizer( $wp_customize );
}