<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\PetitionController;
use App\Http\Controllers\EquipmentController;
use App\Http\Controllers\AuthorizerController;
use App\Http\Controllers\EnterpriseController;
use App\Http\Controllers\CollaboratorController;
use App\Http\Controllers\TicketController;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';

//Rutas para los equipos
Route::resource('equipment', EquipmentController::class); // Esta ruta sustituye varias lineas haciendo un CRUD, para mayor informacion revisar la documentacion

//Rutas para los colaboradores
Route::resource('collaborator', CollaboratorController::class); // Esta ruta sustituye varias lineas haciendo un CRUD, para mayor informacion revisar la documentacion

//Rutas para las peticiones
Route::resource('petition', PetitionController::class);

Route::get('petition/pendiente', [PetitionController::class, 'pendiente']); //Muestra las peticiones pendientes
Route::get('petition/en-proceso', [PetitionController::class, 'en-proceso']); //Muestra solo las peticiones en proceso
Route::get('petition/atendida', [PetitionController::class, 'atendida']); //Muestra solo las peticiones atendidas
Route::get('petition/validada', [PetitionController::class, 'validada']); //Muestra solo las peticiones validadas

Route::get('petition', [PetitionController::class,'all']); // Esta ruta muestr tdas las peticiones del usuario despues de hacer una solicitud

Route::get('petition/{petition}', [PetitionController::class,'showPetition']);
Route::resource('collaborator/petition', PetitionController::class); // Esta ruta sustituye varias lineas haciendo un CRUD, para mayor informacion revisar la documentacion



//Rutas para  usuarios
Route::resource('user', UserController::class);

//Rutas para ver los autorizadores
//Route::get('authorizer/index',[AuthorizerController::class,'show']); //Mostrar todos los autorizadores registrados (pentiende por usar 11-11)

//Rutas para ver los proyectos
Route::get('project/index',[ProjectController::class,'show']); //Mostrar todos los proyectos activos

//Rutas para las empresas
Route::resource('enterprise', EnterpriseController::class); // Esta ruta sustituye varias lineas haciendo un CRUD, para mayor informacion revisar la documentacion
