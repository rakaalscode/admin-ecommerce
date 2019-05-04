<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use Sofa\Eloquence\Eloquence;

class Category extends Model
{
    use Eloquence;
    use SoftDeletes;

    protected $searchableColumns = ['name'];

    protected $table = 'categories';
    protected $fillable = ['mainid', 'subid','name', 'slug','feature_image','status'];
}
