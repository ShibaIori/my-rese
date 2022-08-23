<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\ReserveController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware('auth')->group(function () {
    Route::get('/mypage', [ShopController::class, 'mypage']);
    Route::post('/favorite', [FavoriteController::class, 'create']);
    Route::post('/favorite/delete', [FavoriteController::class, 'delete']);
    Route::post('/reserve', [ReserveController::class, 'create']);
    Route::post('/reserve/delete', [ReserveController::class, 'delete']);
});

Route::get('/', [ShopController::class, 'index']);
Route::get('/detail/{shop}', [ShopController::class, 'detail']);

require __DIR__.'/auth.php';
