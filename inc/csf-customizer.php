<?php

function customizer_csf_settings( $options ) {

    $options[] = array(
        'name'     => 'customizer_csf_section1',
        'title'    => __( 'CodeStar Demo', 'customizer' ),
        'settings' => array(
            array(
                'name'      => 'about_heading',
                'default'   => __( 'some text', 'customizer' ),
                'control'   => array(
                    'label' => __( 'About Heading', 'customizer' ),
                    'type'  => 'text'
                ),
                'transport' => 'postMessage'
            ),
            array(
                'name'    => 'about_description',
                'control' => array(
                    'label' => __( 'About Description', 'customizer' ),
                    'type'  => 'textarea'
                )
            ),
            array(
                'name'    => 'dummy_control1',
                'control' => array(
                    'label' => __( 'Dummy Control 1', 'customizer' ),
                    'type'  => 'upload'
                )
            ),
            array(
                'name'    => 'dummy_control2',
                'control' => array(
                    'label' => __( 'Dummy Control 2', 'customizer' ),
                    'type'  => 'color'
                )
            ),
            array(
                'name'    => 'dummy_control3',
                'control' => array(
                    'label' => __( 'Dummy Control 3', 'customizer' ),
                    'type'  => 'dropdown-pages'
                )
            ),

        )
    );

    $options[] = array(
        'name'     => 'customizer_csf_section2',
        'title'    => __( 'CodeStar Controls', 'customizer' ),
        'active_callback'=>function(){
            return false;
        },
        'settings' => array(
            array(
                'name'    => 'switcher',
                'control' => array(
                    'type'    => 'cs_field',
                    'options' => array(
                        'type'  => 'switcher',
                        'title' => __( 'Select Color', 'customizer' )
                    )
                )
            ),
            array(
                'name'    => 'dummy_text',
                'default' => __( 'some text', 'customizer' ),
                'control' => array(
                    'label'           => __( 'Dummy Text', 'customizer' ),
                    'type'            => 'text',
                    'active_callback' => function () {
                        return cs_get_customize_option( 'switcher' );
                    }
                ),
            ),
            array(
                'name'    => 'icon',
                'control' => array(
                    'type'    => 'cs_field',
                    'options' => array(
                        'type'  => 'icon',
                        'title' => __( 'Select Icon', 'customizer' )
                    )
                )
            ),
            array(
                'name'    => 's_post',
                'control' => array(
                    'type'    => 'cs_field',
                    'options' => array(
                        'type'           => 'select',
                        'title'          => __( 'Select Post', 'customizer' ),
                        'options'        => 'posts',
                        'query_args'     => array(
                            'post_type' => 'post',
                            'orderby'   => 'post_date',
                            'order'     => 'DESC',
                        ),
                        'default_option' => 'Select a post',
                    )
                )
            ),

        )
    );

    return $options;
}

add_filter( 'cs_customize_options', 'customizer_csf_settings' );

function customizer_csf_init() {
	CSFramework_Customize::instance( array() );
}

add_action( 'init', 'customizer_csf_init' );