<?php

use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    var_dump(DB::table('products')
        ->where('product_code','106259')
        ->select('product_code', 'description')
        ->get());
});

Auth::routes();

// Dashboard Route
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Admin => Import Route
Route::get('/admin/import', [App\Http\Controllers\Admin\ImportController::class, 'index'])->name('admin.import.index');
Route::post('/admin/import', [App\Http\Controllers\Admin\ImportController::class, 'import'])->name('admin.import.store');

// Products Route
Route::get('/produtos', [App\Http\Controllers\ProductController::class, 'index'])->name('product.index');
Route::get('/produtos-lista', [App\Http\Controllers\ProductController::class, 'getList'])->name('product.list');