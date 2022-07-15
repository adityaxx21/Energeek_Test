<?php

use App\Http\Controllers\Form_Controller;
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

Route::get('/', [Form_Controller::class, 'index']);
Route::post('/index_post', [Form_Controller::class, 'index_post']);

