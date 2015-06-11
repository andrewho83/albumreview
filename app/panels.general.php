<?php namespace AlbumReview;

$panel->add([
    'type'   => 'panel',
    'as'     => 'mainPanel',
    'title'  => 'Create Album',
    'slug'   => 'myplugin-index',
    'icon'   => 'dashicons-media-audio',
    'uses'   => __NAMESPACE__ . '\Controllers\AlbumController@createAlbum'
]);

$panel->add([
    'type'   => 'sub-panel',
    'parent' => 'mainPanel',
    'as'     => 'configure',
    'title'  => 'Configure',
    'slug'   => 'myplugin-configure',
    'uses'   => __NAMESPACE__ . '\Controllers\AdminController@configure'
]);