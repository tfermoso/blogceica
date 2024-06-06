<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';

    protected $fillable = [
        'name', 
        'email', 
        'password', 
        'imagen'
    ];

    protected $hidden = [
        'password',
    ];
    public $timestamps = false;

}
