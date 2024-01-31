<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\EventosController;
use App\Http\Controllers\QuienesSomosController;
use App\Http\Controllers\EntregaDeAyudasController;
use App\Http\Controllers\IntegrantesController;
use App\Http\Controllers\SlicesController;
use App\Http\Controllers\TestimonioController;
use App\Http\Controllers\FrontendController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/* Route::get('/', function () {
    return view('welcome');
}); */

/*  rutas de frontend */
Auth::routes();
Route::get('/',[FrontendController::class,'index'])->name('home');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/* rutas de Usuarios */
Route::get('/usuarios/index', [App\Http\Controllers\UsuariosController::class, 'index'])->name('usuarios.index');
Route::get('/usuarios/crear_admin', [App\Http\Controllers\UsuariosController::class, 'create'])->name('usuarios.crear_admin');
Route::post('/usuarios', [App\Http\Controllers\UsuariosController::class, 'store'])->name('usuarios.store');
Route::get('/usuarios/{usuario}/edit', [App\Http\Controllers\UsuariosController::class, 'edit'])->name('usuarios.editar');
Route::put('/usuarios/{usuario}', [App\Http\Controllers\UsuariosController::class, 'update'])->name('usuarios.update');
Route::delete('/usuarios/{usuario}',[App\Http\Controllers\UsuariosController::class, 'destroy'])->name('usuarios.destroy');

/* rutas de eventos */
Route::get('eventos/index',[App\Http\Controllers\EventosController::class,'index'])->name('eventos.index');
Route::get('eventos/crear',[App\Http\Controllers\EventosController::class,'create'])->name('eventos.crear');
Route::post('eventos',[App\Http\Controllers\EventosController::class,'store'])->name('eventos.store');
Route::get('/eventos/{evento}/editar',[App\Http\Controllers\EventosController::class,'edit'])->name('eventos.editar');
Route::put('/eventos/{evento}',[App\Http\Controllers\EventosController::class,'update'])->name('eventos.update');
Route::delete('/eventos/{evento}',[App\Http\Controllers\EventosController::class,'destroy'])->name('eventos.destroy');

/* ruta resource de quienes somos */
Route::get('quienes_somos/index',[App\Http\Controllers\QuienesSomosController::class,'index'])->name('quienes_somos.index');
Route::get('quienes_somos/crear',[App\Http\Controllers\QuienesSomosController::class,'create'])->name('quienes_somos.crear');
Route::post('quienes_somos',[App\Http\Controllers\QuienesSomosController::class,'store'])->name('quienes_somos.store');
Route::get('/quienes_somos/{quienesSomos}/editar',[App\Http\Controllers\QuienesSomosController::class,'edit'])->name('quienes_somos.editar');
Route::put('/quienes_somos/{quienesSomos}',[App\Http\Controllers\QuienesSomosController::class,'update'])->name('quienes_somos.update');
Route::delete('/quienes_somos/{quienesSomos}',[App\Http\Controllers\QuienesSomosController::class,'destroy'])->name('quienes_somos.destroy');

/* rutas entrega de ayudas */
Route::get('entrega_de_ayudas/index',[App\Http\Controllers\EntregaDeAyudasController::class,'index'])->name('entrega_de_ayudas.index');
Route::get('entrega_de_ayudas',[App\Http\Controllers\EntregaDeAyudasController::class,'create'])->name('entrega_de_ayudas.crear');
Route::post('entrega_de_ayudas',[App\Http\Controllers\EntregaDeAyudasController::class,'store'])->name('entrega_de_ayudas.store');
Route::get('entrega_de_ayudas/{entregaDeAyudas}/editar',[App\Http\Controllers\EntregaDeAyudasController::class,'edit'])->name('entrega_de_ayudas.editar');
Route::put('entrega_de_ayudas/{entregaDeAyudas}',[App\Http\Controllers\EntregaDeAyudasController::class,'update'])->name('entrega_de_ayudas.update');
Route::delete('entrega_de_ayudas/{entregaDeAyudas}',[App\Http\Controllers\EntregaDeAyudasController::class,'destroy'])->name('entrega_de_ayudas.destroy');

/* rutas Integrantes */
Route::get('integrantes/index',[App\Http\Controllers\IntegrantesController::class,'index'])->name('integrantes.index');
Route::get('integrantes/crear',[IntegrantesController::class,'create'])->name('integrantes.crear');
Route::post('integrantes',[IntegrantesController::class,'store'])->name('integrantes.store');
Route::get('integrantes/{integrantes}/editar',[IntegrantesController::class,'edit'])->name('integrantes.editar');
Route::put('integrantes/{integrantes}',[IntegrantesController::class,'update'])->name('integrantes.update');
Route::delete('integrantes/{integrantes}',[IntegrantesController::class,'destroy'])->name('integrantes.destroy');

/* rutas testimonio */
Route::get('testimonio/index',[TestimonioController::class,'index'])->name('testimonio.index');
Route::get('testimonio/crear',[TestimonioController::class,'create'])->name('testimonio.crear');
Route::post('testimonio',[TestimonioController::class,'store'])->name('testimonio.store');
Route::get('testimonio/{testimonio}/editar',[TestimonioController::class,'edit'])->name('testimonio.editar');
Route::put('testimonio/{testimonio}',[TestimonioController::class,'update'])->name('testimonio.update');
Route::delete('testimonio/{testimonio}',[TestimonioController::class,'destroy'])->name('testimonio.destroy');

/* rutas slice */
Route::get('slice/index',[SlicesController::class,'index'])->name('slice.index');
Route::get('slice/crear',[SlicesController::class,'create'])->name('slice.crear');
Route::post('slice',[SlicesController::class,'store'])->name('slice.store');
Route::get('slice/{slice}/editar',[SlicesController::class,'edit'])->name('slice.editar');
Route::put('slice/{slice}',[SlicesController::class,'update'])->name('slice.update');
Route::delete('slice/{slice}',[SlicesController::class,'destroy'])->name('slice.destroy');
