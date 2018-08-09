<?php
namespace Rigo\Types;
    
use WPAS\Types\BasePostType;

class Workout extends BasePostType{
    
    function initialize(){
        
        add_action('acf/init', array($this, 'add_workout_fields'));
    }

    function add_workout_fields() {
	
        acf_add_local_field_group(array(
    	'key' => 'group_5b68e32914d30',
    	'title' => 'Workout Group',
    	'fields' => array(
    		array(
    			'key' => 'field_5b68e32b8d28d',
    			'label' => 'Muscle Type',
    			'name' => 'muscle_type',
    			'type' => 'text',
    			'instructions' => '',
    			'required' => 0,
    			'conditional_logic' => 0,
    			'wrapper' => array(
    				'width' => '',
    				'class' => '',
    				'id' => '',
    			),
    			'default_value' => '',
    			'placeholder' => '',
    			'prepend' => '',
    			'append' => '',
    			'maxlength' => '',
    		),
    		array(
    			'key' => 'field_5b68e3b18d28e',
    			'label' => 'Exercise Type',
    			'name' => 'exercise_type',
    			'type' => 'text',
    			'instructions' => '',
    			'required' => 0,
    			'conditional_logic' => 0,
    			'wrapper' => array(
    				'width' => '',
    				'class' => '',
    				'id' => '',
    			),
    			'default_value' => '',
    			'placeholder' => '',
    			'prepend' => '',
    			'append' => '',
    			'maxlength' => '',
    		),
    		array(
    			'key' => 'field_5b68e3c28d28f',
    			'label' => 'Sets Amount',
    			'name' => 'sets_amount',
    			'type' => 'text',
    			'instructions' => '',
    			'required' => 0,
    			'conditional_logic' => 0,
    			'wrapper' => array(
    				'width' => '',
    				'class' => '',
    				'id' => '',
    			),
    			'default_value' => '',
    			'placeholder' => '',
    			'prepend' => '',
    			'append' => '',
    			'maxlength' => '',
    		),
    		array(
    			'key' => 'field_5b68e3d18d290',
    			'label' => 'Repetitions Amount',
    			'name' => 'repetitions_amount',
    			'type' => 'text',
    			'instructions' => '',
    			'required' => 0,
    			'conditional_logic' => 0,
    			'wrapper' => array(
    				'width' => '',
    				'class' => '',
    				'id' => '',
    			),
    			'default_value' => '',
    			'placeholder' => '',
    			'prepend' => '',
    			'append' => '',
    			'maxlength' => '',
    		),
    	),
    	'location' => array(
    		array(
    			array(
    				'param' => 'post_type',
    				'operator' => '==',
    				'value' => 'workout',
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