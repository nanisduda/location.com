<?php

use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'welcome']);
Route::view('/about', '/about', ['action' => 'about']);
Route::view('/contact', '/contact', ['action' => 'contact']);
Route::view('/dw', '/dw');
Route::view('/loading', '/loading');
Route::view('/jump', '/jump');
Route::view('/query', '/query');
Route::view('/faq', '/faq', ['action' => 'faq']);
Route::view('/add', '/add', ['action' => 'add']);

Route::get('/detail/{id}', [HomeController::class, 'detail']);
Route::get('/center', [HomeController::class, 'center']);
Route::get('/chat', [HomeController::class, 'chat']);
Route::post('/scanner', [HomeController::class, 'scanner']);
Route::post('/do_query', [HomeController::class, 'do_query']);


Route::get('/{action}', [HomeController::class, 'content']);
