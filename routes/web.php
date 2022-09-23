<?php

use App\Http\Controllers\Controller;
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

Route::view('/', '/welcome', ['action' => 'welcome']);
Route::view('/about', '/about', ['action' => 'about']);
Route::view('/contact', '/contact', ['action' => 'contact']);
Route::view('/dw', '/dw');
Route::view('/loading', '/loading');
Route::view('/jump', '/jump');
Route::view('/center', '/center');
Route::view('/query', '/query');
Route::view('/chat', '/chat', ['action' => 'chat']);
Route::view('/faq', '/faq', ['action' => 'faq']);

Route::get('/new', [Controller::class, 'new']);
Route::get('/help', [Controller::class, 'help']);
Route::get('/service', [Controller::class, 'service']);
Route::post('/scanner', [Controller::class, 'scanner']);
Route::post('/do_query', [Controller::class, 'do_query']);
