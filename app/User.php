<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User
{
    protected $table = 'usuario';
    protected $primaryKey = 'id';
    protected $fillable = ['nome', 'login', 'senha'];
    protected $hidden = ['senha', 'remember_token'];
}
