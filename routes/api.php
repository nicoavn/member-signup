<?php

use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Driver;

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
// ['auth:api']
Route::middleware([])->group(function () {
    Route::get('/vehicle/makes/{year?}', [ApiController::class, 'vehicleMakes']);
    Route::get('/vehicle/models/{make}/{year?}', [ApiController::class, 'vehicleModels']);
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::get('/driver', function (Request $request) {
//    return Driver::with(['address', 'driverDocument'])->get();
//});

