<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'email', 'password',

         'telephone' ,
            'first_name' ,
            'last_name' ,
            'adress' ,
            'postal' ,
            'city' ,
            'country_id' ,
            'delivery_first_name' ,
            'delivery_last_name' ,
            'delivery_adress' ,
            'delivery_postal' ,
            'delivery_city' ,
            'delivery_country_id' ,
            'company_name' ,
            'company_legal_form' ,
            'company_vat' ,

    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
