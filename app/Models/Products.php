<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table = 'products';
    public $timestamps = false;
    protected $dateFormat = 'U';

    const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'last_update';


    protected $fillable =[
        'name',
        'image',
        'desc',
        'soluong',
        'price',
        'type_id',
    ];


    function types(){
        return $this->belongsTo('App\Models\Types','type_id','id');
    }

    function order_details(){
        return $this->hasMany('App\Models\Order_details');
    }



}
