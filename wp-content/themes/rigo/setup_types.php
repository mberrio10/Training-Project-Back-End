<?php

/**
 * To create new Post Types, you have to instanciate the PostTypesManager
*/
$typeManager = new \WPAS\Types\PostTypesManager([ 'namespace' => 'Rigo\\Types\\' ]);

/**
 * Then, start adding your types one by one.
*/
$typeManager->newType([
    'type' => 'sample', 
    'class' => 'Sample',
    'options' => [
        'supports' =>['title','editor','thumbnail'],
        'taxonomies' => ['post_tag']
        ]
    ])->register();

$typeManager->newType([
    'type' => 'blog', 
    'class' => 'Blog',
    'options' => [
        'supports' =>['title','editor','thumbnail'],
        'taxonomies' => ['post_tag']
    ]
])->register();
    
$typeManager->newType([
    'type' => 'workout', 
    'class' => 'Workout',
    'options' => [
        'supports' =>['title','editor','thumbnail'],
        'taxonomies' => ['post_tag']
    ]
])->register();
    
$typeManager->newType([
    'type' => 'member', 
    'class' => 'Member',
    'options' => [
        'supports' =>['title','editor','thumbnail'],
        'taxonomies' => ['post_tag']
    ]
])->register();
