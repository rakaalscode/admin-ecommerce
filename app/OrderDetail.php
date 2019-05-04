<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{   
    protected $table = 't_order_detail';
    protected $primaryKey = 'id_order_detail';
    protected $fillable = ['id_order', 'id_order_resi','id_user','id_product','jumlah','harga_satuan','total_harga','catatan'];
}
