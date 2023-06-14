<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [ProductController::class, 'index'])->name('home');
Route::get('/products/{product}', [ProductController::class, 'show'])->name('product.show');


Route::middleware(['auth', 'verified'])->group(function () {
    /** dashboard routes */
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/dashboard/products', [DashboardController::class, 'products'])->name('dashboard.products');
    Route::get('/dashboard/suppliers', [DashboardController::class, 'suppliers'])->name('dashboard.suppliers');
    Route::get('/dashboard/customers', [DashboardController::class, 'customers'])->name('dashboard.customers');
    Route::get('/dashboard/sales', [DashboardController::class, 'sales'])->name('dashboard.sales');

    //Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    //Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    //Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
