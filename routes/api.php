<?php

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

Route::post('login', [\App\Http\Controllers\AuthController::class, 'authenticate']);

Route::group(['middleware' => ['jwt.verify']], function() {

    Route::post('get-user', [\App\Http\Controllers\UserController::class, 'get']);

    Route::post('/orders/list', [\App\Http\Controllers\OrderController::class, 'list']);
    Route::post('/orders/show/{id}', [\App\Http\Controllers\OrderController::class, 'show']);
    Route::post('/orders/update/{id}', [\App\Http\Controllers\OrderController::class, 'update']);
    Route::post('/log/list', [\App\Http\Controllers\LogController::class, 'list']);
});

Route::post('/order/find', function(Request $request){
    return response()->json([
        'success' => true,
        'data' => [
            'id' => 1,
            'vin' => 'vin code',
            'grnz' => 'grnz code',
        ]
    ]);
});
