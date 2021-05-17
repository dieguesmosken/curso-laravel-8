<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdutosController;
/*


Route::get('/', function () {
    return view('home');
});
composer create-project --prefer-dist laravel/lumen nomedoprojeto
laravel new nomedoprojeto

composer create-project laravel/laravel nome-projeto --prefer-dist

criando server

php -S localhost:8000 -t public

Route::get('/', function (){
    return view('home');
});
*/


Route::get('/', [HomeController::class, 'index']);
Route::get('/Produtos', [ProdutosController::class, 'index']);
Route::post('/Produtos', [ProdutosController::class, 'index']);

Route::get('/Sobre', function (){
    return view('sobre');
});
Route::get('/Cadastro', function (){
    return view('cadastro');
});
Route::get('/ADM/admin', function (){
    return view('/admin/adm');
});
Route::get('/How-It-Works', function (){
    return view('howitworks');
});

Route::get('/produtos/{nomedoproduto}', function ($nomedoproduto){
    echo '<h1>Pagina do Produto: </h1>'.$nomedoproduto;
});
