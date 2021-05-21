<?php

namespace App\Http\Controllers;
use App\Models\Usuarios;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    

    public function index(){
        $users = Usuarios::all();

        $usuario = "Matheus Mosken Diegues";
        $empresa = "HIPPOTEC";
        $perfil = "Admin";
        $dados = [
            'usuario'=>$usuario,
            'perfil'=>$perfil,
            'empresa'=>$empresa
        ];
        //dd($dados);
        return view('testes', $dados);
    }
}
