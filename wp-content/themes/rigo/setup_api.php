<?php

/**
 * To create new API calls, you have to instanciate the API controller and start adding endpoints
*/
$api = new \WPAS\Controller\WPASAPIController([ 
    'version' => '1', 
    'application_name' => 'sample_api', 
    'namespace' => 'Rigo\\Controller\\', 
    'allow-origin' => '*',
    'allow-methods' => 'GET,POST,PUT' 
]);

/**
 * Then you can start adding each endpoint one by one
*/

$api->get([ 
    'path' => '/post', 
    'controller' => 'PostController:getAllPosts' 
]);

$api->put([ 
    'path' => '/post', 
    'controller' => 'PostController:putNewPost' 
]);

$api->get([
    'path' => '/workout', 
    'controller' => 'WorkoutController:getAllWorkouts',
    //'capability' => 'activate_plugins'
]);

$api->get([ 
    'path' => '/member', 
    'controller' => 'MemberController:getAllMembers' 
]); 

$api->put([ 
    'path' => '/member', 
    'controller' => 'MemberController:putNewMember' 
]); 

$api->get([ 
    'path' => '/blog', 
    'controller' => 'BlogController:getAllBlogs' 
]);

$api->get([
    'path' => '/user', 
    'controller' => 'UserController:getAllUsers',
    //'capability' => 'activate_plugins'
]);

$api->put([ 
    'path' => '/user', 
    'controller' => 'UserController:putNewUser' 
]);
