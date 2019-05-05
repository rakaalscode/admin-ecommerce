<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FlashSaleProduk extends Model
{
    protected $table = 'flash_sale_product';
    protected $primaryKey = 'id_flash_product';
    protected $fillable = ['id_flash_sale','id_product','stok','available_stok','harga_baru','status'];
}
