<?php

use App\Http\Controllers\alumnoscontroller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\UsuariosController;

//LOGIN ROUTES
Route::get('/', function () { return view('crud.home' );})->middleware('auth');
Route::get('/register', [RegisterController::class, 'create'])
->name('register.index');
Route::post('/register', [RegisterController::class, 'store'])
->name('register.store');
Route::get('/login', [SessionsController::class, 'create'])
->name('login.index');
Route::post('/login', [SessionsController::class, 'store'])
->name('login.store');
Route::get('/logout', [SessionsController::class, 'destroy'])
->name('login.destroy');

//Button
Route::get('gato', function() { return view('crud.gato'); })->name('gato');
Route::get('registro', function() { return view('datos.registro'); })->name('registro');


//Registro Estados-Municipio
Route::name('registro')->get('registro', [UsuariosController::class, 'registro']);
Route::name('js_municipios')->get('js_municipios', [UsuariosController::class, 'js_municipios']);

//AJAX-CRUD ROUTES
Route::post('/store', [alumnoscontroller::class, 'store'])->name('store');
Route::get('/fetch-all', [alumnoscontroller::class, 'fetchAll'])->name('fetchAll');
Route::get('/edit', [alumnoscontroller::class, 'edit'])->name('edit');
Route::post('/update', [alumnoscontroller::class, 'update'])->name('update');
Route::post('/delete', [alumnoscontroller::class, 'delete'])->name('delete');



//--------------------------------------------Formulario 01: Campos adicionales -------------------
Route::name('form01')->get('form01',[UsuariosController::class, 'form01']);
Route::name('js_estudio')->get('js_estudio',[UsuariosController::class, 'js_estudio']);
Route::name('js_trabajo')->get('js_trabajo',[UsuariosController::class, 'js_trabajo']);
