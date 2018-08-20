<?php

namespace Rigo\Types;
    
use WPAS\Types\BasePostType;

class Blog extends BasePostType{

    function initialize(){
        add_action('acf/init', array($this, 'add_member_fields'));
    }

    function add_member_fields() {
        acf_add_local_field_group(array(
        	'key' => 'group_5b6e20dbca6b5',
        	'title' => 'Blog Custom Fields',
        	'fields' => array(
        		array(
        			'key' => 'field_5b765db943184',
        			'label' => 'Image',
        			'name' => 'image',
        			'type' => 'oembed',
        			'instructions' => '',
        			'required' => 0,
        			'conditional_logic' => 0,
        			'wrapper' => array(
        				'width' => '',
        				'class' => '',
        				'id' => '',
        			),
        			'width' => '',
        			'height' => '',
        		),
        		array(
        			'key' => 'field_5b73a781501ee',
        			'label' => 'Video',
        			'name' => 'video',
        			'type' => 'oembed',
        			'instructions' => '',
        			'required' => 0,
        			'conditional_logic' => 0,
        			'wrapper' => array(
        				'width' => '',
        				'class' => '',
        				'id' => '',
        			),
        			'width' => '',
        			'height' => '',
        		),
        	),
        	'location' => array(
        		array(
        			array(
        				'param' => 'post_type',
        				'operator' => '==',
        				'value' => 'blog',
        			),
        		),
        	),
        	'menu_order' => 0,
        	'position' => 'normal',
        	'style' => 'default',
        	'label_placement' => 'top',
        	'instruction_placement' => 'label',
        	'hide_on_screen' => '',
        	'active' => 1,
        	'description' => '',
        ));
    }
    
}
?>