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

Route::get('/new', [Controller::class, 'new']);
Route::get('/help', [Controller::class, 'help']);
Route::get('/service', [Controller::class, 'service']);
