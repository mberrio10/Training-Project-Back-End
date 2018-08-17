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
<<<<<<< HEAD

$api->get([ 
    'path' => '/sample', 
    'controller' => 'SampleController:getAllSamples' 
]); 

$api->put([ 
    'path' => '/sample', 
    'controller' => 'SampleController:putNewSample' 
]);
=======
>>>>>>> 7c4bc7d0ee00371c3c06e85eb76b55ac41a0353a

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

<<<<<<< HEAD
$api->get([ 
    'path' => '/blog', 
    'controller' => 'BlogController:getAllBlogs' 
]); 
=======
$api->put([ 
    'path' => '/users', 
    'controller' => 'UserController:putNewUser' 
]);
>>>>>>> 7c4bc7d0ee00371c3c06e85eb76b55ac41a0353a
