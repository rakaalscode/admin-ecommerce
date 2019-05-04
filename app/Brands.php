<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brands extends Model
{
    protected $table = 't_brand';
    protected $primaryKey = 'id_brand';
    protected $fillable = ['nama_brand','id_brands','description','created_at','image','id_merchant','updated_at','status'];
}
