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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/products', function () {
    return response()->json([
        "message" => "GET method success"
    ]);
});

Route::post('products', function () {
    return response()->json([
        "message" => "POST method success"
    ]);
});

Route::put('products/{id}', function ($id) {
    return response()->json([
        "message" => "PUT method success " . $id
    ]);
});

Route::delete('products/{id}', function ($id) {
    return response()->json([
        "message" => "DELETE method success " . $id
    ]);
});
