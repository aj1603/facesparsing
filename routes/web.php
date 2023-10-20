<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PrivateController;
use App\Http\Controllers\SkincareController;
use App\Http\Controllers\HairMistController;
use App\Http\Controllers\HaircareController;
use App\Http\Controllers\MoneyController;
use App\Http\Controllers\MakeupController;


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

Route::get('/allproducts', [ProductController::class, 'allproducts'])->name('import-view');
Route::post('/import', [ProductController::class, 'import'])->name('import');
Route::get('/export', [ProductController::class, 'export'])->name('export');

Route::get('/', [ProductController::class, 'productall']);
Route::get('/privatedb', [PrivateController::class, 'privatedb']);
Route::get('/hairmistdb', [HairMistController::class, 'hairmistdb']);

Route::get('/price', [MoneyController::class]);
Route::get('/create', [MoneyController::class, 'create']);
Route::post('/store', [MoneyController::class, 'store']);

Route::get('/skincaredb', [SkincareController::class, 'skincaredb']);

Route::get('/makeupdb', [MakeupController::class, 'makeupdb']);

Route::get('/haircaredb', [HaircareController::class, 'haircaredb']);