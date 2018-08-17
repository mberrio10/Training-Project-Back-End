<?php

/**
 * To create new Post Types, you have to instanciate the PostTypesManager
*/
$typeManager = new \WPAS\Types\PostTypesManager([ 'namespace' => 'Rigo\\Types\\' ]);

/**
 * Then, start adding your types one by one.
*/
<<<<<<< HEAD
$typeManager->newType([
    'type' => 'sample', 
    'class' => 'Sample',
    'options' => [
        'supports' =>['title','editor','thumbnail'],
        'taxonomies' => ['post_tag']
        ]
    ])->register();

=======
    
>>>>>>> 7c4bc7d0ee00371c3c06e85eb76b55ac41a0353a
$typeManager->newType([
    'type' => 'blog', 
    'class' => 'Blog',
    'options' => [
        'supports' =>['title','editor','thumbnail'],
        'taxonomies' => ['post_tag','category']
    ]
])->register();
    
$typeManager->newType([
    'type' => 'workout', 
    'class' => 'Workout',
    'options' => [
        'supports' =>['title','editor','thumbnail'],
<<<<<<< HEAD
        'taxonomies' => ['post_tag']
=======
        'taxonomies' => ['post_tag','category']
>>>>>>> 7c4bc7d0ee00371c3c06e85eb76b55ac41a0353a
    ]
])->register();
    
$typeManager->newType([
    'type' => 'member', 
    'class' => 'Member',
    'options' => [
        'supports' =>['title','editor'],
        //'taxonomies' => ['post_tag','category']
    ]
])->register();
