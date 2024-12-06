<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;

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

//Route::get('/hello/{name}/{age}',[DemoController::class,'DemoAction']);
//Route::post('/hello',[DemoController::class,'DemoAction']);
//Route::post('/hello',[DemoController::class,'DemoAction']);
//Route::post('/hello/{name}/{age}', [DemoController::class, 'DemoAction']);
Route::post('/hello', [DemoController::class, 'DemoAction']);
Route::get('/action1', [DemoController::class, 'Action1']);
Route::get('/action2', [DemoController::class, 'Action2']);

//Ei 2 ta browser e run korte hobe proper result pawar jonno
Route::get('/file-binary', [DemoController::class, 'FileBinary']);
Route::get('/file-download', [DemoController::class, 'FileDownload']);

Route::get('/cookie-response', [DemoController::class, 'CookieGenerate']);
Route::get('/response-header', [DemoController::class, 'ResponseHeader']);
Route::get('/response-view', [DemoController::class, 'ResponseView']);
