<?php

//use Illuminate\Support\Facades\Route;
use App\Extended\Facade\Route;


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

Route::restCrud('categories', \App\Http\Controllers\CategoriesController::class);
Route::restCrud('products', \App\Http\Controllers\ProductsController::class);

Route::any('/', function () {
    return ["Nothing else matters"];
});
