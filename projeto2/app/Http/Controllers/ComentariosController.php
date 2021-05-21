<?php
require_once '../Model/ComentariosModel.php';

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComentariosController extends Controller
{

public static function listarTodosID($id_tema){
       
    $comModel = new ComentariosModel();
    $resultado = $comModel->listarTodosID($id_tema);
    return $resultado;
} 
public static function inserirComentario($dataComentario){
    $comModel = new ComentariosModel();
    $resultado = $comModel->inserirComentario($dataComentario);
    return $resultado;
}
public static function excluirComentarioID($id_comentario){
  $comModel = new ComentariosModel();

  $resultado = $comModel->excluirComentarioID($id_comentario);
  return $resultado;
 
}
  
}

?>