<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MinistriesController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// START API v1
Route::prefix('/v1')->name('api.v1.')->group(function () {
    // START Ministries Routers
    Route::prefix('/ministries')->name('ministries.')->group(function () {
        Route::get('/all', [MinistriesController::class, 'index'])->name('all');
        Route::get('/{id}', [MinistriesController::class, 'show'])->name('show');
        Route::post('/store', [MinistriesController::class, 'store'])->name('store');
    });
    // END Ministries Routers
});
// END API v1
