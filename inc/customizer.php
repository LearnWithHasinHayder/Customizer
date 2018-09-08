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
}
add_action('customize_register','cust_customizer_settings');