<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuariosController;

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

Route::view('vista1/', 'vista1')->name('vista1')->middleware('guest');
Route::view('vista2/', 'vista2')->name('vista2')->middleware('guest');

Route::name('registro')->get('registro',[UsuariosController::class,'registro']);
Route::name('js_municipios')->get('js_municipios',[UsuariosController::class,'registro']);
