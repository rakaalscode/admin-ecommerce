<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FlashSaleCategory extends Model
{
    protected $table = 't_flash_sale_category';
    protected $primaryKey = 'id_flash_category';
    protected $fillable = ['id_flash_sale','id_category'];
}
