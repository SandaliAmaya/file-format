<?php

use App\Http\Controllers\FileFormatController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::group(['prefix' => 'auth'], function () {
    Route::post('login', [UserController::class, 'login']);
    Route::post('register', [UserController::class, 'register']);
});

Route::group(['prefix' => 'file-format', 'middleware' => 'auth:api'], function () {
    Route::post('create-update', [FileFormatController::class, 'createOrUpdateFileFormat']);
    Route::delete('delete/{id}', [FileFormatController::class, 'deleteFileFormat']);
    Route::get('column-list', [FileFormatController::class, 'getAllColumns']);
    Route::get('list', [FileFormatController::class, 'getFileFormatList']);
    Route::get('{id}', [FileFormatController::class, 'getFileFormatById']);
});
