<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    protected $table ='orders';
    public $timestamps =false;
    protected $dateFormat ='U';

    const CREATED_AT ='creation_date';
    const UPDATED_AT= 'last_update';


    protected $fillable =[
        'user_id',
        'order_date',
        'address',
        'total',
        'note',
        'customer_id'
    ];


    function users(){
        return $this->belongsTo('App\Models\Users','user_id','id');

    }

    function order_details(){
        return $this->hasMany('App\Models\Order_details');
    }

    function customers(){
        return $this->belongsTo('App\Models\Customers','customer_id','id');
    }

}
