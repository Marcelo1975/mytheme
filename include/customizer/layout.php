<?php
function mt_layout_customizer( $wp_customize ){
	// Settings
	$wp_customize->add_setting('mt_topmenu_show', array('default'=>'yes'));
	$wp_customize->add_setting('mt_search_show', array('default'=>'yes'));
	$wp_customize->add_setting('mt_privacy_url', array('default'=>''));

	// Sections
	$wp_customize->add_section('mt_layout_section', array(
		'title' => 'Opções de Layout',
		'priority' => 2,
		'panel' => 'opcoes'
	));

	// Controllers
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'mt_topmenu_show',
			array(
				'label' => 'Mostrar Menu Superior',
				'section' => 'mt_layout_section',
				'settings' => 'mt_topmenu_show',
				'type' => 'checkbox',
				'choices' => array(
					'yes' => 'Sim'
				)
			)
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'mt_search_show',
			array(
				'label' => 'Mostrar Busca',
				'section' => 'mt_layout_section',
				'settings' => 'mt_search_show',
				'type' => 'checkbox',
				'choices' => array(
					'yes' => 'Sim'
				)
			)
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'mt_privacy_url',
			array(
				'label' => 'Politica de Privacidade',
				'section' => 'mt_layout_section',
				'settings' => 'mt_privacy_url',
				'type' => 'dropdown-pages'
			)
		)
	);
}