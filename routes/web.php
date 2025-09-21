<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ProductController as AdminProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('product', [ProductController::class, 'index'])->name('product');
Route::get('about', [AboutController::class, 'index'])->name('about');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::prefix('administrator')
    ->name('admin.')
    ->middleware(['auth'])
    ->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        // data user
        Route::prefix('user')
            ->name('user.')
            ->group(function () {
                Route::get('/', [UserController::class, 'index'])->name('index');
            });

        // data category
        Route::prefix('category')
            ->name('category.')
            ->group(function () {
                Route::get('/', [CategoryController::class, 'index'])->name('index');
                Route::post('/store', [CategoryController::class, 'store'])->name('store');
                Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('edit');
                Route::post('/update/{id}', [CategoryController::class, 'update'])->name('update');
                Route::post('/destroy/{id}', [CategoryController::class, 'destroy'])->name('destroy');
            });

        // data product
        Route::prefix('product')
            ->name('product.')
            ->group(function () {
                Route::get('/', [AdminProductController::class, 'index'])->name('index');
                Route::post('/store', [AdminProductController::class, 'store'])->name('store');
                Route::get('/edit/{id}', [AdminProductController::class, 'edit'])->name('edit');
                Route::put('/update/{id}', [AdminProductController::class, 'update'])->name('update');
                Route::delete('/destroy/{id}', [AdminProductController::class, 'destroy'])->name('destroy');
            });
    });

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
