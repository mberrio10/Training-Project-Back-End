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
    'path' => '/posts', 
    'controller' => 'PostController:getAllPosts' 
]);

$api->put([ 
    'path' => '/posts', 
    'controller' => 'PostController:putNewPost' 
]);

$api->get([
    'path' => '/workouts', 
    'controller' => 'WorkoutController:getAllWorkouts',
    //'capability' => 'activate_plugins'
]);

$api->get([ 
    'path' => '/members', 
    'controller' => 'MemberController:getAllMembers' 
]); 

$api->get([ 
    'path' => '/members/(?P<id>[\d]+)', 
    'controller' => 'MemberController:getMember' 
]); 

$api->put([ 
    'path' => '/members', 
    'controller' => 'MemberController:putNewMember' 
]);

$api->get([ 
    'path' => '/blogs', 
    'controller' => 'BlogController:getAllBlogs' 
]);

$api->get([
    'path' => '/users', 
    'controller' => 'UserController:getAllUsers',
    //'capability' => 'activate_plugins'
]);

$api->put([ 
    'path' => '/users', 
    'controller' => 'UserController:putNewUser' 
]);
