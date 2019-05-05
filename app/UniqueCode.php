<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UniqueCode extends Model
{   
    protected $table = 't_uniq_code';
    protected $primaryKey = 'id_uniq_code';
    protected $fillable = ['id_user', 'code_uniq'];
}
