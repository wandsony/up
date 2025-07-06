<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use App\Usuario;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;

class LoginController extends Controller
{

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(){
        return view('auth.login');
    }

    public function login(Request $request){
        $params = [
                    'login'     => $request->login,
                    'remember_token'    => $request->_token
                  ];

        $user = new Usuario();
        $user = $user->checkUser($params);

        if(isset($user)){
            if (Auth::loginUsingId($user->id))
                return Redirect::intended(route('home', $user->id))->with('user', $user);
        }
        return redirect('/')->withErrors('Usuário ou senha inválidos!');
    }

    public function register(Request $request){
        $params = [
                    'nome'              => $request->nome,
                    'login'             => $request->login,
                    'remember_token'    => $request->_token
                  ];
        $user = new Usuario();
        $createUser = $user->insertUser($params);
        if(!$createUser)
            return redirect('/')->withErrors('O usuário "' . $params['login'] . '" já existe!');
        if (Auth::loginUsingId($createUser->id))
            return Redirect::intended(route('home', $user->id))->with('user', $user);
    }

    public function logout(Request $request){
        Auth::logout();
        return redirect('/');
    }
}
