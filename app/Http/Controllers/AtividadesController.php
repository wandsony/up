<?php

namespace App\Http\Controllers;

use App\Atividade;
use App\Materia;
use App\Usuario;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Request;

class AtividadesController extends Controller
{

    protected $atividade;
    protected $atividadeId;
    protected $materia;
    protected $atividades;
    protected $subatividades;
    protected $user;

    public function __construct()
    {
        $this->middleware('auth');
        $this->user = Auth::user();
    }

    public function index(Atividade $atividade, Materia $materia, $atividadeId){
        $this->atividadeId = $atividadeId;
        $this->atividade = $atividade->getAtividadeById($this->atividadeId);
        $this->materia = $materia->find($this->atividade->id_materia);
        $this->atividades = $this->materia->getAtividades($this->materia->idMateria);
        $this->subatividades = $this->atividade->subatividades($this->atividadeId);
        if(isset($this->subatividades)) {
            return view('atividade')->with([
                'subatividades' => $this->subatividades,
                'atividade' => $this->atividade,
                'materia' => $this->materia
            ]);
        }
        return view('materia')->withErrors([
                'Errors' => 'Atividade não cadastrada!',
                'materia' => $this->materia,
                'atividades' => $this->atividades]);
    }

    public function cadastrarAtividade(Usuario $user, Request $request){
        $userId = $this->user->id;
        dd($request);
    }
}
