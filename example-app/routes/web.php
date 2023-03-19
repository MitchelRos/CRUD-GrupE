<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorEjercicio1;


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

/* Route::get('/', function () {return 'Pagina principal';});
Route::get('/hola', function() {return 'Hola, que tal';}); */
Route::get('/', [ControladorEjercicio1::class, 'arrel']);

Route::get('/hola', [ControladorEjercicio1::class, 'hola']);