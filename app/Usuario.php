<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\DB;

class Usuario extends Authenticatable{

    protected $table = 'usuario';
    protected $primaryKey = 'id';
    protected $fillable = ['nome', 'login', 'senha'];
    protected $hidden = ['senha', 'remember_token'];

    public function checkUser($params){
        $user = DB::table($this->table)
            ->where('login', $params['login'])
            ->first();
        return $user;
    }

    public function insertUser($params){
        $checkUser = $this->checkUser($params);

        if(!isset($checkUser)){
            $user = DB::table('usuario')->insert(
                ['nome' => $params['nome'], 'login' => $params['login'], 'id_perfil' => 8]
            );
            return $this->checkUser($params);
        }
        return false;
    }
}
