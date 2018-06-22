<?php
function mt_social_customizer( $wp_customize ){
	// Settings
	$wp_customize->add_setting('mt_facebook', array('default'=>''));
	$wp_customize->add_setting('mt_googlepus', array('default'=>''));
	$wp_customize->add_setting('mt_instagram', array('default'=>''));
	$wp_customize->add_setting('mt_twitter', array('default'=>''));
	$wp_customize->add_setting('mt_youtube', array('default'=>''));

	// Sections
	$wp_customize->add_section('mt_social_section', array(
		'title' => 'Rede Sociais',
		'priority' => '1',
		'panel' => 'opcoes'
	));
	// Controllers
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'mt_facebook',
			array(
				'label' => 'Link do Facebook',
				'section' => 'mt_social_section',
				'settings' => 'mt_facebook',
				'type' => 'text'
			)
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'mt_googlepus',
			array(
				'label' => 'Link do Google Plus',
				'section' => 'mt_social_section',
				'settings' => 'mt_googlepus',
				'type' => 'text'
			)
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'mt_instagram',
			array(
				'label' => 'Link do Instagram',
				'section' => 'mt_social_section',
				'settings' => 'mt_instagram',
				'type' => 'text'
			)
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'mt_twitter',
			array(
				'label' => 'Link do Twitter',
				'section' => 'mt_social_section',
				'settings' => 'mt_twitter',
				'type' => 'text'
			)
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'mt_youtube',
			array(
				'label' => 'Link do Youtube',
				'section' => 'mt_social_section',
				'settings' => 'mt_youtube',
				'type' => 'text'
			)
		)
	);

}