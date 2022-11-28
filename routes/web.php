<?php

use App\Http\Controllers\CadastroUsuarioController;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FilmeController;
use App\Http\Controllers\MeuPerfilController;
use App\Http\Controllers\ListaController;
use App\Http\Controllers\ListaFilmeController;
use App\Http\Controllers\ListaUsuarioController;
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
    Route::get('/home', [HomeController::class, 'index'])->name('home.index');
    Route::get('/home/show', [HomeController::class, 'show'])->name('home.show');

    Route::get('/sair', [LoginController::class, 'sair'])->name('app.sair');
    Route::get('/meuperfil', [MeuPerfilController::class, 'index'])->name('app.meuperfil');
    

    Route::get('/lista-filme/create/{lista}', [ListaFilmeController::class, 'create'])->name('lista-filme.create');
    Route::post('/lista-filme/store/{lista}', [ListaFilmeController::class, 'store'])->name('lista-filme.store');
    Route::get('/lista-filme/show/{lista}', [ListaFilmeController::class, 'show'])->name('lista-filme.show');
    Route::get('/lista-filme/edit/{lista}', [ListaFilmeController::class, 'edit'])->name('lista-filme.edit');
    Route::delete('/lista-filme/destroy/{listaFilme}/{lista_id}', [ListaFilmeController::class, 'destroy'])->name('lista-filme.destroy');
    
    Route::get('/lista-usuario/store/{lista}', [ListaUsuarioController::class, 'store'])->name('lista-usuario.store');

    Route::resource('filme', FilmeController::class);
    //Route::resource('lista', ListaController::class);
    Route::get('lista', [ListaController::class, 'index'])->name('lista.index');
    Route::get('lista/create', [ListaController::class, 'create'])->name('lista.create');
    Route::post('lista/store', [ListaController::class, 'store'])->name('lista.store');
    Route::get('lista/show/{lista}', [ListaController::class, 'show'])->name('lista.show');
    Route::get('lista/edit/{lista}', [ListaController::class, 'edit'])->name('lista.edit');
    Route::put('lista/update/{lista}', [ListaController::class, 'update'])->name('lista.update');
    Route::get('lista/destroy/{lista}', [ListaController::class, 'destroy'])->name('lista.destroy');
    
});