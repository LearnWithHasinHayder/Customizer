<?php
Kirki::add_config( 'customizer', array(
	'capability'    => 'edit_theme_options',
	'option_type'   => 'theme_mod',
) );

Kirki::add_panel( 'customizer_panel_id', array(
	'priority'    => 10,
	'title'       => esc_attr__( 'My Panel', 'customizer' ),
	'description' => esc_attr__( 'My panel description', 'customizer' ),
) );

Kirki::add_section( 'customizer_section_one', array(
	'title'          => esc_attr__( 'My Section', 'customizer' ),
	'description'    => esc_attr__( 'My section description.', 'customizer' ),
	'priority'       => 160,
	'panel'=>'customizer_panel_id'
) );

Kirki::add_field( 'customizer_section_one', array(
	'type'     => 'text',
	'settings' => 'my_setting',
	'label'    => __( 'Text Control', 'customizer' ),
	'section'  => 'customizer_section_one',
	'default'  => esc_attr__( 'This is a defualt value', 'customizer' ),
	'priority' => 10,
) );

Kirki::add_field( 'customizer', array(
	'type'        => 'repeater',
	'label'       => esc_attr__( 'Repeater Control', 'customizer' ),
	'section'     => 'customizer_section_one',
	'priority'    => 10,
	'row_label' => array(
		'type' => 'text',
		'value' => esc_attr__('your custom value', 'customizer' ),
	),
	'button_label' => esc_attr__('"Add new" button label (optional) ', 'customizer' ),
	'settings'     => 'my_setting3',
	'default'      => array(
		array(
			'link_text' => esc_attr__( 'Kirki Site', 'customizer' ),
			'link_url'  => 'https://aristath.github.io/kirki/',
		),
		array(
			'link_text' => esc_attr__( 'Kirki Repository', 'customizer' ),
			'link_url'  => 'https://github.com/aristath/kirki',
		),
	),
	'fields' => array(
		'link_text' => array(
			'type'        => 'text',
			'label'       => esc_attr__( 'Link Text', 'customizer' ),
			'description' => esc_attr__( 'This will be the label for your link', 'customizer' ),
			'default'     => '',
		),
		'link_url' => array(
			'type'        => 'text',
			'label'       => esc_attr__( 'Link URL', 'customizer' ),
			'description' => esc_attr__( 'This will be the link URL', 'customizer' ),
			'default'     => '',
		),
	)
) );

Kirki::add_field( 'customizer', array(
	'type'        => 'typography',
	'settings'    => 'my_setting2',
	'label'       => esc_attr__( 'Control Label', 'customizer' ),
	'section'     => 'customizer_section_one',
	'default'     => array(
		'font-family'    => 'Roboto',
		'variant'        => 'regular',
		'font-size'      => '14px',
		'line-height'    => '1.5',
		'letter-spacing' => '0',
		'color'          => '#333333',
		'text-transform' => 'none',
		'text-align'     => 'left',
	),
	'priority'    => 10,
	'output'      => array(
		array(
			'element' => 'body',
		),
	),
) );

Kirki::add_field( 'customizer', array(
	'type'        => 'sortable',
	'settings'    => 'my_setting4',
	'label'       => __( 'This is the label', 'customizer' ),
	'section'     => 'customizer_section_one',
	'default'     => array(
		'option3',
		'option1',
		'option4'
	),
	'choices'     => array(
		'option1' => esc_attr__( 'Option 1', 'customizer' ),
		'option2' => esc_attr__( 'Option 2', 'customizer' ),
		'option3' => esc_attr__( 'Option 3', 'customizer' ),
		'option4' => esc_attr__( 'Option 4', 'customizer' ),
		'option5' => esc_attr__( 'Option 5', 'customizer' ),
		'option6' => esc_attr__( 'Option 6', 'customizer' ),
	),
	'priority'    => 10,
) );