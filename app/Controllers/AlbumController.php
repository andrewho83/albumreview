<?php namespace AlbumReview\Controllers;

use AlbumReview\Helper;
use AlbumReview\Models\Album;
use Herbert\Framework\Models\Post;
use Herbert\Framework\Http;
use Herbert\Framework\Notifier; 

class AlbumController {

	public function index(Http $http) 
	{
		$albums = Album::all();

		return json_response($albums);
	}

	public function createAlbum()
	{
		return view('@AlbumReview/albums/create.twig', ['album' => $album]);
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

		return view('@AlbumReview/albums/single.twig', ['album' => $album]);
	}
}