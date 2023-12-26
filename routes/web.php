<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\superadmin\CondominioController;

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

Route::get('/', [MainController::class, 'home'])->name('home');
Route::get('demo/{name}', [MainController::class, 'demo'])->name('demo');






Route::group(['middleware' => ['role:super-admin']], function () {

    Route::get('dashboard', [MainController::class, 'dashboard'])->name('dashboard');
    Route::resource('dashboard/condominios', CondominioController::class);
});


