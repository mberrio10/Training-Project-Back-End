<?php
namespace Rigo\Controller;

use Rigo\Types\User;
use WP_REST_Response;

class UserController{
    
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
            return $result->get_error_message();
        }
        
        return $result;
    }
    
}
?>