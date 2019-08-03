<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //table Name
    protected $table = 'posts';
    // primarykey 
    public $primarykey= 'id';
    // timestamps
    public $timestamps = true;
}
