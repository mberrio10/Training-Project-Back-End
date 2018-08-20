<?php
namespace Rigo\Controller;

use Rigo\Types\User;
use WP_REST_Response;

class UserController{
    
    // public function getAllUsers(){
    //     $query = User::all([ 'post_status' => 'publish' ]);
        
    //     if ( $query->have_posts() ) {
    //     	while ( $query->have_posts() ) {
    //     		$query->the_post();
        		
    //     		//Include the Meta Tags and Values
    //     		$query->post->meta_keys = get_post_meta($query->post->ID);
    //     		foreach($query->post->meta_keys as $key => $value){
    //     		    $query->post->meta_keys[$key] = maybe_unserialize($value[0]);
    //     		}
    //     		//Include the Featured Image
    //     		$query->post->thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $query->post->ID ), "large" );
    //     		$query->post->category = get_the_terms( $query->post->ID, "category" );
    //     	}
    //     	/* Restore original Post Data */
    //     	wp_reset_postdata();
    //     }
        
    //     return $query->posts;
    // }
    
    public function getAllUsers(){
        $current_user = wp_get_current_user();
        return $current_user;
    }
    
    public function putNewUser( $request ) {
        $data = $request->get_json_params();
        $userinfo = array(
            'username' => $data['username'],
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'user_email' => $data['email'],
            'user_login' => $data['login'],
            'user_pass' => $data['password']
            );
            
        $result = wp_insert_user ( $userinfo );
        
        if ( is_wp_error( $result ) ) {
            return new WP_REST_Response(	
            array(	
                "code"=>"error",	
                "message" => "something went wrong while inserting"	
            ), 500);
        } else {
            return new WP_REST_Response(	
            array(
                "code" => "success",	
                "message" => "successfully created"	
            ), 200);
        }
        
    }
    
}
?>