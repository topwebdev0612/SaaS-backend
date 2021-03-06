<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UploadController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
  
// Route::middleware('auth:api')->get('/dashboard-page', function (Request $request) {
//     return $request->user();
// });

// header('Access-Control-Allow-Methods: *');
// header('Access-Control-Allow-Headers: *');
// header('Access-Control-Allow-Origin: *');


Route::post('/signup', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/singleUp', [UploadController::class, 'singleUp']);    
// Route::get( '/download/{filename}', [UploadController::class, 'download']);
Route::post( '/download', [UploadController::class, 'download']);
Route::post('/registerReader', [AuthController::class, 'registerReader']);
Route::post('/loginReader', [AuthController::class, 'loginReader']);
Route::post('/getReaderData', [UploadController::class, 'getReaderData']);  //get reader data for table in front-end
Route::post('/setActiveAccount', [UploadController::class, 'setActiveAccount']); //set account to active or nonactive
Route::post('/getPdfData', [UploadController::class, 'getPdfData']); //get pdf data from database
Route::post('/changeInfo', [AuthController::class, 'changeInfo']); //change account info

