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
    return view('welcome');
});

Route::get('/suma/{numero1}/{numero2}', function ($numero1, $numero2) {
    $suma = $numero1 + $numero2;
    return "<h1>Resultado: $suma</h1>";
})->where(['numero1' => '\d+', 'numero2' => '\d+']);

Route::get('/saludo/{nombre}', function ($nombre) {
    return "<h1>Hola $nombre</h1>";
})->where('nombre', '[A-Za-z]+');

Route::get('/saludo-user/{user}', function ($user) {
    return view('user', ['user' => $user]);
})->where('user', '[A-Za-z]+');

//saludo mediante controlador
Route::get('/saludo-username/{username}', [UserController::class, 'saludo'])->name('saludo')->where('username', '[A-Za-z]+');