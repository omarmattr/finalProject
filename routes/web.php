<?php

use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\SignupController;
    use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\user\SearchController;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\store\StoresController;

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

//Route::get('/signup',[SignupController::class, "index"])->middleware('auth');
//Route::post('/signup',[SignupController::class, "create"]);

Auth::routes();
Route::get("/",function (){
    return view("auth.login");
});
Route::get('/category', [CategoryController::class, 'index'])->name('category')->middleware('auth');

Route::get('/user/stores',[StoreController::class, "indexUser"]);
Route::get('/user/search',[SearchController::class, "index"]);
Route::get('/user/category',[CategoryController::class, "indexUser"]);
Route::get('/user/rating',[ReviewController::class, "create"]);


//Route::get('/', [LoginController::class, "index"])->middleware('auth');
//Route::post('/login', [LoginController::class, "login"])->middleware('auth');


Route::get('/category/update/{id}', [CategoryController::class, "edit"])->middleware('auth');
Route::post('/category/update/{id}', [CategoryController::class, "update"])->middleware('auth');

Route::get('/category/delete/{id}', [CategoryController::class, "destroy"])->middleware('auth');


Route::get('/category/create', [CategoryController::class, "create"])->middleware('auth');
Route::post('/category/create', [CategoryController::class, "store"])->middleware('auth');


Route::get('/store', [StoreController::class, "index"])->name('store')->middleware('auth');

Route::get('/store/update/{id}', [StoreController::class, "edit"])->middleware('auth');
Route::post('/store/update/{id}', [StoreController::class, "update"])->middleware('auth');

Route::get('/store/delete/{id}', [StoreController::class, "destroy"])->middleware('auth');

Route::get('/store/create', [StoreController::class, "create"])->middleware('auth');
Route::post('/store/create', [StoreController::class, "store"])->middleware('auth');

Route::get('/review', [ReviewController::class, "index"])->middleware('auth');





