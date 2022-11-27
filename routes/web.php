<?php

use App\Http\Controllers\controlpeliculas;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
//use App\Http\Controllers\Auth;
//class Auth extends Illuminate\Support\Facades\Auth {}
//use App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Auth;

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
Route::get('/', function () {
    return redirect('/peliculas');
});


Route::resource('peliculas', controlpeliculas::class);
Auth::routes();
Route::get('/usuarios/dashboard', [App\Http\Controllers\ControlDashboard::class,'create'])->middleware('auth')->middleware('can:CRUD Manager'); 
//Ruta de creacion usuarios
Route::get('/usuarios/create', [App\Http\Controllers\UserController::class,'create'])->middleware('auth')->middleware('can:CRUD Manager'); 
Route::post('/usuarios', [App\Http\Controllers\UserController::class,'store'])->name('usuarios.store')->middleware('auth')->middleware('can:CRUD Manager'); 
//ruta crear items
Route::get('/peliculas/create', [App\Http\Controllers\controlpeliculas::class,'create'])->middleware('auth')->middleware('can:CRUD Manager');   
//ruta editar items
Route::get('/peliculas/edit', [App\Http\Controllers\controlpeliculas::class])->middleware('auth')->middleware('can:CRUD Manager');




// Route::group(['middleware' => 'auth'], function(){
// Route::get('/', [controlpeliculas::class,'index']);
// });



