<?php

use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\Market\BrandController;
use App\Http\Controllers\Admin\Market\CategoryController;
use App\Http\Controllers\Admin\Market\CommentController;
use App\Http\Controllers\Admin\Market\DeliveryController;
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

/*
|--------------------------------------------------------------------------
| Admin
|--------------------------------------------------------------------------
*/

Route::prefix('admin')->namespace('Admin')->group(function () {
    Route::get('/', [AdminDashboardController::class, 'index'])->name('admin.index');
    Route::prefix('market')->namespace('Market')->group(function () {
        Route::prefix('category')->group(function () {
            Route::get('/', [CategoryController::class, 'index'])->name('admin.market.category.index');
            Route::get('/catergory/{id}', [CategoryController::class, 'show'])->name('admin.market.category.show');
            Route::get('/create', [CategoryController::class, 'create'])->name('admin.market.category.create');
            Route::post('/store', [CategoryController::class, 'store'])->name('admin.market.category.store');
            Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('admin.market.category.edit');
            Route::get('/update/{id}', [CategoryController::class, 'update'])->name('admin.market.category.update');
            Route::get('/destroy/{id}', [CategoryController::class, 'destroy'])->name('admin.market.category.destroy');
        });

        Route::prefix('brand')->group(function () {
            Route::get('/', [BrandController::class, 'index'])->name('admin.market.brand.index');
            Route::get('/brand/{id}', [BrandController::class, 'show'])->name('admin.market.brand.show');
            Route::get('/create', [BrandController::class, 'create'])->name('admin.market.brand.create');
            Route::post('/store', [BrandController::class, 'store'])->name('admin.market.brand.store');
            Route::get('/edit/{id}', [BrandController::class, 'edit'])->name('admin.market.brand.edit');
            Route::get('/update/{id}', [BrandController::class, 'update'])->name('admin.market.brand.update');
            Route::get('/destroy/{id}', [BrandController::class, 'destroy'])->name('admin.market.brand.destroy');
        });
        Route::prefix('comment')->group(function () {
            Route::get('/', [CommentController::class, 'index'])->name('admin.market.comment.index');
            Route::get('/comment/show', [CommentController::class, 'show'])->name('admin.market.comment.show');
            Route::get('/create', [CommentController::class, 'store'])->name('admin.market.comment.store');
            Route::get('/edit/{id}', [CommentController::class, 'edit'])->name('admin.market.comment.edit');
            Route::get('/update/{id}', [CommentController::class, 'update'])->name('admin.market.comment.update');
            Route::get('/destroy/{id}', [CommentController::class, 'destroy'])->name('admin.market.comment.destroy');
        });

        Route::prefix('delivery')->group(function () {
            Route::get('/', [DeliveryController::class, 'index'])->name('admin.market.delivery.index');
            Route::get('/show/{id}', [DeliveryController::class, 'show'])->name('admin.market.delivery.show');
            Route::get('/create', [DeliveryController::class, 'create'])->name('admin.market.delivery.create');
            Route::post('/store', [DeliveryController::class, 'store'])->name('admin.market.delivery.store');
            Route::get('/edit/{id}', [DeliveryController::class, 'edit'])->name('admin.market.delivery.edit');
            Route::get('/update/{id}', [DeliveryController::class, 'update'])->name('admin.market.delivery.update');
            Route::get('/destroy/{id}', [DeliveryController::class, 'destroy'])->name('admin.market.delivery.destroy');
        });
    });
});