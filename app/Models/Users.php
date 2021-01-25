<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table = 'users';
    public $timestamps = false;
    protected $dateFormat = 'U';

    const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'last_update';

    protected $fillable =[
        'name',
        'email',
        'password',
        'gender',
    ];

    
    protected $hidden = [
        'password',
       
    ];


    function orders() {
        return $this->hasMany('App\Models\Orders','user_id','id');
    }

}
