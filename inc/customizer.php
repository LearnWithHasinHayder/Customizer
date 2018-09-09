<?php

function cust_customizer_settings($wp_customizer){
	$wp_customizer->add_section('cust_services',array(
		'title'=>__('Services','customizer'),
		'priority'=>'30'
	));

	$wp_customizer->add_setting('cust_services_heading',array(
		'default'=>"Mission Statement",
		'transport'=>'refresh', //postMessage
//		'type'=>'option' //theme_mod or option
	));

	$wp_customizer->add_control('cust_services_heading_ctrl',array(
		'label'=>__('Services Heading','customizer'),
		'section'=>'cust_services',
		'settings'=>'cust_services_heading',
		'type'=>'text'
	));

	$wp_customizer->add_setting('cust_services_subheading',array(
		'transport'=>'refresh', //postMessage
//		'type'=>'option' //theme_mod or option
	));

	$wp_customizer->add_control('cust_services_subheading_ctrl',array(
		'label'=>__('Services Description','customizer'),
		'section'=>'cust_services',
		'settings'=>'cust_services_subheading',
		'type'=>'textarea'
	));

	$wp_customizer->add_setting('cust_services_display_subheading',array(
		'default'=>1,
		'transport'=>'refresh', //postMessage
	));
	$wp_customizer->add_control('cust_services_display_subheading_ctrl',array(
		'label'=>__('Display Subheading','customizer'),
		'section'=>'cust_services',
		'settings'=>'cust_services_display_subheading',
		'type'=>'checkbox'
	));


	/**
	 * Other Controls
	 */
	$wp_customizer->add_section('cust_others',array(
		'title'=>__('Other Controls','customizer'),
		'priority'=>'40'
	));
	$wp_customizer->add_setting('cust_others_demo_radio',array(
		'default'=>'choice3',
		'transport'=>'refresh', //postMessage
	));
	$wp_customizer->add_control('cust_others_demo_radio_ctrl',array(
		'label'=>__('Radio Button','customizer'),
		'section'=>'cust_others',
		'settings'=>'cust_others_demo_radio',
		'type'=>'radio',
		'choices'=>array(
			'choice1'=>__('Choice One','customizer'),
			'choice2'=>__('Choice Two','customizer'),
			'choice3'=>__('Choice Three','customizer'),
			'choice4'=>__('Choice Four','customizer'),
		)
	));

	$wp_customizer->add_setting('cust_others_demo_select',array(
		'default'=>'choice3',
		'transport'=>'refresh', //postMessage
	));
	$wp_customizer->add_control('cust_others_demo_select_ctrl',array(
		'label'=>__('Dropdown','customizer'),
		'section'=>'cust_others',
		'settings'=>'cust_others_demo_select',
		'type'=>'select',
		'choices'=>array(
			'choice1'=>__('Choice One','customizer'),
			'choice2'=>__('Choice Two','customizer'),
			'choice3'=>__('Choice Three','customizer'),
			'choice4'=>__('Choice Four','customizer'),
		)
	));

	$wp_customizer->add_setting('cust_others_demo_pages',array(
		'default'=>'choice3',
		'transport'=>'refresh', //postMessage
	));
	$wp_customizer->add_control('cust_others_demo_pages_ctrl',array(
		'label'=>__('Available Pages','customizer'),
		'section'=>'cust_others',
		'settings'=>'cust_others_demo_pages',
		'type'=>'dropdown-pages',
		'allow_addition'=>true
	));

	$wp_customizer->add_setting('cust_others_html5_number',array(
		'default'=>'10',
		'transport'=>'refresh', //postMessage
	));
	$wp_customizer->add_control('cust_others_html5_number_ctrl',array(
		'label'=>__('Number Field','customizer'),
		'section'=>'cust_others',
		'settings'=>'cust_others_html5_number',
		'type'=>'number',
		'input_attrs'=>array(
			'min'=>10,
			'max'=>20,
			'step'=>2
		)
	));

	$wp_customizer->add_setting('cust_others_html5_range',array(
		'default'=>'10',
		'transport'=>'refresh', //postMessage
	));
	$wp_customizer->add_control('cust_others_html5_range_ctrl',array(
		'label'=>__('Range Field','customizer'),
		'section'=>'cust_others',
		'settings'=>'cust_others_html5_range',
		'type'=>'range',
		'input_attrs'=>array(
			'min'=>10,
			'max'=>20,
			'step'=>2
		)
	));

	$wp_customizer->add_setting('cust_others_html5_date',array(
		'transport'=>'refresh', //postMessage
	));
	$wp_customizer->add_control('cust_others_html5_date_ctrl',array(
		'label'=>__('Date Field','customizer'),
		'section'=>'cust_others',
		'settings'=>'cust_others_html5_date',
		'type'=>'date',
		'input_attrs'=>array(
			'min'=>10,
			'max'=>20,
			'step'=>2
		)
	));

	$wp_customizer->add_setting('cust_others_html5_week',array(
		'transport'=>'refresh', //postMessage
	));
	$wp_customizer->add_control('cust_others_html5_week_ctrl',array(
		'label'=>__('Week Field','customizer'),
		'section'=>'cust_others',
		'settings'=>'cust_others_html5_week',
		'type'=>'week',
		'input_attrs'=>array(
			'min'=>10,
			'max'=>20,
			'step'=>2
		)
	));


}
add_action('customize_register','cust_customizer_settings');