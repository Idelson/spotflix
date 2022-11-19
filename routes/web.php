<?php

use App\Http\Controllers\CadastroUsuarioController;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FilmeController;
use App\Http\Controllers\MeuPerfilController;
use App\Http\Controllers\ListaController;
use App\Http\Controllers\ListaFilmeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', [PrincipalController::class, 'index'])->name('site.principal');

Route::get('/cadastrousuario', [CadastroUsuarioController::class, 'index'])->name('site.cadastro');
Route::post('/cadastrousuario', [CadastroUsuarioController::class, 'cadastrar'])->name('site.cadastro');

Route::get('/login/{erro?}', [LoginController::class, 'index'])->name('site.login');
Route::post('/login', [LoginController::class, 'autenticar'])->name('site.login');


Route::middleware('autenticacao')->prefix('/app')->group(function(){
    Route::get('/home', [HomeController::class, 'index'])->name('app.home');
    Route::get('/sair', [LoginController::class, 'sair'])->name('app.sair');
    Route::get('/meuperfil', [MeuPerfilController::class, 'index'])->name('app.meuperfil');
    

    Route::get('/lista-filme/create/{lista}', [ListaFilmeController::class, 'create'])->name('app.lista-filme.create');
    Route::post('/lista-filme/store/{lista}', [ListaFilmeController::class, 'store'])->name('app.lista-filme.store');

    
    Route::resource('filme', FilmeController::class);
    Route::resource('lista', ListaController::class);

});