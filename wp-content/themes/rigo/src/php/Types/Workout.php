<?php

namespace Rigo\Types;
    
use WPAS\Types\BasePostType;

class Workout extends BasePostType{
    
    function initialize(){
        add_action('acf/init', array($this, 'add_workout_fields'));
    }

    function add_workout_fields() {

        acf_add_local_field_group(array(
        	'key' => 'group_5b6a23a0300c6',
        	'title' => 'Workout Custom Fields',
        	'fields' => array(
        		array(
        			'key' => 'field_5b6a23a035bc5',
        			'label' => 'Muscle Type',
        			'name' => 'muscle_type',
        			'type' => 'radio',
        			'instructions' => '',
        			'required' => 0,
        			'conditional_logic' => 0,
        			'wrapper' => array(
        				'width' => '',
        				'class' => '',
        				'id' => '',
        			),
        			'choices' => array(
        				'Chest' => 'Chest',
        				'Shoulders' => 'Shoulders',
        				'Abs' => 'Abs',
        				'Forearm' => 'Forearm',
        				'Quads' => 'Quads',
        				'Biceps' => 'Biceps',
        				'Triceps' => 'Triceps',
        				'Calves' => 'Calves',
        				'Glutes' => 'Glutes',
        				'Hamstrings' => 'Hamstrings',
        			),
        			'allow_null' => 0,
        			'other_choice' => 0,
        			'default_value' => '',
        			'layout' => 'vertical',
        			'return_format' => 'value',
        			'save_other_choice' => 0,
        		),
        		array(
        			'key' => 'field_5b6a23a035ca8',
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
        			'key' => 'field_5b6a23a035da6',
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
        			'key' => 'field_5b6a23a035e57',
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
        		array(
        			'key' => 'field_5b7afbd84ec82',
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
        			'default_value' =>'https://img.youtube.com/vi/XXXXXXXXXX/0.jpg',
        			'width' => '',
        			'height' => '',
        		),
        		array(
        			'key' => 'field_5b7afbe44ec83',
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
        			'default_value' => 'https://www.youtube.com/embed/XXXXXXXXX',
        			'width' => '',
        			'height' => '',
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