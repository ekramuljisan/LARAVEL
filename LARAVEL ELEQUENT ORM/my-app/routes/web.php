<?php

use App\Http\Controllers\DemoController;
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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::post('/insert',[DemoController::class, 'DemoAction']);
Route::post('/update/{id}',[DemoController::class, 'DemoAction']);
Route::post('/update-or-create/{bName}',[DemoController::class, 'DemoAction']);
Route::delete('/delete/{id}',[DemoController::class, 'DemoAction']);
Route::get('increment/{id}',[DemoController::class, 'DemoAction']);
Route::get('/',[DemoController::class, 'DemoAction']);
