<?php namespace AlbumReview\Controllers;

use AlbumReview\Helper;
use AlbumReview\Models\Album;
use Herbert\Framework\Models\Post;
use Herbert\Framework\Http;
use Herbert\Framework\Notifier; 

class AlbumController {

	public function createAlbum()
	{
		$title = '';

		Album::create(['title' => $title]);

		Notifier::success('Created an album with title: ' . $title);

		return 'Success';
	}

	public function showAlbum($id, Http $http)
	{
		$album = Album::find($id);

		if (!$album)
		{
			return response('Album not found', 404);
		}

		if ($http->has('json'))
		{
			return json_response($album);
		}

		return view('@MyPlugin/post/single.twig', ['album' => $album]);
	}
}