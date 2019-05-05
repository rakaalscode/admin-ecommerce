<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderResi extends Model
{
    protected $table = 't_order_resi';
    protected $primaryKey = 'id_order_resi';
    protected $fillable = ['id_vendor','no_resi','status_shipping','jasa_name','type_penalanan','alamat_pengirim','min_day','max_day','is_isurance','shipper_id','ongkir_estimat','status','ongkir_real','ongkir_different'];
}
