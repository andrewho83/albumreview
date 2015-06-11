<?php

/** @var  \Herbert\Framework\Application $container */
/** @var  \Herbert\Framework\Http $http */
/** @var  \Herbert\Framework\Router $router */
/** @var  \Herbert\Framework\Enqueue $enqueue */
/** @var  \Herbert\Framework\Panel $panel */
/** @var  \Herbert\Framework\Shortcode $shortcode */
/** @var  \Herbert\Framework\Widget $widget */

use Herbert\Framework\Notifier;
use Illuminate\Database\Capsule\Manager as Capsule;

Notifier::success('Finished installing.  Creating Album Tables');

Capsule::schema()->create('albums', function($table)
{
    $table->increments('id');
    $table->string('title');
});