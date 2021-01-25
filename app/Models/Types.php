<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Types extends Model
{
    protected $table = 'types';
    public $timestamps = false;
    protected $dateFormat = 'U';

    const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'last_update';


    protected $fillable =[
        'name',
        
    ];

    function products() {
        return $this->hasMany('App\Models\Products', 'type_id', 'id');
    }

}
