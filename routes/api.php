<?php

use App\Models\Stop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoutesController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("/lines", 'App\Http\Controllers\LineController@all');
Route::get("/stops", 'App\Http\Controllers\StopController@all');
Route::get('/routes/{id}', [RoutesController::class, 'index']);
Route::get('/version', function () {
    return response()->json(["version" => "1.0"], 200);
});
Route::prefix("stops")->group(function() {
    Route::get("/a1", 'App\Http\Controllers\StopController@a1');
    Route::get("/a2", 'App\Http\Controllers\StopController@a2');
    Route::get("/b1", 'App\Http\Controllers\StopController@b1');
    Route::get("/b2", 'App\Http\Controllers\StopController@b2');
    Route::get("/c1", 'App\Http\Controllers\StopController@c1');
    Route::get("/c2", 'App\Http\Controllers\StopController@c2');
    Route::get("/d1", 'App\Http\Controllers\StopController@d1');
    Route::get("/d2", 'App\Http\Controllers\StopController@d2');
    Route::get("/e1", 'App\Http\Controllers\StopController@e1');
    Route::get("/e2", 'App\Http\Controllers\StopController@e2');
    Route::get("/f1", 'App\Http\Controllers\StopController@f1');
    Route::get("/f2", 'App\Http\Controllers\StopController@f2');
    Route::get("/g1", 'App\Http\Controllers\StopController@g1');
    Route::get("/g2", 'App\Http\Controllers\StopController@g2');
    Route::get("/h1", 'App\Http\Controllers\StopController@h1');
    Route::get("/h2", 'App\Http\Controllers\StopController@h2');
    Route::get("/j1", 'App\Http\Controllers\StopController@j1');
    Route::get("/j2", 'App\Http\Controllers\StopController@j2');
    Route::get("/k1", 'App\Http\Controllers\StopController@k1');
    Route::get("/k2", 'App\Http\Controllers\StopController@k2');
    Route::get("/l1", 'App\Http\Controllers\StopController@l1');
    Route::get("/l2", 'App\Http\Controllers\StopController@l2');
    Route::get("/m", 'App\Http\Controllers\StopController@m');
    Route::get("/n1", 'App\Http\Controllers\StopController@n1');
    Route::get("/n2", 'App\Http\Controllers\StopController@n2');
    Route::get("/o1", 'App\Http\Controllers\StopController@o1');
    Route::get("/o2", 'App\Http\Controllers\StopController@o2');
    Route::get("/u1", 'App\Http\Controllers\StopController@u1');
    Route::get("/u2", 'App\Http\Controllers\StopController@u2');
    Route::get("/v1", 'App\Http\Controllers\StopController@v1');
    Route::get("/v2", 'App\Http\Controllers\StopController@v2');
});

