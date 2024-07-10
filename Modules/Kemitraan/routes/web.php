<?php

use Illuminate\Support\Facades\Route;
use Modules\Kemitraan\Http\Controllers\KemitraanController;

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

Route::group(['prefix' => 'mitra'], function () {
    Route::resource('/', KemitraanController::class)->names('kemitraan');
});
