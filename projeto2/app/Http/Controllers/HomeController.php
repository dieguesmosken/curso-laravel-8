<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $usuario = "Matheus Mosken Diegues";
        $empresa = "HIPPOTEC";
        $perfil = "Admin";
        $dados = [
            'usuario'=>$usuario,
            'perfil'=>$perfil,
            'empresa'=>$empresa
        ];
        return view('home', $dados);
    }
}
