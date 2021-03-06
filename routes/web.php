<?php

use App\Http\Controllers\EnderecoController;
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

//Home
Route::get('/', 'EnderecoController@index')
    ->name('home');

//Adicionar
Route::get('/adicionar', 'EnderecoController@adicionar')
    ->name('adicionar');

//action: BUSCAR
Route::get('/buscar', 'EnderecoController@buscar')
    ->name('buscar');

//action: Salvar na DB
Route::post('/salvar', 'EnderecoController@salvar')
    ->name('salvar');
