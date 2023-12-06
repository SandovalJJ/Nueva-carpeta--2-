<?php

use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('login');
});

Route::get('/ruleta', function () {
    return view('ruleta');
});

Route::post('/',[userController::class, 'login2'])->name('iniciar');
Route::post('/logout',[UserController::class, 'logout'])->name('cerrar');

