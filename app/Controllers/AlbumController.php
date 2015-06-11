<?php namespace AlbumReview\Controllers;

use AlbumReview\Helper;
use AlbumReview\Models\Album;
use Herbert\Framework\Models\Post;
use Herbert\Framework\Http;
use Herbert\Framework\Notifier; 

class AlbumController {

	public function allAlbums(Http $http) 
	{
		$albums = Album::all();

		return view('@AlbumReview/albums/all.twig', [
			'albums' => $albums
		]);
	}

	public function handleUpload(Http $http)
	{
		if ( 
			isset( $_POST['my_image_upload_nonce'], $_POST['post_id'] ) 
			&& wp_verify_nonce( $_POST['my_image_upload_nonce'], 'my_image_upload' )
			&& current_user_can( 'edit_post', $_POST['post_id'] )
		) {
			// The nonce was valid and the user has the capabilities, it is safe to continue.

			// These files need to be included as dependencies when on the front end.
			require_once( ABSPATH . 'wp-admin/includes/image.php' );
			require_once( ABSPATH . 'wp-admin/includes/file.php' );
			require_once( ABSPATH . 'wp-admin/includes/media.php' );
			
			// Let WordPress handle the upload.
			// Remember, 'my_image_upload' is the name of our file input in our form above.
			$attachment_id = media_handle_upload( 'my_image_upload', $_POST['post_id'] );
			
			if ( is_wp_error( $attachment_id ) ) {
				// There was an error uploading the image.
			} else {
				// The image was uploaded successfully!
				var_dump($attachment_id);
				return json_response(true);
			}

		} else {

			// The security check failed, maybe show the user an error.
		}		
	}

	public function createAlbum()
	{
		return view('@AlbumReview/albums/create.twig', [
			'album' => $album,
			'nonce' => wp_nonce_field( 'my_image_upload', 'my_image_upload_nonce')
		]);
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