<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('/', 'home')->name('home');
Route::view('/cadastro', 'cadastro')->name('cadastro');
Route::view('/cardapio', 'cardapio')->name('cardapio');
Route::view('/contato', 'contato')->name('contato');
Route::view('/login', 'login')->name('login');
Route::view('/login-area-restrita', 'loginAreaRestrita')->name('login.area-restrita');
Route::view('/carrinho', 'carrinho')->name('carrinho');
