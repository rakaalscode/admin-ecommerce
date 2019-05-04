<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 't_order';
    protected $primaryKey = 'id_order';
    protected $fillable = ['total_product','total_barang','alamat_pengirim','alamat_penerima','total_harga','id_voucher','total_bayar','payment_method','bank','payment_status','approved_date','status','created_at','updated_at'];

}

