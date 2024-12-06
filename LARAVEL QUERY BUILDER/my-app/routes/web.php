<?php

use App\Http\Controllers\DemoController;//alt+enter
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

//Route::get('/', [DemoController::class, 'DemoAction']);
//Route::post('/insert',[DemoController::class,'DemoAction']);
//Route::post('/update/{id}',[DemoController::class,'DemoAction']);
Route::post('/upsert/{bName}',[DemoController::class,'DemoAction']);
Route::delete('/delete/{id}',[DemoController::class,'DemoAction']);
Route::post('/increment-decrement/{id}',[DemoController::class,'DemoAction']);