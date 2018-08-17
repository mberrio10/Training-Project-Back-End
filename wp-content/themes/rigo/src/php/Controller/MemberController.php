<?php
namespace Rigo\Controller;

use Rigo\Types\Member;
use WP_REST_Response;

class MemberController{
    
    public function getHomeData(){
        return [
            'name' => 'Rigoberto'
        ];
    }
    
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
            //'post_title'   => $data["post_title"],
            //'post_content' => $data["post_content"],
            'post_status'  => 'publish',
            'post_type'    => 'member',
            'meta_input'   => array(
                'first_name' => $data["firstName"],
                'last_name' => $data["lastName"],
                'age' => $data["age"],
                'email' => $data["email"],
                'password' => $data["password"],
                'repassword' => $data["repassword"],
                'gender' => $data["gender"],
                'height' => $data["height"],
                'weight' => $data["weight"],
                'ocupation' => $data["ocupation"],
            )
        );
        
        $chair = wp_insert_post($post_arr);
        
        if($chair !== 0){
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