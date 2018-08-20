<?php
namespace Rigo\Controller;

use Rigo\Types\Member;
use WP_REST_Response;

class MemberController{
    
    public function getAllMembers(){
        $query = Member::all([ 'post_status' => 'publish' ]);
        
        if ( $query->have_posts() ) {
        	while ( $query->have_posts() ) {
        		$query->the_post();
        		
        		//Include the Meta Tags and Values
        		$query->post->meta_keys = get_post_meta($query->post->ID);
        		foreach($query->post->meta_keys as $key => $value){
        		    $query->post->meta_keys[$key] = maybe_unserialize($value[0]);
        		}
        		//Include the Featured Image
        		$query->post->thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $query->post->ID ), "large" );
        	}
        	/* Restore original Post Data */
        	wp_reset_postdata();
        }
        
        return $query->posts;
    }
    
    public function putNewMember( $request ){	
        $data = $request->get_json_params();	
        //print_r( $data) ;	
        //die;	
        $post_arr = array(	
            'post_title' => $data['first_name'] . ' ' . $data['last_name'],	
            'post_status' => 'publish',	
            'post_type' => 'member',	
            'meta_input' => array(
                'email' => $data['email'],
                'age' => $data['age'], 
                'height' => $data['height'], 
                'weight' => $data['weight'], 
                'occupation' => $data['occupation'],
                'clinical_record' => array(
                    'high_cholesterol' => $data['high_cholesterol'],
                    'obese' => $data['obese'],
                    'diabetes' => $data['diabetes'],
                    'hypertension' => $data['hypertension'],
                    'heart_attack' => $data['heart_attack']
                ),
                'other_cardiac_disease' => $data['other_cardiac_disease'],
                'family_history' => array(
                    'history_high_cholesterol' => $data['history_high_cholesterol'],
                    'history_obese' => $data['history_obese'],
                    'history_diabetes' => $data['history_diabetes'],
                    'history_hypertension' => $data['history_hypertension'],
                    'history_heart_attack' => $data['history_heart_attack']
                ),
                'history_other_cardiac_disease' => $data['history_other_cardiac_disease'],
                'physical_condition' => array(    
                    'fracture' => $data['fracture'],
                    'luxation' => $data['luxation'],
                    'sprain' => $data['sprain'],
                    'column_injury' => $data['column_injury'],
                    'low_back_pain' => $data['low_back_pain'],
                    'knee_injury' => $data['knee_injury'],
                    'repetitive_tear' => $data['repetitive_tear'],
                    'chronic_pain' => $data['chronic_pain']
                ),
                'physical_activity' => array(
                    'physical_active' => $data['physical_active']
                ),
                'example_activities' => $data['example_activities'],
                'times_week' => $data['times_week'],
                'purpose' => $data['purpose'],
                'goal_description' => $data['goal_description'] 
            )	
        );	
        	
        $result = wp_insert_post($post_arr);	
        	
        if($result !== 0){	
            return new WP_REST_Response(	
                array(	
                    "code" => "success",	
                    "message" => "successfully created"	
                ), 200);	
        }else{	
            return new WP_REST_Response(	
                array(	
                    "code"=>"error",	
                    "message" => "something went wrong while inserting"	
                ), 500);	
        }	
    }
    
}
?>