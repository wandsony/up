<?php

namespace App;

use Illuminate\Database\Eloquent;

class Perfil extends Eloquent
{
    protected $table = 'perfil';
    protected $fillable = array('nome_perfil');
}
