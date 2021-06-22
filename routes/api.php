<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\SectionsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::group(['middleware' => 'api', 'prefix' => 'auth'], function () {

    Route::post('login', [AuthController::class, 'login'])->name('login');
    Route::post('logout', [AuthController::class, 'logout'])->name('logout');
    // Route::post('refresh', 'AuthController@refresh');
    //Route::post('me', 'AuthController@me');
});

Route::group(['middleware' => 'api'], function () {
    Route::get('/test', [AuthController::class, 'test'])->name('test');
    //Route::get('/secciones', [SectionsController::class, 'index']);
    Route::resource('secciones', SectionsController::class);
});
