<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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

/**
 * TODO Update the homepage.
 */
Route::get('/', function () {
    return view('welcome');
});

/**
 * @author Diego Matheus
 *  Date: 3/20/21
 */
Route::resource('users', UserController::class);
