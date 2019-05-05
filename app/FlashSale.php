<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FlashSale extends Model
{
    protected $table = 't_flash_sale';
    protected $primaryKey = 'id_flash_sale';
    protected $fillable = ['judul','deskripsi','banner','start_date','end_date'];
    // public $timestamps = false;
}
