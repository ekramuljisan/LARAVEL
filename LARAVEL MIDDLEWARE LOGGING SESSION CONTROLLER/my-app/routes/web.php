<?php

use App\Http\Controllers\DemoController;
use App\Http\Controllers\ResourceController;
use App\Http\Controllers\SingleActionController;
use App\Http\Middleware\DemoMiddleware;
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

//laravel log hello
Route::get('/demo-action/{num1}/{num2}',[DemoController::class,'DemoAction']);

//laravel session
Route::get('/session-put/{email}',[DemoController::class,'SessionPut']);
Route::get('/session-pull',[DemoController::class,'SessionPull']);
Route::get('/session-get',[DemoController::class,'SessionGet']);
Route::get('/session-forget',[DemoController::class,'SessionForget']);
Route::get('/session-flush',[DemoController::class,'SessionFlush']);

//laravel middleware
Route::get('/hello',[DemoController::class,'Hello'])->middleware([DemoMiddleware::class]);
Route::get('/welcome',[DemoController::class,'WelcomePage']);

//Middleware route group
Route::middleware(['demo'])->group(function(){
    Route::get('/demo-action1',[DemoController::class,'DemoAction1']);
    Route::get('/demo-action2',[DemoController::class,'DemoAction2']);
    Route::get('/demo-action3',[DemoController::class,'DemoAction3']);
    Route::get('/demo-action4',[DemoController::class,'DemoAction4']);
});

//Manupulate request header
Route::get('/my-header',[DemoController::class,'myHeader'])
    ->middleware([DemoMiddleware::class])
    ->middleware('throttle:5,1');


//Single action controller
Route::get('/single',[SingleActionController::class]);

//Resource controller
Route::resource('photos',ResourceController::class);

