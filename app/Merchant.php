<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Merchant extends Model
{
    protected $table = 'vendor_profiles';
    
    protected $fillable = [
        'name', 'gender', 'email', 'shop_name', 'type', 'description', 'photo', 'phone', 'password', 'fax', 'address', 'id_propinsi', 
        'id_kota','nama_kota','nama_propinsi','nama_kecamatan','nama_kelurahan','address_google', 'id_kecamatan', 'id_kelurahan', 'zip', 
        'no_npwp','nama_npwp','alamat_npwp','is_pajak','foto_npwp','lat' ,'lng','current_balance', 'remember_token' ,'created_at', 'updated_at', 
        'status','no_npwp','nik','is_login','last_login','tc','shop_image','is_official_store'
    ];

}
