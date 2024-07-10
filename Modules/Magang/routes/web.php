<?php

use Illuminate\Support\Facades\Route;
use Modules\Magang\Http\Controllers\MagangController;

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

Route::group(['prefix' => 'magang'], function () {
    Route::resource('/', MagangController::class)->names('magang');
});
