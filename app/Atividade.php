<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Materia;

class Atividade extends Model
{

    protected $table = 'atividade';
    protected $primaryKey = 'id';
    protected $fillable = ['id_materia', 'nome', 'img'];

    public function getAtividadeById($id){
        $atividade = $this->find($id);
        return $atividade;
    }

    public function subatividades($atividadeId){
        $subatividades = DB::table($this->table)
            ->leftJoin('subatividade', 'subatividade.id_atividade', '=', 'atividade.id')
            ->where('atividade.id', $atividadeId)
            ->get();
        return $subatividades;
    }

    public function insertDesempenho($params){
        if(!isset($checkUser)){
            $user = DB::table('desempenho')->insert(
                [
                    'id_usuario' => $params['userId'],
                    'id_subatividade' => $params['subatividadeId'],
                    'erros' => 8]
            );
            return $this->checkUser($params);
        }
        return false;
    }
}
