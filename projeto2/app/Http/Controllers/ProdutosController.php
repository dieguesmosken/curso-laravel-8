<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function index(Request $request){
        
        
        /*Para usar com GET
        $produto = $request->query('produto');
        $preco = $request->query('preco');
        $categoria = $request->query('categoria');
        */
        $produto = $request->input('produto');
        $preco = $request->input('preco');
        $categoria = $request->input('categoria');

        /*$dados = [
            'produto'=>$produto,
            'preco'=>$preco,
            'categoria'=>$categoria
        ];*/
        $dados = [
            'produto'=>$produto,
            'preco'=>$preco,
            'categoria'=>$categoria
        ];

        return view('produtos',$dados);
    }
}
