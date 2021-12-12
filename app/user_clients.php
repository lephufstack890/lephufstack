<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user_clients extends Model
{
    protected $fillable = [
        'fullname',
        'gender',
        'phone',
        'email',
        'address',
        'city',
        'username',
        'password',
        'is_admin'
    ];
}
