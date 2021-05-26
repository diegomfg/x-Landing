<?php

use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', [UserController::class, 'index'])->middleware(['auth']);
Route::get('/users/all', [UserController::class, 'all'])->middleware(['auth']);

/**
 * @TODO Add the authenticated routes (DONE)
 * @TODO Add the form to upload a section's image and title
 * @TODO Create the section controller
 * @TODO Research lazy load
 * @TODO Research animation on document load (Can it be done with Vue.js?)
 * @TODO Hide the register link (Doesn't have any use yet)
 * @TODO Try to blend Tailwind's style with custom css
 * @TODO Research Laravel components.
 */

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
