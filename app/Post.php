<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model{
    protected $table ='post';
    protected $fillable = array('postTitle','postBody','postAuthor');
}