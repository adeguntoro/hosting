<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

use Illuminate\Http\Resources\Json\JsonResource;

class Post extends Model{
    //
    protected $table = 'posts';

    protected $fillable = [
        'author', 'judul', 'isi', 'slug', 'author_name', 'keyword',
    ];

    protected $hidden = [
        'keyword', 'author_name', 'author', 'image_feature', 'liked', 'total_dibaca', 'updated_at'
    ];

}
