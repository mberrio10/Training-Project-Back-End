<?php

namespace Rigo\Types;
    
use WPAS\Types\BasePostType;

class Sample extends BasePostType{
    
    function initialize(){
        add_action('acf/init', array($this, 'add_Sample_fields'));
    }

    function add_Sample_fields() {
        acf_add_local_field_group(array(
        	'key' => 'sample_group',
        	'title' => 'Sample Group',
        	'fields' => array(
        		array(
        			'key' => 'additional_comments',
        			'label' => 'Additional Comments',
        			'name' => 'additional_comments',
        			'type' => 'textarea',
        			'instructions' => 'Please enter any additional comments below',
        			'required' => 0,
        			'conditional_logic' => 0,
        			'wrapper' => array(
        				'width' => '',
        				'class' => '',
        				'id' => '',
        			),
        			'default_value' => '',
        			'placeholder' => '',
        			'maxlength' => '',
        			'rows' => '',
        			'new_lines' => '',
        		),
        		array (
                    'key' => 'day',
                    'label' => 'Day',
                    'name' => 'day',
                    'type' => 'date_picker',
                ),
                array (
                    'key' => 'time',
                    'label' => 'Time',
                    'name' => 'time',
                    'type' => 'time_picker',
                ),
        	),
        	'location' => array(
        		array(
        			array(
        				'param' => 'post_type',
        				'operator' => '==',
        				'value' => 'sample',
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