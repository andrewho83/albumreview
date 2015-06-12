<?php namespace AlbumReview;

/** @var \Herbert\Framework\Enqueue $enqueue */

$enqueue->front([
    'as'  => 'generalCSS',
    'src' => Helper::assetUrl('/css/styles.css')
]);

$enqueue->front([
    'as'  => 'bootstrapCSS',
    'src' => '//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css',
]);