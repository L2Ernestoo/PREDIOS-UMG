<?php

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

//login

Route:: view('/','auth.login');

//Administrador
//Usuario
Route:: view('/usuario','auth.register');

//Piloto
Route::get('crear-piloto',[\App\Http\Controllers\PilotosController::class, 'crearPiloto'])->name('crear.piloto');
Route::get('pilotos',[\App\Http\Controllers\PilotosController::class, 'index'])->name('ver.pilotos');
Route::post('store-piloto',[\App\Http\Controllers\PilotosController::class, 'storePiloto'])->name('store.piloto');

//Predios
Route::get('predios', [\App\Http\Controllers\PrediosController::class,'index'])->name('index.predios');

//Servicios
Route::get('ingreso', [\App\Http\Controllers\ServicioController::class,'ingreso'])->name('ingreso.servicios');
Route::get('despacho', [\App\Http\Controllers\ServicioController::class,'despacho'])->name('despacho.servicios');
Route::get('reporte-servicios', [\App\Http\Controllers\ServicioController::class,'reporte'])->name('reporte.servicios');

Route::post('ingresar', [\App\Http\Controllers\ServicioController::class,'storeIngreso'])->name('store.ingreso');
Route::post('despachar', [\App\Http\Controllers\ServicioController::class,'storeDespacho'])->name('store.despacho');

Route::get('/pdf-boleta/{id}', [\App\Http\Controllers\ServicioController::class,'pdf'])->name('pdf.boleta');

//Camiones
Route::get('camiones', [\App\Http\Controllers\CamionesController::class,'index'])->name('index.camiones');
Route::get('crear-camion', [\App\Http\Controllers\CamionesController::class,'create'])->name('crear.camiones');
Route::POST('guardar-camion', [\App\Http\Controllers\CamionesController::class,'store'])->name('store.camiones');


//Navieras
Route::get('navieras', [\App\Http\Controllers\NavierasController::class, 'index'])->name('index.navieras');




Route::get( '/listarUsuario', [\App\Http\Controllers\UserController::class, 'usuario' ] )->name('customer.usuario');
route::delete("/delete_User/{id}",[\App\Http\Controllers\UserController::class,'delete_user'])->name('delete_User');
// vista de inicio
Route::get( '/inicio', [\App\Http\Controllers\CustomerController::class, 'inicio' ] )->name('customer.inicio');
//clientes Customer
Route::get( '/listarCustomer', [\App\Http\Controllers\CustomerController::class, 'index' ] )->name('customer.index');
Route::get('/registrar',[\App\Http\Controllers\CustomerController::class, 'register'])->name('customer.register');
Route::get( '/editar-cliente', [\App\Http\Controllers\CustomerController::class, 'index' ] )->name('customer.index');
Route::get( '/modificar-cliente', [\App\Http\Controllers\CustomerController::class, 'ver' ])->name('customer.ver');
route::get("/guardar",[\App\Http\Controllers\CustomerController::class,'SaveCustomer'])->name("SaveCustomer");
route::get("/editar/{id}",[\App\Http\Controllers\CustomerController::class,'modificar'])->name('modificar');
route::get("/edita/{id}",[\App\Http\Controllers\CustomerController::class,'edit'])->name('edit');
route::delete("/delete/{id}",[\App\Http\Controllers\CustomerController::class,'delete'])->name('delete');

//proveedores Provider
Route::get('/Registrar-Pro',[\App\Http\Controllers\ProviderController::class, 'register'])->name('providers.register');
route::get("/Guardar-Pro",[\App\Http\Controllers\ProviderController::class,'SaveProvider'])->name("SaveProvider");
Route::get( '/listar', [\App\Http\Controllers\ProviderController::class, 'index' ] )->name('providers.index');

//Predio Parking
Route::get('/Parking',[\App\Http\Controllers\ParkingController::class, 'register'])->name('parking.register');
route::get("/Guardar-Parking",[\App\Http\Controllers\ParkingController::class,'save'])->name("save");
Route::get( '/listar-Predio', [\App\Http\Controllers\ParkingController::class, 'index' ] )->name('parking.index');

//servicio Service
Route::get( '/listar-Service', [\App\Http\Controllers\ServiceController::class, 'index' ] )->name('service.index');
route::get("/Guardar-Service",[\App\Http\Controllers\ServiceController::class,'SaveService'])->name("SaveService");
Route::get('/registrar-Service',[\App\Http\Controllers\ServiceController::class, 'register'])->name('service.register');
route::get("/editar-Service/{id_service}",[\App\Http\Controllers\ServiceController::class,'modificar'])->name('modificarService');
route::get("/edita-Service/{id_service}",[\App\Http\Controllers\ServiceController::class,'edit'])->name('editService');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
