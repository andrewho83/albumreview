<?php namespace AlbumReview;

// $router->get([
//     'as'   	=> 'info',
//     'uri'  	=> '/ar/album/{id}',
//     'uses' 	=> __NAMESPACE__ . '\Controllers\AlbumController@showAlbum'
// ]);

$router->get([
    'as'   	=> 'preview',
    'uri'  	=> '/ar/album/{id}',
    'uses' 	=> __NAMESPACE__ . '\Controllers\AlbumController@preview'
]);

$router->post([
	'as'   	=> 'uploadAlbum',
	'uri'	=> '/ar/albums/upload',
	'uses'	=> __NAMESPACE__ . '\Controllers\AlbumController@handleUpload'
]);

// $router->post([
//     'as'   => 'simpleRoute',
//     'uri'  => '/simple',
//     'uses' => function()
//     {
//         return 'Hello World';
//     }
// ]);

// Route Parameters

// You can set route parameters in your URI by defining as {param}. These parameters then be accessed by your Closure or Controller as $param

// $router->get([
//     'as'   => 'userProfile',
//     'uri'  => '/user/{id}',
//     'uses' => function($id)
//     {
//         return "User: {$id}";
//     }
// ]);

// Accessing framework components within a closure

// $router->get([
//     'as'   => 'simpleRoute',
//     'uri'  => '/simple',
//     'uses' => function(\Herbert\Framework\Http $http)
//     {
//         return "This route was accessed through http {$http->method()} method";
//     }
// ]);

// Routing To Controllers
// Herbert allows you to not only route to closures, but also to controller classes, visit the documentation on Controllers for more details.

// $router->get([
//     'as'   => 'userProfile',
//     'uri'  => '/user/{id}',
//     'uses' => __NAMESPACE__ . '\Controllers\UserController@profile'
// ]);