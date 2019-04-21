<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $fillable = ['mainid', 'subid','name', 'slug','feature_image','status'];
}
