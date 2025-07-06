<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Materia extends Model
{

    protected $table = 'materia';
    protected $primaryKey = 'id';
    protected $fillable = ['nome', 'img'];

    public function getMateriaById($id){
        $materia = $this->find($id);
        return $materia;
    }

    public function getAtividades($materiaId){
        $atividades = DB::table($this->table)
            ->leftJoin('atividade', 'atividade.id_materia', '=', 'materia.id')
            ->where('materia.id', $materiaId)
            ->get();
        return $atividades;
    }
}
