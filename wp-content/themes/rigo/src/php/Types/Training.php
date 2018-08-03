<?php
namespace Rigo\Types;
    
use WPAS\Types\BasePostType;

class Training extends BasePostType{
    
    function initialize(){
        
        add_action('acf/init', array($this, 'add_training_fields'));
    }

    function add_training_fields() {
	
    	acf_add_local_field_group(array(
    		'key' => 'training_group',
    		'title' => 'Training Group',
    		'fields' => array (
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
    		'location' => array (
		    array (
    			array (
    				'param' => 'post_type',
    				'operator' => '==',
    				'value' => 'training',
			),
		),
	),
    		
    	));
    	
    }
}   

?>