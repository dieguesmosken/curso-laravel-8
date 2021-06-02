<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    HomeController,
    ProdutosController,
    UsuariosController,
    PostController
};



Route::get('/', [HomeController::class, 'index']);
Route::get('/Produtos', [ProdutosController::class, 'index']);
Route::get('/Posts', [PostController::class, 'index']);
Route::post('/Produtos', [ProdutosController::class, 'index']);

Route::get('/Sobre', function (){
    return view('sobre');
});
Route::get('/Cadastro', function (){
    return view('cadastro');
});
Route::get('/How-It-Works', function (){
    return view('howitworks');
});
//---------------------------------
//admin routs
Route::get('/ADM/admin', function (){
    return view('/admin/adm');
});

//login routs
Route::get('/login/login', function (){
    return view('/login/login');
});
Route::get('/login/sair', function (){
    return view('/login/sair');
});
Route::post('login/validacao-user', function (){
    return view('/login/valida');
});
//----------------------------------------


Route::get('/produtos/{nomedoproduto}', function ($nomedoproduto){
    echo '<h1>Pagina do Produto: </h1>'.$nomedoproduto;
});


Route::get('/error/307', function (){
    return view('/errors/307');
});

/*


Route::get('/', function () {
    return view('home');
});
composer create-project --prefer-dist laravel/lumen nomedoprojeto
laravel new nomedoprojeto

composer create-project laravel/laravel nome-projeto --prefer-dist

criando server

php -S localhost:8000 -t public
php artisan serve

Route::get('/', function (){
    return view('home');
});


criar um novo medel e controler e migrate(nome Usuarios)
php artisan make:model Usuarios -mc
*/