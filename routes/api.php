<?php

use App\Extended\Facade\Route;
use Illuminate\Http\Request;

//use Illuminate\Support\Facades\Route;

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

Route::restCrud('categories', \App\Http\Controllers\Categories::class);
Route::restCrud('products', \App\Http\Controllers\Products::class);

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/', function (Request $request) {
    return ['Nothing else matters'];
});
