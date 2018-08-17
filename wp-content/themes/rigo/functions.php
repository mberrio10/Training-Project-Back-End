<?php

/**
* Autoload for PHP Composer and definition of the ABSPATH
*/

//defining the absolute path for the wordpress instalation.
if ( !defined('ABSPATH') ) define('ABSPATH', dirname(__FILE__) . '/');

//including composer autoload
require ABSPATH."vendor/autoload.php";

//including the custom post types
require('setup_types.php');

//including the api endpoints
require('setup_api.php');

//including any monolitic tempaltes
require('setup_templates.php');

//add image support for all type of posts
add_theme_support( 'post-thumbnails' );

//allow REST API to see the users register email
// register_rest_field( 'user', 'user_email',
//     array(
//         'get_callback'    => function ( $user ) {
//             return $user['email'];
//         },
//         'update_callback' => null,
//         'schema'          => null,
//     )
// );

//add ADVANCE CUSTOM FIELD to WORDPRESS CORE POST TYPE POST
// acf_add_local_field_group(array(
//             	'key' => 'post_group',
//             	'title' => 'Post Group',
//             	'fields' => array(
//             		array(
//             			'key' => 'radio_button',
//             			'label' => 'Radio Button',
//             			'name' => 'radio_button',
//             			'type' => 'radio',
//             			'instructions' => '',
//             			'required' => 0,
//             			'conditional_logic' => 0,
//             			'wrapper' => array(
//             				'width' => '',
//             				'class' => '',
//             				'id' => '',
//             			),
//             			'choices' => array(
//             				'Yes' => 'Yes',
//             				'No' => 'No',
//             			),
//             			'allow_null' => 0,
//             			'other_choice' => 0,
//             			'default_value' => '',
//             			'layout' => 'vertical',
//             			'return_format' => 'value',
//             			'save_other_choice' => 0,
//             		),
//             	),
//             	'location' => array(
//             		array(
//             			array(
//             				'param' => 'post_type',
//             				'operator' => '==',
//             				'value' => 'post',
//             			),
//             		),
//             	),
//             	'menu_order' => 0,
//             	'position' => 'normal',
//             	'style' => 'default',
//             	'label_placement' => 'top',
//             	'instruction_placement' => 'label',
//             	'hide_on_screen' => '',
//             	'active' => 1,
//             	'description' => '',
//             ));
            
// add_action('acf/init', 'acf_add_local_field_group');