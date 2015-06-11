<?php namespace AlbumReview\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Album extends Eloquent {
    protected $fillable = ['title'];
    public $timestamps = false;
}