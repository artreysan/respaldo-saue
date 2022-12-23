<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\AuthorizerController;
use App\Http\Controllers\CollaboratorController;
use App\Http\Controllers\EnterpriseController;
use App\Http\Controllers\EquipmentController;
use App\Http\Controllers\PetitionController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\RequestController;
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
Route::get('/authorizers/home',[AuthorizerController::class,'show']); //Mostrar todos los autorizadores registrados

//Rutas para ver los autorizadores
Route::get('/projects/home',[ProjectController::class,'show']); //Mostrar todos los proyectos activos

//Rutas para las empresas
Route::get('/enterprises/home',     [EnterpriseController::class,'index']);    //Mostrar todos las empresas
Route::get('/enterprises/register', [EnterpriseController::class,'register']); // Mostrar formularios de empresas
Route::post('/enterprises/register',[EnterpriseController::class,'create']);   // Almacenar formuario de empresas

//Rutas para las solicitudes
Route::get('/petition/home',     [PetitionController::class,'index']);    // Mostrar todos las solicitudes
Route::get('/petition/register', [PetitionController::class,'register']); // Mostrar formularios de solicitudes
Route::post('/petition/register',[PetitionController::class,'create']);   // Almacenar formuario de solicitudes

