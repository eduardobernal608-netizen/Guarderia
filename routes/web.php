<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AbonoController;
use App\Http\Controllers\AlergiaController;
use App\Http\Controllers\BajaNinioController;
use App\Http\Controllers\CentroController;
use App\Http\Controllers\FamiliarController;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\IngredienteController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\NinioController;
use App\Http\Controllers\ParentezcoController;
use App\Http\Controllers\PlatoController;
use App\Http\Controllers\RegistroComidaController;
use App\Http\Controllers\RegistroCuentaController;




Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

Route::resource("abonos",AbonoController::class);


Route::resource("alergias",AlergiaController::class);

Route::resource("bajas_ninios",BajaNinioController::class);


Route::resource("centros",CentroController::class);


Route::resource("familiares",FamiliarController::class);


Route::resource("ingredientes",IngredienteController::class);


Route::resource("menus",MenuController::class);


Route::resource("ninios",NinioController::class);


Route::resource("parentezcos",ParentezcoController::class);


Route::resource("personas",PersonaController::class);


Route::resource("platos",PlatoController::class);


Route::resource("registro_comidas",RegistroComidaController::class);


Route::resource("registro_cuentas",RegistroCuentaController::class);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
