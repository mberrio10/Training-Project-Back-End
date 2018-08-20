<?php
namespace Rigo\Controller;

use Rigo\Types\Post;
use WP_REST_Response;

class PostController{
    
    public function getAllPosts(){
        $query = Post::all([ 'post_status' => 'publish' ]);
        
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
        		//Include Category
        		$query->post->category = get_the_terms( $query->post->ID, "category" );
        	}
        	/* Restore original Post Data */
        	wp_reset_postdata();
        }
        
        return $query->posts;
    }
    
    public function putNewPost( $request ) {
        $data = $request->get_json_params();
        $postarr = array(
            'ID'            =>  $data['ID'],
            'post_title'    =>  $data['post_title'],
            'post_status'   =>  'publish',
            'post_type'     =>  'post',
            'post_category' =>  $data['post_category'],
        );
        
        $result = wp_insert_post ( $postarr );
        
        if ( is_wp_error( $result ) ) {
            return $result->get_error_message();
        }
        
        return $result;
    }
    
}
?>