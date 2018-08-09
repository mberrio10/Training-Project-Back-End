<?php

/**
 * To create new Post Types, you have to instanciate the PostTypesManager
*/
$typeManager = new \WPAS\Types\PostTypesManager([ 'namespace' => 'Rigo\\Types\\' ]);

/**
 * Then, start adding your types one by one.
*/
$typeManager->newType([
        'type' => 'training', 
        'class' => 'Training',
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

