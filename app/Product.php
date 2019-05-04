<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use Sofa\Eloquence\Eloquence;

class Product extends Model
{   
    use Eloquence;
    use SoftDeletes;

    // protected $searchableColumns = ['title'];
    protected $primaryKey = 'id';
    protected $fillable = ['title', 'category', 'tags', 'description', 'id_brand','sizes', 'price', 'sla', 'sku', 'previous_price', 'stock','length','width','height','dimension' , 'weight',  't_and_c', 'color','url', 'url2', 'url3', 'feature_image', 'policy', 'featured', 'views', 'created_at', 'updated_at', 'status','main_category','file','is_delete','deleted_at'];
    
    public static $withoutAppends = false;

    public function getMerchant()
    {
        return $this->hasOne('App\Merchant', 'id', 'vendorid');
    }

    public function getProductPromo()
    {
        return $this->hasOne('App\Promotion', 'id_product', 'id');
    }

}
