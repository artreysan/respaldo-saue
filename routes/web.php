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
Route::get('/equipment/home',     [EquipmentController::class,'index']);    //Mostrar todos los equipos registrados
Route::get('/equipment/register', [EquipmentController::class,'register']); // Formularios de registros
Route::post('/equipment/register',[EquipmentController::class,'create']);   // Formularios de registros

//Rutas para ver los autorizadores
Route::get('/authorizers/home',[AuthorizerController::class,'show']); //Mostrar todos los autorizadores registrados

//Rutas para ver los autorizadores
Route::get('/projects/home',[ProjectController::class,'show']); //Mostrar todos los proyectos activos

//Rutas para ver las cuentas de acceso
Route::get('/accounts/home',[AccountController::class,'index']); //Mostrar todos las cuentas de acceso

//Rutas para las solicitudes
Route::get('/request/home',     [RequestController::class,'index']);    //Mostrar todos las solicitudes
Route::get('/request/register', [RequestController::class,'register']); // Mostrar formularios de solicitudes
Route::post('/request/register',[RequestController::class,'create']);   // Almacenar formuario de solicitudes

//Rutas para los colaboradores
Route::get('/collaborators/home',     [CollaboratorController::class,'index']);    //Mostrar todos los colaboradores
Route::get('/collaborators/register', [CollaboratorController::class,'register']);// Mostrar formularios de colaboradores
Route::post('/collaborators/register',[CollaboratorController::class,'create']);  // Almacenar formuario de colaboradores
Route::get('/collaborators/detail',   [CollaboratorController::class,'show']);    // Mostrar el detlle de los colaboradores

//Rutas para las empresas
Route::get('/enterprises/home',     [EnterpriseController::class,'index']);    //Mostrar todos las empresas
Route::get('/enterprises/register', [EnterpriseController::class,'register']); // Mostrar formularios de empresas
Route::post('/enterprises/register',[EnterpriseController::class,'create']);   // Almacenar formuario de empresas

//Rutas para las solicitudes
Route::get('/petition/home',     [PetitionController::class,'index']);    // Mostrar todos las solicitudes
Route::get('/petition/register', [PetitionController::class,'register']); // Mostrar formularios de solicitudes
Route::post('/petition/register',[PetitionController::class,'create']);   // Almacenar formuario de solicitudes

