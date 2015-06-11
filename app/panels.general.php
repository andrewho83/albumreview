<?php namespace AlbumReview;

$panel->add([
    'type'   => 'panel',
    'as'     => 'mainPanel',
    'title'  => 'My Albums',
    'slug'   => 'albumreview-index',
    'icon'   => 'dashicons-media-audio',
    'uses'   => __NAMESPACE__ . '\Controllers\AlbumController@allAlbums'
]);

$panel->add([
    'type'   => 'panel',
    'as'     => 'mainPanel',
    'title'  => 'Create Album',
    'slug'   => 'albumreview-create',
    'icon'   => 'dashicons-media-audio',
    'uses'   => __NAMESPACE__ . '\Controllers\AlbumController@createAlbum'
]);

$panel->add([
    'type'   => 'sub-panel',
    'parent' => 'mainPanel',
    'as'     => 'configure',
    'title'  => 'Configure',
    'slug'   => 'albumreview-configure',
    'uses'   => __NAMESPACE__ . '\Controllers\AdminController@configure'
]);