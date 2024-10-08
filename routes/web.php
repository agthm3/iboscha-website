<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ShopController;
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
Route::get('/',[HomeController::class, 'index'] )->name('home.index');

Route::prefix('service')->group(function () {
    Route::get('/tracking', [ServiceController::class, 'index'])->name('service.index');
});
Route::prefix('toko')->group(function () {
    Route::get('/katalog', [ShopController::class, 'index'])->name('shop.index');
});
Route::prefix('blog')->group(function () {
    Route::get('/article', [ArticleController::class, 'index'])->name('blog.index');
    Route::get('/show',[ArticleController::class, 'show'])->name('blog.show');
});
Route::prefix('contant')->group(function () {
    Route::get('/detail', [ContactController::class, 'index'])->name('contact.index');
});



// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

include 'dashboard.php';
