<?php namespace AlbumReview;

$panel->add([
    'type'   => 'panel',
    'as'     => 'mainPanel',
    'title'  => 'Album Review',
    'slug'   => 'myplugin-index',
    'icon'   => 'dashicons-media-audio',
    'uses'   => __NAMESPACE__ . '\Controllers\AdminController@index'
]);

$panel->add([
    'type'   => 'sub-panel',
    'parent' => 'mainPanel',
    'as'     => 'configure',
    'title'  => 'Configure',
    'slug'   => 'myplugin-configure',
    'uses'   => __NAMESPACE__ . '\Controllers\AdminController@configure'
]);