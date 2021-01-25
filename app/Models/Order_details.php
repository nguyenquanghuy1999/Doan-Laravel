<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order_details extends Model
{
    protected $table = 'order_details';
    public $timestamps = false;
    protected $dateFormat = 'U';

    const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'last_update';

    protected $fillable =[
        'name',
        'price',
        'quantity',
        'total',
        'order_id',
        'product_id',
      
    ];

    
    function orders(){
        return $this->belongsTo('App\Models\Orders', 'order_id');
    }

    function products(){
        return $this->belongsTo('App\Models\Products', 'product_id');
    }
   
}
